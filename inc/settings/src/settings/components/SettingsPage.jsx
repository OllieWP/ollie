import ThemeSetup from "../pages/ThemeSetup";
import Documentation from "../pages/Documentation";
import Dashboard from "../pages/Dashboard";
import Videos from "../pages/Videos";
import {useState, useEffect, useContext} from "@wordpress/element";
import {Flex, FlexItem} from '@wordpress/components';

import {
    // eslint-disable-next-line @wordpress/no-unsafe-wp-apis
    __experimentalNavigatorProvider as NavigatorProvider,
    // eslint-disable-next-line @wordpress/no-unsafe-wp-apis
    __experimentalNavigatorScreen as NavigatorScreen,
    // eslint-disable-next-line @wordpress/no-unsafe-wp-apis
    __experimentalNavigatorButton as NavigatorButton,
    Dashicon,
} from '@wordpress/components';
import {Icon, chevronLeft, home, video, formatListNumbered, help, pages} from '@wordpress/icons';
import {SettingsContext} from "../context/SettingsContext";

const {__} = wp.i18n;

function SettingsPage() {
    const {activeItem, setActiveItem} = useContext(SettingsContext);
    const [initialSet, setInitialSet] = useState(false);

    useEffect(() => {
        if (!initialSet) {
            setActiveItem('/');
            setInitialSet(true);
        }
    });

    return (
        <NavigatorProvider initialPath="/" className={"ollie-settings-container"}>
            <Flex align="stretch" gap={"0"}>
                <FlexItem className={"ollie-settings-left"}>
                    <Flex direction="column" align="start" justify="flex-start" gap="0"
                          className={"ollie-nav-container"}>
                        <div className={"ollie-back-to-dash"}>
                            <a href={ollie_options.dashboard_link}><Dashicon
                                icon="wordpress"/> {__('Back to Dashboard', 'ollie')}</a>
                        </div>
                        <Flex align="start" gap="0" className="ollie-menu-container">
                            <FlexItem className="ollie-back-button">
                                <a href={ollie_options.dashboard_link} aria-label="Navigate to the Dashboard"><Icon
                                    icon={chevronLeft}/></a>
                            </FlexItem>
                            <FlexItem>
                                {activeItem === '/' &&
                                    <div className={"ollie-panel-description"}>
                                        <h1 className={"settings-headline edit-site-sidebar-navigation-screen__title"}>{__('Ollie Dashboard', 'ollie')}</h1>
                                        <p className="edit-site-sidebar-navigation-screen__description">
                                            {__('Here, you\'ll find everything you need to get started building with the Ollie theme.', 'ollie')}
                                        </p>
                                    </div>
                                }
                                {activeItem === '/onboarding' &&
                                    <div className={"ollie-panel-description"}>
                                        <h1 className={"settings-headline edit-site-sidebar-navigation-screen__title"}>{__('Ollie Theme Setup', 'ollie')}</h1>
                                        <p className="edit-site-sidebar-navigation-screen__description">
                                            {__('Welcome to the Ollie setup wizard! We\'ll help you get your site up and running in just a few minutes.', 'ollie')}
                                        </p>
                                    </div>
                                }
                                {activeItem === '/documentation' &&
                                    <div className={"ollie-panel-description"}>
                                        <h1 className={"settings-headline edit-site-sidebar-navigation-screen__title"}>{__('Ollie Docs', 'ollie')}</h1>
                                        <p className="edit-site-sidebar-navigation-screen__description">
                                            {__('Learn how to build beautiful, blazing fast websites with Ollie and the WordPress site editor.', 'ollie')}
                                        </p>
                                    </div>
                                }
                                {activeItem === '/videos' &&
                                    <div className={"ollie-panel-description"}>
                                        <h1 className={"settings-headline edit-site-sidebar-navigation-screen__title"}>{__('Ollie Videos', 'ollie')}</h1>
                                        <p className="edit-site-sidebar-navigation-screen__description">
                                            {__('Learn how to build beautiful, blazing fast websites with Ollie and the WordPress site editor.', 'ollie')}
                                        </p>
                                    </div>
                                }
                                <Flex direction="column" align="start" justify="flex-start" gap="0"
                                      className={"ollie-nav"}>
                                    <NavigatorButton onClick={() => setActiveItem('/')}
                                                     className={activeItem === '/' ? 'ollie-nav-is-active' : ''}
                                                     path="/">
                                        <Icon icon={home}/> {__('Welcome', 'ollie')}
                                    </NavigatorButton>
									<NavigatorButton 
										onClick={() => setActiveItem('/onboarding')}
										className={({
											'ollie-nav-is-active': activeItem === '/onboarding',
											'ollie-onboarding-finished': ollie_options.onboarding_complete,
										})}
										path="/onboarding">
										<Icon icon={formatListNumbered}/> {__('Theme Setup', 'ollie')}
									</NavigatorButton>
                                    <NavigatorButton onClick={() => setActiveItem('/videos')}
                                                     className={activeItem === '/videos' ? 'ollie-nav-is-active' : ''}
                                                     path="/videos">
                                        <Icon icon={video}/> {__('Video Library', 'ollie')}
                                    </NavigatorButton>
									<NavigatorButton onClick={() => setActiveItem('/documentation')}
                                                     className={activeItem === '/documentation' ? 'ollie-nav-is-active' : ''}
                                                     path="/documentation">
                                        <Icon icon={pages}/> {__('Ollie Docs', 'ollie')}
                                    </NavigatorButton>
                                </Flex>
                            </FlexItem>
                        </Flex>
                    </Flex>
                </FlexItem>
                {activeItem === '/' &&
                    <FlexItem isBlock={true} align="start" className={"ollie-settings-right"}>
                        <NavigatorScreen path="/">
                            <Dashboard/>
                        </NavigatorScreen>
                    </FlexItem>
                }
                {activeItem === '/onboarding' &&
                    <FlexItem isBlock={true} align="start" className={"ollie-settings-right"}>
                        <NavigatorScreen path="/onboarding">
                            <ThemeSetup/>
                        </NavigatorScreen>
                    </FlexItem>
                }
                {activeItem === '/documentation' &&
                    <FlexItem isBlock={true} align="start" className={"ollie-settings-right"}>
                        <NavigatorScreen path="/documentation">
                            <Documentation/>
                        </NavigatorScreen>
                    </FlexItem>
                }
                {activeItem === '/videos' &&
                    <FlexItem isBlock={true} align="start" className={"ollie-settings-right"}>
                        <NavigatorScreen path="/videos">
                            <Videos/>
                        </NavigatorScreen>
                    </FlexItem>
                }
            </Flex>
        </NavigatorProvider>
    )
}

export default SettingsPage;
