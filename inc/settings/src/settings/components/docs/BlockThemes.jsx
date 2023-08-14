import {Video} from "../../components/partials/Video";

const {__} = wp.i18n;

function DocsBlockThemes() {
    return (
        <section>
			<h2 id="block-theme-intro">Working with Block Themes</h2>

			<Video 
				title={__('What is a block theme?', 'ollie')}
				tagline={__('Let\'s dig into block themes and learn about all of the powerful new features.', 'ollie')}
				videoId={'D7GUoX2XU1k'}
			/>

			<p>Once you activate Ollie, it will largely behave like any other traditional WordPress theme. You can create posts and pages just like you always have. However, as a block theme, Ollie also supports powerful new features like the site editor, patterns, global styles, and more.</p>

			<p>A block theme is a WordPress theme with templates entirely composed of blocks so that in addition to post and page content, the block editor can also be used to edit all areas of the site — headers, footers, templates, and more.</p>

			<hr/>

			<h3 id="site-editor">Site Editor</h3>

			<Video 
				title={__('Site Editor 101', 'ollie')}
				tagline={__('Learn about the Ollie dashboard and the Ollie setup wizard.', 'ollie')}
				videoId={'51-FInsYsGs'}
			/>

			<p>The WordPress site editor is the new way to build beautiful websites with WordPress. Using blocks, patterns, and a full suite of drag-and-drop design tools, you can build pages right inside WordPress without an extra page builder.</p>

			<p>To edit your site via the site editor, go to <code>Appearance → Editor</code>. Here, you can create and edit templates, create menus, customize your website styles, color palette, typography, block styles, and much more. This interface is where you’ll design and build your site before exporting it later.</p>

			<hr/>

			<h3 id="patterns">Patterns</h3>

			<Video 
				title={__('Working with Patterns', 'ollie')}
				tagline={__('Design pixel-perfect pages with the growing collection of Ollie patterns.', 'ollie')}
				videoId={'w8DehSH1_PA'}
			/>

			<p>Patterns are pre-designed page elements that can be used to quickly design a page section or a full page layout. Instead of designing a page from scratch, WordPress creators can now lean on patterns to quickly design their full website in the WordPress Site Editor.</p>

			<p>You can access Ollie’s patterns via the block inserter on posts, pages, or in the site editor.</p>

			<p>To create the pages you see on the <a href="https://demo.olliewp.com">Ollie theme demo</a>, simply insert Ollie’s full-page patterns onto any page, and apply the <strong>No Page Title</strong> template via the editor sidebar. This template removes the default page title, which better accommodates the full-page patterns, so make sure you have an H1 in your design for SEO best practices.</p>

			<hr/>

			<h3 id="global-styles">Global Styles</h3>

			<Video 
				title={__('Global Styles', 'ollie')}
				tagline={__('Quickly and easily change your site\'s fonts, colors, and more with global styles.', 'ollie')}
				videoId={'6RavZxNFy2Y'}
			/>

			<p>Global styles is the user interface in the Site Editor where you can modify all the styles associated with your site. This could be typography, fonts, button colors, link colors, layout defaults, and more.</p>

			<p>Global styles is powered by a theme.json in the root of the theme folder. This configuration file lets you define site-wide and block-specific styles to be used by the global styles interface.</p>

			<hr/>

			<h3 id="template-parts">Template Parts</h3>

			<p>A template part is a part of your site that appears across most or all pages. The most common template parts are for the header, footer, and sidebar of a website. Template parts let you easily make global changes to the design or markup of global site elements.</p>

			<hr/>

			<h3 id="site-export">Export Your Site</h3>

			<p>Once you’ve finished building and customizing your site with the site editor, you can export a zip to install on another site. While in the site editor, go to the Options menu (upper right hand corner), and select Export under the Tools heading. WordPress will write all of your changes to a theme zip file.</p>
        </section>
    )
}
export default DocsBlockThemes;
