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
                            <label htmlFor="view-site">{__('View Your Site', 'ollie')}</label>
                            <p>{__('Open your site to check out the live front-end view.', 'ollie')}</p>
                        </FlexItem>
                        <FlexItem>
                            <Button id="view-site" isSecondary href={ollie_options.home_link}
                                    target="_blank">{__('View Your Site', 'ollie')}</Button>
                        </FlexItem>
                    </Flex>
                    <Flex className="ollie-setting-field">
                        <FlexItem>
                            <label htmlFor="edit-homepage">{__('Edit Your Homepage', 'ollie')}</label>
                            <p>{__('Go to the Site Editor to view and edit your homepage and customize your site.', 'ollie')}</p>
                        </FlexItem>
                        <FlexItem>
                            <Button id="edit-homepage" isSecondary href={ollie_options.dashboard_link + 'site-editor.php'}>{__('Edit Homepage', 'ollie')}</Button>
                        </FlexItem>
                    </Flex>
                    <Flex className="ollie-setting-field">
                        <FlexItem>
                            <label htmlFor="view-docs">{__('View Ollie Docs', 'ollie')}</label>
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
                </div>
            </section>
        </>
    )
}

export default FinishSetup;
