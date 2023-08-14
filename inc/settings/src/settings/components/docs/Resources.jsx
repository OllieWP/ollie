const {__} = wp.i18n;

function Resources() {
    return (
        <section>
			<h2 id="resources">Resources</h2>

			<p>Once you activate Ollie, it will largely behave like any other traditional WordPress theme. You can create posts and pages just like you always have. However, as a block theme, Ollie also supports powerful new features like the site editor, patterns, global styles, and more.</p>

			<p>A block theme is a WordPress theme with templates entirely composed of blocks so that in addition to post and page content, the block editor can also be used to edit all areas of the site — headers, footers, templates, and more.</p>

			<hr/>

			<h3 id="developer-notes">Developer Notes</h3>

			<p>The Ollie theme works out of the box, so no build steps are required. However, I have included a Composer file that is used for linting to PHP and WordPress core standards.</p>

			<ul>
				<li>composer run lint</li>
				<li>composer run wpcs:scan</li>
				<li>composer run wpcs:fix</li>
			</ul>
			
			<hr/>

			<h3 id="license">License</h3>

			<p>Ollie is licensed under the <a href="https://www.gnu.org/licenses/gpl-3.0.html">GPL-3.0 license.</a></p>

			<hr/>

			<h3 id="feedback">Feedback</h3>

			<p>Ollie is a new theme built on bleeding edge features in WordPress, so we're always looking for feedback. Please <a href="https://github.com/OllieWP/ollie/issues/new/choose">open a new issue</a> for bug reports, feature requests, or general feedback.</p>

			<hr/>

			<h3 id="about-creator">About the Creator</h3>

			<p>Ollie was created by <a href="https://mikemcalister.com">Mike McAlister</a> and <a href="https://patrickposner.dev">Patrick Posner</a>, a team of code-slinging, pixel-pushing, award-winning creators from Planet Earth.</p>

			<ul>
				<li>Check out Mike's <a href="https://mikemcalister.com">website</a></li>
				<li>Find Mike on <a href="https://twitter.com/mikemcalister">Twitter</a></li>
				<li>Read Mike's writings at <a href="https://olliewp.com">Ollie</a> and <a href="https://liftoffcourse.com">Liftoff</a></li>
			</ul>

			<ul>
				<li>Check out Patricks's <a href="https://patrickposner.dev/">website</a></li>
				<li>Find Patrick on <a href="https://twitter.com/patrickposner_">Twitter</a></li>
				<li>Read Patrick's writings on <a href="https://patrickposner.dev/blog/">his website</a> and <a href="https://simplystatic.com/tutorials/">Simply Static</a></li>
			</ul>

			<hr/>

			<h3 id="support">Support</h3>

			<p>Got a question about the Ollie theme or want to report a bug? <a href="https://github.com/OllieWP/ollie/issues/new/choose">Submit an issue</a> to the <a href="https://github.com/OllieWP/ollie/">Ollie GitHub repo</a> where we can track and fix the issue for you.</p>
        </section>
    )
}
export default Resources;
