import fs from 'fs';
import process from 'process';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import glob from 'fast-glob';

/**
 * Main function to escape patterns in PHP files
 * 
 * @param {string[]} patternsAndThemes - Paths to patterns or theme directories
 * @param {Object} options - Configuration options
 */
async function escapePatterns(patternsAndThemes, options = {}) {
  for (const themeOrPattern of patternsAndThemes) {
    const isTheme = fs.statSync(themeOrPattern).isDirectory();
    const themeSlug = isTheme ? themeOrPattern : themeOrPattern.split('/', 1)[0];
    const textDomain = options?.textDomain ?? themeSlug;
    const patterns = isTheme
      ? await glob(`${themeSlug}/patterns/*.php`)
      : [themeOrPattern];

    console.log(`Processing ${patterns.length} pattern files with text domain "${textDomain}"...`);

    for (const file of patterns) {
      console.log(`  - ${file}`);
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
          resolve();
        });
        
        writeStream.on('error', reject);
        readStream.on('error', reject);
        
        readStream.pipe(rewriter).pipe(writeStream);
      });
    }
  }

  // Helper functions for rewriting content
  function getReWriter(textDomain) {
    const rewriter = new RewritingStream();

    rewriter.on('text', (_, raw) => {
      rewriter.emitRaw(escapeText(raw, textDomain));
    });

    rewriter.on('startTag', (startTag, rawHtml) => {
      if (startTag.tagName === 'img') {
        const attrs = startTag.attrs.filter((attr) =>
          ['src', 'alt'].includes(attr.name)
        );
        attrs.forEach((attr) => {
          if (attr.name === 'src') {
            attr.value = escapeImagePath(attr.value);
          } else if (attr.name === 'alt') {
            attr.value = escapeText(attr.value, textDomain, true);
          }
        });
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
      // escape the strings in block config (blocks that are represented as comments)
      // ex: <!-- wp:search {label: "Search"} /-->
      const block = escapeBlockAttrs(comment.text, textDomain);
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
    if (!src || src.trim().startsWith('<?php')) return src;

    const assetsDir = 'assets';
    const parts = src.split('/');
    const resultSrc = parts.slice(parts.indexOf(assetsDir)).join('/');
    return `<?php echo esc_url( get_template_directory_uri() ); ?>/${resultSrc}`;
  }
}

// Main execution
(async function main() {
  const args = process.argv.slice(2);
  let textDomain = null;
  let paths = [];

  // Parse command line arguments
  for (let i = 0; i < args.length; i++) {
    if (args[i].startsWith('--text-domain=')) {
      textDomain = args[i].split('=')[1];
    } else {
      paths.push(args[i]);
    }
  }

  // Default to current directory if no paths provided
  if (paths.length === 0) {
    paths.push('.');
  }

  // Run the pattern escaping
  try {
    await escapePatterns(paths, { textDomain });
    console.log('Done processing pattern files.');
  } catch (error) {
    console.error('Error processing patterns:', error);
    process.exit(1);
  }
})();
