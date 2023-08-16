import {useContext, useEffect, useState} from "@wordpress/element";
import {
    Button,
    Flex,
    FlexItem,
    Animate,
    Notice,
	__experimentalNavigatorButton as NavigatorButton,
} from '@wordpress/components';
import Confetti from '../partials/Confetti';
import apiFetch from '@wordpress/api-fetch';
import {SettingsContext} from "../../context/SettingsContext";

const {__} = wp.i18n;

function FinishSetup() {
    const {pageStart, setActiveItem} = useContext(SettingsContext);
    const [childThemeCreated, setChildThemeCreated] = useState(false);

    const createChildTheme = () => {
        apiFetch({
            path: '/ollie/v1/create-child-theme',
            method: 'POST',
        });

        setChildThemeCreated(true);

        setTimeout(function () {
            setChildThemeCreated(false);
        }, 4000);
    }

    const completeOnboarding = () => {
        apiFetch({
            path: '/ollie/v1/complete-onboarding',
            method: 'POST',
        });
    }

    useEffect(() => {
        // Set focus.
        pageStart.current.focus();
        completeOnboarding();

    }, []);

    return (
        <>
            <Confetti/>
            <section>
                <div className="ollie-setting-fields">
                    <Flex className="ollie-setting-intro">
                        <FlexItem>
                            <h2 ref={pageStart}>{__('Setup complete!', 'ollie')}</h2>
                            <p>{__('You did it! Your theme setup is complete. What would you like to do next?', 'ollie')}</p>
                        </FlexItem>
                    </Flex>
                    <Flex className="ollie-setting-field">
                        <FlexItem>
                            <label for="view-site">{__('View Your Site', 'ollie')}</label>
                            <p>{__('Open your site to check out the live front-end view.', 'ollie')}</p>
                        </FlexItem>
                        <FlexItem>
                            <Button id="view-site" isSecondary href={options.home_link}
                                    target="_blank">{__('View Your Site', 'ollie')}</Button>
                        </FlexItem>
                    </Flex>
                    <Flex className="ollie-setting-field">
                        <FlexItem>
                            <label for="edit-homepage">{__('Edit Your Homepage', 'ollie')}</label>
                            <p>{__('Go to the Site Editor to view and edit your homepage and customize your site.', 'ollie')}</p>
                        </FlexItem>
                        <FlexItem>
                            <Button id="edit-homepage" isSecondary href={options.dashboard_link + 'site-editor.php'}>{__('Edit Homepage', 'ollie')}</Button>
                        </FlexItem>
                    </Flex>
                    <Flex className="ollie-setting-field">
                        <FlexItem>
                            <label for="view-docs">{__('View Ollie Docs', 'ollie')}</label>
                            <p>{__('Watch tutorial videos and read through the docs to learn how to build beautiful websites with Ollie.', 'ollie')}</p>
                        </FlexItem>
                        <FlexItem>
							<NavigatorButton 
								id="view-docs"
								isSecondary 
								onClick={() => setActiveItem('/documentation')}
								path="/documentation">
									{__('View Ollie Docs', 'ollie')}
							</NavigatorButton>
                        </FlexItem>
                    </Flex>
                    <Flex className="ollie-setting-field">
                        <FlexItem>
                            <label for="child-theme">{__('Create Child Theme', 'ollie')}</label>
                            <p>{__('Do you want to activate a child theme where you can further customize the Ollie theme code?', 'ollie')}</p>
                        </FlexItem>
                        <FlexItem>
                            <Button onClick={createChildTheme}
                                    className="ollie-wizard-button"
                                    variant="secondary">{__('Create and Activate', 'ollie')}</Button>
                            {childThemeCreated &&
                                <Animate type="slide-in" options={{origin: 'top'}}>
                                    {() => (
                                        <Notice status="success" isDismissible={false}>
                                            <p>
                                                {__('Child theme created and activated.', 'ollie')}
                                            </p>
                                        </Notice>
                                    )}
                                </Animate>
                            }
                        </FlexItem>
                    </Flex>
                </div>
            </section>
        </>
    )
}

export default FinishSetup;
