import {useState, useEffect, useContext} from "@wordpress/element";
import {
	Flex,
	FlexItem,
	ColorPalette,
	SelectControl, 
	ColorIndicator,
} from '@wordpress/components';
import {SettingsContext} from "../../context/SettingsContext";

// Import Styles.
import purpleJson from '../../../../../../../ollie/theme.json';
import blueJson from '../../../../../../../ollie/styles/blue.json';
import greenJson from '../../../../../../../ollie/styles/green.json';
import orangeJson from '../../../../../../../ollie/styles/orange.json';
import pinkJson from '../../../../../../../ollie/styles/pink.json';
import redJson from '../../../../../../../ollie/styles/red.json';
import tealJson from '../../../../../../../ollie/styles/teal.json';

const {__} = wp.i18n;

function BrandSetup() {
	const {settings, updateSetting, pageStart} = useContext(SettingsContext);
	const [palettes, setPalettes] = useState({});
	const [brandColor, setBrandColor] = useState();
	const [style, setStyle] = useState('standard');

	const loadStyles = () => {
		// Restructure styles for color palette component.
		let purpleStyle = [];

		purpleJson.settings.color.palette.forEach(function (item) {
			item.name = item.slug;
			delete item.slug;
			purpleStyle.push(item);
		});
		
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
				'purple': purpleStyle,
				'blue': blueStyle,
				'green': greenStyle,
				'orange': orangeStyle,
				'pink': pinkStyle,
				'red': redStyle,
				'teal': tealStyle
			}
		);
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
	}, [settings]);

	return (
		<section>
			<div className="ollie-setting-fields">
				<Flex className="ollie-setting-intro">
					<FlexItem>
						<h2 ref={pageStart}>{__('Your Brand', 'ollie')}</h2>
						<p>{__('First, let\'s choose a color palette for your site and then add some branding. All settings are optional!', 'ollie')}</p>
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
								{label: 'Purple', value: 'purple'},
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
						<label htmlFor="brand-color">{__('Brand Color', 'ollie')}</label>
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
			</div>
		</section>
	)
}

export default BrandSetup;
