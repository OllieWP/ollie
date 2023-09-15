const {__} = wp.i18n;

function DocsIntroduction() {
    return (
        <section>
			<h2 id="introduction">
				{__('Ollie Block Theme Docs', 'ollie')}
			</h2>

			<p>
				{__(
					'Ollie is a WordPress block theme that integrates seamlessly with all of the powerful new site building features like the Site Editor, Patterns, Global Styles, and more. With Ollie, you can quickly and easily create beautiful, blazing-fast websites with the native WordPress site editor — no extra page builder or coding skills required.',
					'ollie'
				)}
			</p>

			<p>
				{__(
					'Ollie is one of the most beautiful block themes out there, shipping with over 50 pixel-perfect patterns that you can use to quickly build out page sections or full page designs. Everything from headers, footers, sidebars, and content areas are fully customizable with a drag and drop interface.',
					'ollie'
				)}
			</p>

			<p>
				{__(
					'Ollie is lightweight and blazing fast. Gone are the days of bloated WordPress websites that need a dozen plugins to look great and load fast. Ollie is fully-responsive out of the box and scores 100% across the board on performance tests.',
					'ollie'
				)}
			</p>

			<p>
				{__(
					'Ollie is also super simple to setup and build with. We’ve built a one-of-a-kind dashboard into the theme where you can run through the setup wizard and learn from our growing library of video tutorials.',
					'ollie'
				)}
			</p>
		</section>

    )
}
export default DocsIntroduction;
