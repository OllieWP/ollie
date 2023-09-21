import {useContext, useEffect} from "@wordpress/element";
import {
	CheckboxControl,
	Flex,
	FlexItem,
} from '@wordpress/components';

// Import thumbnail images.
import homepage from '../../assets/images/thumbnails/homepage.webp';
import blog from '../../assets/images/thumbnails/blog.webp';
import about from '../../assets/images/thumbnails/about.webp';
import download from '../../assets/images/thumbnails/download.webp';
import features from '../../assets/images/thumbnails/features.webp';
import pricing from '../../assets/images/thumbnails/pricing.webp';
import profile from '../../assets/images/thumbnails/profile.webp';

import {SettingsContext} from "../../context/SettingsContext";

const {__} = wp.i18n;

function CreatePages() {
	const {selectedPages, setSelectedPages, pageStart} = useContext(SettingsContext);

	const checkSelectedPages = (page) => {
		if (selectedPages.includes(page)) {
			return true;
		}
		return false;
	}

	const removePage = (page) => {
		setSelectedPages(
			selectedPages.filter(function (element) {
					return element != page;
				}
			)
		);
	}

	useEffect(() => {
		// Set focus.
		pageStart.current.focus();
	}, []);

	return (
		<section>
			<div className="ollie-setting-fields">
				<Flex className="ollie-setting-intro">
					<FlexItem>
						<h2 ref={pageStart}>{__('Create Pages', 'ollie')}</h2>
						<p>{__('Ollie comes with several full-page designs. Select the pages you\'d like us to create for you.', 'ollie')}</p>
					</FlexItem>
				</Flex>
				<Flex className={"ollie-page-list"}>
					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie Homepage', 'ollie')}
							checked={checkSelectedPages('home')}
							onChange={() => {

								if (!checkSelectedPages('home')) {
									setSelectedPages([...selectedPages, 'home']);
								} else {
									removePage('home');
								}
							}}
						/>
						<img src={homepage}/>
					</FlexItem>
					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie Blog', 'ollie')}
							checked={checkSelectedPages('blog')}
							onChange={() => {

								if (!checkSelectedPages('blog')) {
									setSelectedPages([...selectedPages, 'blog']);
								} else {
									removePage('blog');
								}
							}}
						/>
						<img src={blog}/>
					</FlexItem>
					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie About', 'ollie')}
							checked={checkSelectedPages('about')}
							onChange={() => {

								if (!checkSelectedPages('about')) {
									setSelectedPages([...selectedPages, 'about']);
								} else {
									removePage('about');
								}
							}}
						/>
						<img src={about}/>
					</FlexItem>

					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie Features', 'ollie')}
							checked={checkSelectedPages('features')}
							onChange={() => {

								if (!checkSelectedPages('features')) {
									setSelectedPages([...selectedPages, 'features']);
								} else {
									removePage('features');
								}
							}}
						/>
						<img src={features}/>
					</FlexItem>

					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie Pricing', 'ollie')}
							checked={checkSelectedPages('pricing')}
							onChange={() => {

								if (!checkSelectedPages('pricing')) {
									setSelectedPages([...selectedPages, 'pricing']);
								} else {
									removePage('pricing');
								}
							}}
						/>
						<img src={pricing}/>
					</FlexItem>

					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie Download', 'ollie')}
							checked={checkSelectedPages('download')}
							onChange={() => {

								if (!checkSelectedPages('download')) {
									setSelectedPages([...selectedPages, 'download']);
								} else {
									removePage('download');
								}
							}}
						/>
						<img src={download}/>
					</FlexItem>

					<FlexItem className="ollie-page-item">
						<CheckboxControl
							label={__('Ollie Profile', 'ollie')}
							checked={checkSelectedPages('profile')}
							onChange={() => {

								if (!checkSelectedPages('profile')) {
									setSelectedPages([...selectedPages, 'profile']);
								} else {
									removePage('profile');
								}
							}}
						/>
						<img src={profile}/>
					</FlexItem>
				</Flex>
			</div>
		</section>
	)
}

export default CreatePages;
