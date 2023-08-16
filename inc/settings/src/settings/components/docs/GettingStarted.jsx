const {__} = wp.i18n;
import {Video} from "../partials/Video";

function GettingStarted() {
    return (
        <section>
            <h2 id="getting-started">Getting Started with Ollie</h2>

			<ul>
				<li><p>View a live demo of the Ollie theme. <a href="https://demo.olliewp.com/">View Ollie Demo</a></p></li>
				<li><p>Download the Ollie theme zip to install on your WordPress site. <a href="https://github.com/OllieWP/ollie/releases/latest/download/ollie.zip">Download Ollie Theme</a></p></li>
				<li><p>Download a zip of the Ollie demo site that can be imported into LocalWP. <a href="https://github.com/OllieWP/ollie/releases/latest/download/ollie-local-blueprint.zip">Download Ollie LocalWP Blueprint</a></p></li>
			</ul>

			<p>There are a few ways to install Ollie on your WordPress website. The easiest way is to install it from within your WordPress admin. Go to <strong>Appearance → Themes → Add New</strong> and search for Ollie. </p>

			<p>You can also install Ollie manually by downloading the theme and uploading it to your WordPress site. You can download Ollie for free at <a href="https://olliewp.com">OllieWP.com</a> and also via the <a href="https://github.com/OllieWP/ollie"> GitHub repository</a>.</p>

			<h3 id="ollie-dashboard">Ollie Theme Dashboard</h3>

			<Video 
				title={__('Intro to Ollie', 'ollie')}
				tagline={__('Learn about the Ollie dashboard and the Ollie setup wizard.', 'ollie')}
				videoId={'JZ1EgDaDAH0'}
			/>

			<p>Once you activate the Ollie theme, you will see a pop-up guiding you to the Ollie theme dashboard. You can also get to the dashboard by visiting <strong>Appearance → Ollie</strong>. This dashboard is a one-stop hub for all the resources we’ve included with the Ollie theme. Here, you’ll find a Welcome page with helpful links, Ollie docs, the Ollie theme setup wizard, and the video library.</p>

			<h3 id="theme-setup-wizard">Theme Setup Wizard</h3>

			<Video 
				title={__('Ollie Setup Wizard', 'ollie')}
				tagline={__('Set up your site with a few clicks with the Ollie Setup Wizard.', 'ollie')}
				videoId={'OiO4gNDY0VQ'}
			/>

			<p>Whenever you set up a new WordPress site, there’s always a dozen different tasks that you have to complete while jumping around the WordPress admin. Creating pages, designing layouts, setting up your brand assets, and a whole bunch of other stuff. </p>

			<p>Well, you don’t have to do that anymore! The Ollie theme Setup wizard is a one-of-a-kind onboarding experience that automates all of those pesky tasks and handles them in one streamlined experience. </p>

			<p>The setup wizard will help you change common settings, set up your logo and brand colors, and automatically create pixel-perfect pages for you with just a few clicks. The setup wizard isn’t just for new sites. You can use the wizard to quickly generate pages on existing sites as well. </p>

			<p>From your WordPress dashboard, you can find the Ollie setup wizard by going to <strong>Appearance → Ollie → Theme Setup</strong>, or by following the pop-up upon theme activation.</p>
        </section>
    )
}
export default GettingStarted;
