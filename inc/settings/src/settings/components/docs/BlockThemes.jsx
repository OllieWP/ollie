import {Video} from "../../components/partials/Video";
const {__} = wp.i18n;

function DocsBlockThemes() {
    return (
        <section>
		<h2 id="block-theme-intro">
			{__('Working with Block Themes', 'ollie')}
		</h2>

		<Video
			title={__('What is a block theme?', 'ollie')}
			tagline={__('Let\'s dig into block themes and learn about all of the powerful new features.', 'ollie')}
			videoId={'D7GUoX2XU1k'}
		/>

		<p>
			{__(
				'Once you activate Ollie, it will largely behave like any other traditional WordPress theme. You can create posts and pages just like you always have. However, as a block theme, Ollie also supports powerful new features like the Site Editor, patterns, global styles, and more.',
				'ollie'
			)}
		</p>

		<p>
			{__(
				'A block theme is a WordPress theme with templates entirely composed of blocks so that in addition to post and page content, the block editor can also be used to edit all areas of the site — headers, footers, templates, and more.',
				'ollie'
			)}
		</p>

		<hr />

		<h3 id="site-editor">
			{__('Site Editor', 'ollie')}
		</h3>

		<Video
			title={__('Site Editor 101', 'ollie')}
			tagline={__('Learn how to fully customize the Ollie theme with the WordPress Site Editor.', 'ollie')}
			videoId={'51-FInsYsGs'}
		/>

		<p>
			{__(
				'The WordPress Site Editor is the new way to build beautiful websites with WordPress. Using blocks, patterns, and a full suite of drag-and-drop design tools, you can build pages right inside WordPress without an extra page builder.',
				'ollie'
			)}
		</p>

		<p>
			{__(
				'To edit your site via the Site Editor, go to <strong>Appearance → Editor</strong>. Here, you can create and edit templates, create menus, customize your website styles, color palette, typography, block styles, and much more. This interface is where you’ll design and build your site before exporting it later.',
				'ollie'
			)}
		</p>

		<hr />

		<h3 id="patterns">
			{__('Patterns', 'ollie')}
		</h3>

		<Video
			title={__('Working with Patterns', 'ollie')}
			tagline={__('Design pixel-perfect pages with the growing collection of Ollie patterns.', 'ollie')}
			videoId={'w8DehSH1_PA'}
		/>

		<p>
			{__(
				'Patterns are pre-designed page elements that can be used to quickly design a page section or a full page layout. Instead of designing a page from scratch, WordPress creators can now lean on patterns to quickly design their full website in the WordPress Site Editor.',
				'ollie'
			)}
		</p>

		<p>
			{__(
				'You can access Ollie’s patterns via the block inserter on posts, pages, or in the Site Editor.',
				'ollie'
			)}
		</p>

		<p>
			{__(
				'Watch the video above to learn how to browse Ollie\'s patterns, how to create your own patterns, how to quickly design full pages with patterns, and more.',
				'ollie'
			)}
		</p>

		<hr />

		<h3 id="global-styles">
			{__('Global Styles', 'ollie')}
		</h3>

		<Video
			title={__('Global Styles', 'ollie')}
			tagline={__('Quickly and easily change your site\'s fonts, colors, and more with global styles.', 'ollie')}
			videoId={'6RavZxNFy2Y'}
		/>

		<p>
			{__(
				'Global styles is the user interface in the Site Editor where you can modify all the styles associated with your site. This could be typography, fonts, button colors, link colors, layout defaults, and more.',
				'ollie'
			)}
		</p>

		<p>
			{__(
				'Global styles is powered by a theme.json in the root of the theme folder. This configuration file lets you define site-wide and block-specific styles to be used by the global styles interface.',
				'ollie'
			)}
		</p>

		<hr />

		<h3 id="site-export">
			{__('Export Your Site', 'ollie')}
		</h3>

		<p>
			{__(
				'Once you’ve finished building and customizing your site with the Site Editor, you can export a zip to install on another site. While in the Site Editor, go to the Options menu (upper right hand corner), and select Export under the Tools heading. WordPress will write all of your changes to a theme zip file.',
				'ollie'
			)}
		</p>
	</section>

    )
}
export default DocsBlockThemes;
