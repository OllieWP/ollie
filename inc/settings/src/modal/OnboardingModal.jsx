import {Button, Flex, FlexItem} from '@wordpress/components';
import apiFetch from "@wordpress/api-fetch";
import {useEffect, useState} from "@wordpress/element";
import builderImage from '../settings/assets/images/builder-illustration.webp';
import {Icon, close} from '@wordpress/icons';

const {__} = wp.i18n;

function OnboardingModal() {
    const [skipOnboarding, setSkipOnboarding] = useState(false);

    const maybeSkipOnboarding = (skip) => {
        apiFetch({
            path: '/ollie/v1/skip-onboarding',
            method: 'POST',
        }).then((response) => {
            setSkipOnboarding(true);

            // Maybe redirect to onboarding.
            if (!skip) {
                window.location.href = options.onboarding_link;
				setSkipOnboarding(true);
            }
        });
    };

    useEffect(() => {
        if (options.skip_onboarding) {
            setSkipOnboarding(true);
        }

		const handleEsc = (event) => {
			if (event.key === 'Escape') {
				maybeSkipOnboarding(true);
			}
		 };
		 window.addEventListener('keydown', handleEsc);
	 
		 return () => {
		   window.removeEventListener('keydown', handleEsc);
		 };
    }, []);

    return (
        <>
            {!skipOnboarding &&
                <div className={"ollie-modal-background"}>
					<div className={"ollie-modal-content"}>
						<Button onClick={() => maybeSkipOnboarding(true)}
										className={"ollie-modal-close"}><Icon icon={close}/></Button>
						<img src={builderImage} />
						<h2>{__('Welcome to Ollie!', 'ollie')}</h2>
						<p>{__('Visit the Ollie Dashboard and Theme Setup Wizard (Appearance → Ollie) to get your site set up with just a few clicks. Head over there to get started!', 'ollie')}</p>
						<Flex className={"ollie-modal-inner"} justify='center' align='center' direction='column' gap="3">
							<Button variant="primary" onClick={() => maybeSkipOnboarding(false)}>{__('View Ollie Dashboard →', 'ollie')}</Button>
							<Button variant="secondary" onClick={() => maybeSkipOnboarding(true)}
										className={"ollie-modal-skip"}>{__('Skip for now', 'ollie')}</Button>
						</Flex>
					</div>
				</div>
            }
        </>
    );
}

export default OnboardingModal;
