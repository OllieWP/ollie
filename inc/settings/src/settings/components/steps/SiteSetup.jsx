import {useContext, useEffect} from "@wordpress/element";
import {
    Flex,
    FlexItem,
    TextControl,
    RadioControl,
} from '@wordpress/components';
import {SettingsContext} from "../../context/SettingsContext";

const {__} = wp.i18n;

function SiteSetup() {
    const {settings, updateSetting, pageStart} = useContext(SettingsContext);

    useEffect(() => {
        // Set focus.
        pageStart.current.focus();
    }, []);

    return (
        <section>
            <div className="ollie-setting-fields">
                <Flex className="ollie-setting-intro">
                    <FlexItem>
                        <h2 ref={pageStart}>{__('Site Settings', 'ollie')}</h2>
                        <p>{__('Let\'s start with the basics and set up a few important site-wide settings. All settings in this wizard are optional.', 'ollie')}</p>
                    </FlexItem>
                </Flex>
                <Flex className="ollie-setting-field">
                    <FlexItem>
                        <label for="site-title">{__('Site Title', 'ollie')}</label>
                        <p>{__('Name of your website or brand', 'ollie')}</p>
                    </FlexItem>
                    <FlexItem>
                        <TextControl
                            id="site-title"
                            value={settings.site_title}
                            placeholder={__('Ollie Site', 'ollie')}
                            onChange={(value) => {
                                updateSetting("site_title", value);
                            }}
                        />
                    </FlexItem>
                </Flex>
                <Flex className="ollie-setting-field">
                    <FlexItem>
                        <label for="site-tagline">{__('Site Tagline', 'ollie')}</label>
                        <p>{__('In a few words, explain what the site is about', 'ollie')}</p>
                    </FlexItem>
                    <FlexItem>
                        <TextControl
                            id="site-tagline"
                            value={settings.site_tagline}
                            placeholder={__('This is my cool website', 'ollie')}
                            onChange={(value) => {
                                updateSetting("site_tagline", value);
                            }}
                        />
                    </FlexItem>
                </Flex>
                <Flex className="ollie-setting-field">
                    <FlexItem>
                        <label for="site-permalinks">{__('URL Style', 'ollie')}</label>
                        <p>{__('Choose between descriptive permalinks or number-based permalinks.', 'ollie')}</p>
                    </FlexItem>
                    <FlexItem>
                        <RadioControl
                            className="ollie-permalink-radio"
                            id="homepage-display"
                            selected={settings.permalink_structure}
                            options={[
                                {label: 'Post Name', value: 'postname'},
                                {label: 'Plain', value: 'plain'},
                            ]}
                            onChange={(value) => {
                                updateSetting("permalink_structure", value);
                            }}
                        />
                    </FlexItem>
                </Flex>
            </div>
        </section>
    )
}

export default SiteSetup;
