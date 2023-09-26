import {Button, __experimentalSpacer as Spacer, FlexItem, Flex} from "@wordpress/components";
import {Wizard, Steps, Step, Navigation} from "react-wizr";
import Welcome from "../components/steps/Welcome";
import BrandSetup from "../components/steps/BrandSetup";
import Homepage from "../components/steps/Homepage";
import CreatePages from "../components/steps/CreatePages";
import FinishSetup from "../components/steps/FinishSetup";
import iconCheckSaved from "../assets/images/icon-check-active.svg";
import {useContext, useEffect, useRef, useState} from "@wordpress/element";
import {SettingsContext} from "../context/SettingsContext";
import apiFetch from "@wordpress/api-fetch";

const {__} = wp.i18n;

function ThemeSetup() {
    const {
        saveSettings,
        currentStep,
        setCurrentStep,
        selectedPages
    } = useContext(SettingsContext);
    const [themeSettingsSaved, setThemeSettingsSaved] = useState(false);
    const startRef = useRef(null);

    const setSavingThemeSettings = (goToNextStep) => {
        saveSettings();
        setThemeSettingsSaved(true);
        goToNextStep();

        setTimeout(function () {
            setThemeSettingsSaved(false);
        }, 4000);
    }

    const createPages = (goToNextStep) => {
        // Create pages via Rest API.
        if (selectedPages.length > 0) {
            apiFetch({
                path: '/ollie/v1/create-pages',
                method: 'POST',
                data: selectedPages,
            });
        }

        setThemeSettingsSaved(true);

        goToNextStep();

        setTimeout(function () {
            setThemeSettingsSaved(false);
        }, 4000);
    }

    function StepText({text}) {
        switch (text) {
            case 0:
                return __('Start Setup', 'ollie');
            case 2:
                return __('Create Pages and Continue', 'ollie');
            case 4:
                return __('Save and Finish', 'ollie');
            default:
                return __('Save and Continue', 'ollie');
        }
    }

    useEffect(() => {
        // Set focus.
        startRef.current.focus();
        startRef.current.scrollIntoView({behavior: 'smooth'});

    }, []);

    return (
        <Flex ref={startRef} align="stretch" gap="0" className="ollie-settings-inner">
            <FlexItem className={"ollie-setup-sidebar"}>
                <div>
                    <h2>{__('Theme Setup', 'ollie')}</h2>
                    <p>{__('Let\'s get you up and running quicker with the setup wizard.', 'ollie')}</p>
                    <Spacer margin={10}/>
                    <ul className={"ollie-setup-steps"}>
                        <li className={`${currentStep === 0 ? "is-active-step" : ""}`}
                            onClick={() => setCurrentStep(0)}>
                            {__('Get Started', 'ollie')}
                        </li>
                        <li className={`${currentStep === 1 ? "is-active-step" : ""}`}
                            onClick={() => setCurrentStep(1)}>
                            {__('Your Brand', 'ollie')}
                        </li>
                        <li className={`${currentStep === 2 ? "is-active-step" : ""}`}
                            onClick={() => setCurrentStep(2)}>
                            {__('Create Pages', 'ollie')}
                        </li>
                        <li className={`${currentStep === 3 ? "is-active-step" : ""}`}
                            onClick={() => setCurrentStep(3)}>
                            {__('Homepage', 'ollie')}
                        </li>
                        <li className={`${currentStep === 4 ? "is-active-step" : ""}`}
                            onClick={() => setCurrentStep(4)}>
                            {__('Finish', 'ollie')}
                        </li>
                    </ul>
                </div>
            </FlexItem>
            <FlexItem className={"ollie-setup-content"}>
                <Wizard
                    activeStepIndex={currentStep}
                    onStepChanged={({activeStepIndex}) => {
                        setCurrentStep(activeStepIndex);
                        // Set focus.
                        startRef.current.focus();
                        startRef.current.scrollIntoView({behavior: 'smooth'});
                    }
                    }
                >
                    <Steps>
                        <Step id="first">
                            <Welcome/>
                        </Step>
                        <Step id="second">
                            <BrandSetup/>
                        </Step>
                        <Step id="third">
                            <CreatePages/>
                        </Step>
                        <Step id="fourth">
                            <Homepage/>
                        </Step>
                        <Step id="fifth">
                            <FinishSetup/>
                        </Step>
                    </Steps>
                    <Navigation
                        render={({activeStepIndex, goToNextStep, goToPrevStep, totalSteps}) => (
                            <Flex {...(activeStepIndex == 0 || activeStepIndex == 4 ? {
                                'tabIndex': '-1',
                                'className': 'ollie-hide-step',
                                'aria-hidden': 'true'
                            } : {'className': 'ollie-setup-nav'})}>
                                <FlexItem>
                                    {themeSettingsSaved &&
                                        <Button className="ollie-setup-saved" variant="primary"
                                                onClick={goToPrevStep}><img
                                            src={iconCheckSaved}/> {__('Saved!', 'ollie')}</Button>
                                    }
                                    <Flex className={`ollie-wizard-progress ollie-wizard-progress-${activeStepIndex}`}
                                          justify="center">
                                        <FlexItem className={`${currentStep === 1 ? "is-active-step" : ""}`}/>
                                        <FlexItem className={`${currentStep === 2 ? "is-active-step" : ""}`}/>
                                        <FlexItem className={`${currentStep === 3 ? "is-active-step" : ""}`}/>
                                        <FlexItem className={`${currentStep === 4 ? "is-active-step" : ""}`}/>
                                    </Flex>
                                </FlexItem>
                                <FlexItem
                                    className={activeStepIndex < totalSteps - 1 ? "ollie-setup-step" : "ollie-hide-step"}>
                                    <Button className="ollie-wizard-back-button" variant="link"
                                            onClick={goToPrevStep}>{__('Go Back', 'ollie')}</Button>
                                    {activeStepIndex === 2 ?
                                        <Button onClick={() => createPages(goToNextStep)}
                                                className="ollie-wizard-button"
                                                variant="primary">
                                            <StepText text={activeStepIndex}/>
                                        </Button>
                                        :
                                        <Button onClick={() => setSavingThemeSettings(goToNextStep)}
                                                className="ollie-wizard-button"
                                                variant="primary">
                                            <StepText text={activeStepIndex}/>
                                        </Button>
                                    }
                                </FlexItem>
                            </Flex>
                        )}
                    />
                </Wizard>
            </FlexItem>
        </Flex>)
}

export default ThemeSetup;
