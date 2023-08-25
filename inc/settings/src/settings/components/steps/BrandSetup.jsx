import {useState, useEffect, useContext} from "@wordpress/element";
import {
	Button,
	Flex,
	FlexItem,
	ColorPalette,
	SelectControl, 
	ColorIndicator,
	Modal,
} from '@wordpress/components';
import {SettingsContext} from "../../context/SettingsContext";
import {CustomMediaUpload} from "../partials/CustomMediaUpload";
import {CustomLogoUpload} from "../partials/CustomLogoUpload";
import browserIcon from '../../assets/images/browser-icon.svg';

import EmojiPicker, {
	EmojiStyle,
	Emoji,
} from "emoji-picker-react";


// Import Styles.
import blueJson from '../../../../../../../ollie/styles/blue.json';
import greenJson from '../../../../../../../ollie/styles/green.json';
import orangeJson from '../../../../../../../ollie/styles/orange.json';
import pinkJson from '../../../../../../../ollie/styles/pink.json';
import redJson from '../../../../../../../ollie/styles/red.json';
import tealJson from '../../../../../../../ollie/styles/teal.json';

const {__} = wp.i18n;

function BrandSetup() {
	const {settings, updateSetting, pageStart} = useContext(SettingsContext);
	const [siteLogo, setSiteLogo] = useState(false);
	const [palettes, setPalettes] = useState({});
	const [brandColor, setBrandColor] = useState();
	const [style, setStyle] = useState('standard');
	const [siteIcon, setSiteIcon] = useState(false);
	const [isModalOpen, setModalOpen] = useState(false);

	const loadStyles = () => {
		// Restructure styles for color palette component.
		let blueStyle = [];

		blueJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			blueStyle.push(item);
		});

		let greenStyle = [];

		greenJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			greenStyle.push(item);
		});

		let orangeStyle = [];

		orangeJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			orangeStyle.push(item);
		});

		let pinkStyle = [];

		pinkJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			pinkStyle.push(item);
		});

		let redStyle = [];

		redJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			redStyle.push(item);
		});

		let tealStyle = [];

		tealJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			tealStyle.push(item);
		});

		setPalettes(
			{
				'blue': blueStyle,
				'green': greenStyle,
				'orange': orangeStyle,
				'pink': pinkStyle,
				'red': redStyle,
				'teal': tealStyle
			}
		);
	}

	const openModal = () => setModalOpen(true);
	const closeModal = () => setModalOpen(false);
	const onSelectEmoji = (emojiData) => {
		updateSetting("site_icon", emojiData.getImageUrl());
		setSiteIcon(emojiData.getImageUrl());
		closeModal();
	}

	useEffect(() => {
		// Set focus.
		pageStart.current.focus();
		loadStyles();

		if (settings.brand_color) {
			setBrandColor(settings.brand_color);
		}

		if (settings.style) {
			setStyle(settings.style);
		}

		if (settings.site_logo) {
			setSiteLogo(settings.site_logo);
		}

		if (settings.site_icon) {
			setSiteIcon(settings.site_icon);
		}
	}, [settings]);

	return (
		<section>
			<div className="ollie-setting-fields">
				<Flex className="ollie-setting-intro">
					<FlexItem>
						<h2 ref={pageStart}>{__('Your Brand', 'ollie')}</h2>
						<p>{__('Next, let\'s customize the colors on your site to match your brand. ', 'ollie')}</p>
					</FlexItem>
				</Flex>
				<Flex className="ollie-setting-field">
					<FlexItem>
						<label htmlFor="ollie-color-palette">{__('Color Palette', 'ollie')}</label>
						<p>{__('Choose a color palette that closely matches your brand. You can customize this later in Global Styles.', 'ollie')}</p>
					</FlexItem>
					<FlexItem>
						<SelectControl
							id={"ollie-color-palette"}
							label="Styles"
							value={style}
							options={[
								{label: 'Blue', value: 'blue'},
								{label: 'Green', value: 'green'},
								{label: 'Orange', value: 'orange'},
								{label: 'Pink', value: 'pink'},
								{label: 'Red', value: 'red'},
								{label: 'Teal', value: 'teal'},
							]}
							onChange={(value) => {
								setStyle(value);
								updateSetting("style", value);
							}}
						/>
						{palettes[style] ?
							<div className={"palette-preview-container"}>
								{palettes[style].map(item => <ColorIndicator key={item.name} colorValue={item.color}/>)}
							</div>
							:
							<>
								{palettes.blue &&
									<div className={"palette-preview-container"}>
										{palettes.blue.map(item => <ColorIndicator key={item.name}
																					 colorValue={item.color}/>)}
									</div>
								}
							</>
						}
					</FlexItem>
				</Flex>
				<Flex className="ollie-setting-field">
					<FlexItem>
						<label for="brand-color">{__('Brand Color', 'ollie')}</label>
						<p>{__('Use the accent color above, or add your brand color to be used as the main accent color on your site.', 'ollie')}</p>
					</FlexItem>
					<FlexItem>
						{palettes[style] ?
							<ColorPalette
								colors={palettes[style]}
								value={brandColor}
								onChange={(color) => {
									setBrandColor(color);
									updateSetting("brand_color", color);
								}}
							/>
							:
							<>
								{palettes.blue &&
									<ColorPalette
										colors={palettes.blue}
										value={brandColor}
										onChange={(color) => {
											setBrandColor(color);
											updateSetting("brand_color", color);
										}}
									/>
								}
							</>
						}
					</FlexItem>
				</Flex>
				<Flex className="ollie-setting-field">
					<FlexItem>
						<label for="site-logo">{__('Logo', 'ollie')}</label>
						<p>{__('Choose an image to be used for your Site Logo. Your site title will be used if no logo is set.', 'ollie')}</p>
					</FlexItem>
					<FlexItem>
						<div className={"site-logo-preview"}>
							<CustomLogoUpload
								labelId="site-logo"
								mediaId={siteLogo}
								onMediaSelected={(value) => {
									updateSetting("site_logo", value);
									setSiteLogo(value);
								}}
							/>
						</div>
					</FlexItem>
				</Flex>
				<Flex className="ollie-setting-field">
					<FlexItem>
						<label for="site-icon">{__('Site Icon', 'ollie')}</label>
						<p>{__('Select a small, square icon to display in your browser tab.', 'ollie')}</p>
					</FlexItem>
					<FlexItem>
						<Flex gap="0" direction="column" className="ollie-setting-button-column">
							<FlexItem>
								<CustomMediaUpload
									labelId="site-icon"
									onMediaSelected={(value) => {
										updateSetting("site_icon", value);
										setSiteIcon(value);
									}}
								/>
								<small>{__('Upload a small image icon to use as a site icon.', 'ollie')}</small>
							</FlexItem>
							<FlexItem>
								<Button variant="secondary" onClick={openModal}>
									{__('Choose Emoji', 'ollie')}
								</Button>
								<small>{__('Alternatively, you can choose an emoji as a site icon.', 'ollie')}</small>
								{isModalOpen && (
									<Modal title={__('Choose an emoji as your site icon.', 'ollie')}
										onRequestClose={closeModal}>
										<EmojiPicker
											onEmojiClick={onSelectEmoji}
											autoFocusSearch={false}
											previewConfig={{
												defaultCaption: __('Choose an emoji as your site icon.', 'ollie'),
												defaultEmoji: "1f389"
											}}
											emojiStyle={EmojiStyle.NATIVE}
										/>
									</Modal>
								)}
							</FlexItem>
						</Flex>
						{siteIcon ? (
							<div className="ollie-site-icon-wrap">
								<div className="ollie-site-icon-box">
									<img src={siteIcon} alt={__('Site Icon', 'ollie')}/>
								</div>
								<img src={browserIcon} />
							</div>
						) : ''}
					</FlexItem>
				</Flex>
			</div>
		</section>
	)
}

export default BrandSetup;
