import fs from 'fs';
import process from 'process';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import glob from 'fast-glob';
import chokidar from 'chokidar';
import path from 'path';

/**
 * Main function to escape patterns in PHP files
 * 
 * @param {string[]} patternsAndThemes - Paths to patterns or theme directories
 * @param {Object} options - Configuration options
 * @returns {Promise<Set>} Set of changed files
 */
async function escapePatterns(patternsAndThemes, options = {}) {
  const changedFiles = new Set();
  
  for (const themeOrPattern of patternsAndThemes) {
    const isTheme = fs.statSync(themeOrPattern).isDirectory();
    const themeSlug = isTheme ? themeOrPattern : themeOrPattern.split('/', 1)[0];
    const textDomain = options?.textDomain ?? themeSlug;
    const patterns = isTheme
      ? await glob(`${themeSlug}/patterns/**/*.php`) // Include subdirectories
      : [themeOrPattern];

    if (!options.quiet) {
      console.log(`Processing ${patterns.length} pattern files with text domain "${textDomain}"...`);
    }

    for (const file of patterns) {
      if (!options.quiet) {
        console.log(`  - ${file}`);
      }
      
      // First read the file completely to check if it needs changes
      const originalContent = await fs.promises.readFile(file, 'UTF-8');
      
      // For debugging - show what we're finding in the content
      if (options.debug) {
        const imgMatches = [...originalContent.matchAll(/src="([^"]+)"/g)];
        console.log('Found image src attributes:');
        imgMatches.forEach(match => console.log(`  - ${match[1]}`));
      }
      
      const needsTranslation = checkIfNeedsTranslation(originalContent, textDomain);
      const hasStaticImagePaths = checkForStaticImagePaths(originalContent);
      
      if (!needsTranslation && !hasStaticImagePaths && !options.force) {
        if (!options.quiet) {
          console.log(`    - Already has translations and dynamic image paths, skipping`);
        }
        continue;
      }
      
      // Log what we're going to update
      if (hasStaticImagePaths && !options.quiet) {
        console.log(`    - Found static image paths to update`);
      }
      
      const rewriter = getReWriter(textDomain);
      const tmpFile = `${file}-tmp`;
      const readStream = fs.createReadStream(file, {
        encoding: 'UTF-8',
      });
      const writeStream = fs.createWriteStream(tmpFile, {
        encoding: 'UTF-8',
      });
      
      await new Promise((resolve, reject) => {
        writeStream.on('finish', () => {
          fs.renameSync(tmpFile, file);
          changedFiles.add(file);
          resolve();
        });
        
        writeStream.on('error', reject);
        readStream.on('error', reject);
        
        readStream.pipe(rewriter).pipe(writeStream);
      });
    }
  }
  
  return changedFiles;

  // Helper function to check if a file needs translation
  function checkIfNeedsTranslation(content, textDomain) {
    // If there are no PHP blocks or no mention of the text domain, it needs translation
    return !content.includes(`<?php`) || !content.includes(`'${textDomain}'`);
  }

  // Helper function to check for static image paths
  function checkForStaticImagePaths(content) {
    // Check for image URLs that reference a domain or static path
    const staticSrcRegex = /src="https?:\/\/[^"]+\/(patterns\/images\/[^"]+)"/i;
    const staticUrlRegex = /"url":\s*"https?:\/\/[^"]+(patterns\/images\/[^"]+)"/i;
    
    return staticSrcRegex.test(content) || staticUrlRegex.test(content);
  }

  // Helper functions for rewriting content
  function getReWriter(textDomain) {
    const rewriter = new RewritingStream();

    rewriter.on('text', (_, raw) => {
      rewriter.emitRaw(escapeText(raw, textDomain));
    });

    rewriter.on('startTag', (startTag, rawHtml) => {
      if (startTag.tagName === 'img') {
        const attrs = startTag.attrs;
        
        // Find and process src attribute
        const srcAttr = attrs.find(attr => attr.name === 'src');
        if (srcAttr) {
          const originalSrc = srcAttr.value;
          const newSrc = escapeImagePath(originalSrc);
          
          if (options.debug) {
            console.log(`Processing image src:`, { 
              originalSrc, 
              newSrc,
              changed: originalSrc !== newSrc 
            });
          }
          
          srcAttr.value = newSrc;
        }
        
        // Find and process alt attribute
        const altAttr = attrs.find(attr => attr.name === 'alt');
        if (altAttr) {
          altAttr.value = escapeText(altAttr.value, textDomain, true);
        }
      }

      const ariaLabel = startTag.attrs.find(
        (attr) => attr.name === 'aria-label'
      );
      if (ariaLabel) {
        ariaLabel.value = escapeText(
          ariaLabel.value,
          textDomain,
          true
        );
      }

      rewriter.emitStartTag(startTag);
    });

    rewriter.on('comment', (comment, rawHtml) => {
      if (comment.text.startsWith('?php')) {
        rewriter.emitRaw(rawHtml);
        return;
      }
      
      // Process image URLs in JSON configs
      let processedComment = comment.text;
      
      // Handle "url" fields in block configs
      const urlRegex = /("url":\s*")https?:\/\/[^"]+(\/patterns\/images\/[^"]+)(")/g;
      processedComment = processedComment.replace(urlRegex, (match, prefix, imagePath, suffix) => {
        return `${prefix}<?php echo esc_url( get_template_directory_uri() ); ?>${imagePath}${suffix}`;
      });
      
      // escape the strings in block config (blocks that are represented as comments)
      // ex: <!-- wp:search {label: "Search"} /-->
      const block = escapeBlockAttrs(processedComment, textDomain);
      
      rewriter.emitComment({ ...comment, text: block });
    });

    return rewriter;
  }

  function escapeBlockAttrs(block, textDomain) {
    // Set isAttr to true if it is an attribute in the result HTML
    // If set to true, it generates esc_attr_, otherwise it generates esc_html_
    const allowedAttrs = [
      { name: 'label' },
      { name: 'placeholder', isAttr: true },
      { name: 'buttonText' },
      { name: 'content' },
      { name: 'ariaLabel', isAttr: true },
    ];
    const start = block.indexOf('{');
    const end = block.lastIndexOf('}');

    if (start === -1 || end === -1 || start >= end) {
      return block;
    }

    const configPrefix = block.slice(0, start);
    const config = block.slice(start, end + 1);
    const configSuffix = block.slice(end + 1);

    try {
      const configJson = JSON.parse(config);
      allowedAttrs.forEach((attr) => {
        if (!configJson[attr.name]) return;
        configJson[attr.name] = escapeText(
          configJson[attr.name],
          textDomain,
          attr.isAttr
        );
      });
      return configPrefix + JSON.stringify(configJson) + configSuffix;
    } catch (error) {
      // do nothing
      return block;
    }
  }

  function escapeText(text, textDomain, isAttr = false) {
    const trimmedText = text && text.trim();
    if (
      !textDomain ||
      !trimmedText ||
      trimmedText.startsWith(`<?php`)
    ) {
      return text;
    }
    const escFunction = isAttr ? 'esc_attr_e' : 'esc_html_e';
    const spaceChar = text.startsWith(' ') ? '&nbsp;' : '';
    const resultText = text.replace(/'/g, "\\'").trim();
    return `${spaceChar}<?php ${escFunction}( '${resultText}', '${textDomain}' ); ?>`;
  }

  function escapeImagePath(src) {
    if (!src || src.trim().startsWith('<?php')) {
      return src;
    }

    // First detect if this is a pattern image path
    // This regex handles URLs like https://ollietheme.local/wp-content/themes/ollie/patterns/images/avatar-7.webp
    const patternMatch = src.match(/https?:\/\/[^\/]+\/(?:[^\/]+\/)*(?:wp-content\/themes\/[^\/]+\/)?patterns\/images\/([^"'\s]+)/i);
    
    if (patternMatch) {
      if (options.debug) {
        console.log('Pattern image match:', patternMatch[0], '->', patternMatch[1]);
      }
      return `<?php echo esc_url( get_template_directory_uri() ); ?>/patterns/images/${patternMatch[1]}`;
    }

    // Legacy code for asset directory
    const assetsDir = 'assets';
    const parts = src.split('/');
    const assetsIndex = parts.indexOf(assetsDir);
    
    if (assetsIndex !== -1) {
      const resultSrc = parts.slice(assetsIndex).join('/');
      return `<?php echo esc_url( get_template_directory_uri() ); ?>/${resultSrc}`;
    }

    return src;
  }
}

/**
 * Watch pattern files for changes and process them
 * 
 * @param {Object} options - Watch options
 */
async function watchPatterns(options = {}) {
  // Paths to watch - include subdirectories
  const watchPaths = ['./patterns/**/*.php'];
  const textDomain = options.textDomain || 'ollie';
  const debug = options.debug || false;
  
  // Track files that are being processed to prevent loops
  const processingFiles = new Set();
  // Track files recently processed to avoid double-processing
  const recentlyProcessed = new Map();

  async function processFile(filePath) {
    // Skip if this file is currently being processed
    if (processingFiles.has(filePath)) {
      return;
    }
    
    // Check if this file was recently processed (within the last second)
    const now = Date.now();
    const lastProcessed = recentlyProcessed.get(filePath);
    if (lastProcessed && now - lastProcessed < 1000) {
      return;
    }
    
    try {
      processingFiles.add(filePath);
      
      console.log(`\n📝 File changed: ${path.relative('.', filePath)}`);
      console.log('🔄 Processing pattern translations and image paths...');
      
      // Process the changed file
      const changedFiles = await escapePatterns([filePath], { 
        textDomain,
        quiet: false,
        debug
      });
      
      if (changedFiles.size > 0) {
        console.log('✅ Pattern processing completed successfully!\n');
        
        // Mark all changed files as recently processed
        for (const file of changedFiles) {
          recentlyProcessed.set(file, now);
        }
        
        // Clean up old entries from the recently processed map
        for (const [file, time] of recentlyProcessed.entries()) {
          if (now - time > 5000) { // 5 seconds
            recentlyProcessed.delete(file);
          }
        }
      } else {
        console.log('ℹ️ No changes needed for this file.\n');
      }
    } catch (error) {
      console.error('❌ Error processing pattern:', error);
    } finally {
      processingFiles.delete(filePath);
    }
  }

  // Initialize watcher with proper settings to reduce false triggers
  console.log('👀 Watching for pattern file changes...');
  console.log('📁 Patterns directory: ./patterns/**/*.php');
  console.log('⏱️  Press Ctrl+C to stop');

  const watcher = chokidar.watch(watchPaths, {
    persistent: true,
    ignoreInitial: true,
    awaitWriteFinish: {
      stabilityThreshold: 300,
      pollInterval: 100
    }
  });

  watcher
    .on('add', processFile)
    .on('change', processFile);

  // Process all patterns at startup
  console.log('🚀 Processing all patterns on startup...');
  try {
    await escapePatterns(['.'], { textDomain, debug });
    console.log('✅ Initial pattern processing complete!');
  } catch (error) {
    console.error('❌ Error processing patterns:', error);
  }
}

// Command definitions
const commands = {
  'escape-patterns': {
    helpText: 'Escapes block patterns for translation and fixes image paths.',
    run: async (args) => {
      const { textDomain, paths, debug } = parseCommandArgs(args);
      await escapePatterns(paths.length ? paths : ['.'], { textDomain, debug });
    }
  },
  'watch': {
    helpText: 'Watches pattern files for changes and automatically processes them.',
    run: async (args) => {
      const { textDomain, debug } = parseCommandArgs(args);
      await watchPatterns({ textDomain, debug });
    }
  },
  'help': {
    helpText: 'Shows help information.',
    run: (args) => {
      const command = args[1];
      showHelp(command);
    }
  }
};

// Parse command line arguments
function parseCommandArgs(args) {
  let textDomain = null;
  let debug = false;
  let paths = [];

  for (let i = 1; i < args.length; i++) {
    if (args[i].startsWith('--text-domain=')) {
      textDomain = args[i].split('=')[1];
    } else if (args[i] === '--debug') {
      debug = true;
    } else {
      paths.push(args[i]);
    }
  }

  return { textDomain, paths, debug };
}

// Show help information
function showHelp(command) {
  if (command && commands[command]) {
    console.log(`\n${command}\n\n${commands[command].helpText}\n`);
    return;
  }

  console.log(`
Usage: node theme-utils.mjs <command> [options]

Commands:
  escape-patterns [--text-domain=DOMAIN] [PATHS]  Escapes block patterns for translation and fixes image paths
  watch [--text-domain=DOMAIN]                    Watches pattern files for changes and processes them
  help [command]                                  Shows help information

Options:
  --text-domain=DOMAIN                            Text domain to use for translations
  --debug                                         Enable debug logging
  
Examples:
  node theme-utils.mjs escape-patterns --text-domain=ollie
  node theme-utils.mjs watch --text-domain=ollie
  node theme-utils.mjs escape-patterns --debug --text-domain=ollie
  `);
}

// Main execution
(async function main() {
  const args = process.argv.slice(2);
  const command = args[0] || 'help';

  if (!commands[command]) {
    console.error(`Unknown command: ${command}`);
    showHelp();
    process.exit(1);
  }

  try {
    await commands[command].run(args);
  } catch (error) {
    console.error('Error:', error);
    process.exit(1);
  }
})();
