import {useState, createContext, useEffect, useRef} from "@wordpress/element";
import apiFetch from '@wordpress/api-fetch';

export const SettingsContext = createContext();

function SettingsContextProvider(props) {
    const defaultSettings = {
        site_title: options.site_title,
        site_tagline: options.site_tagline,
        permalink_structure: options.permalink_structure,
        homepage_display: options.homepage_display,
        home_id: options.home_id,
        blog_id: options.blog_id,
        site_icon: '',
        brand_color: '#4D34FA',
        style: 'blue',
        site_logo: '',
    };

    const [settingsSaved, setSettingsSaved] = useState(false);
    const [settings, setSettings] = useState(defaultSettings);
    const [activeItem, setActiveItem] = useState({activeItem: "/"});
    const [currentStep, setCurrentStep] = useState(0);
    const [selectedPages, setSelectedPages] = useState(['home', 'blog']);
    const pageStart = useRef(null);
    const getSettings = () => {
        apiFetch({path: '/ollie/v1/settings'}).then((options) => {
            setSettings(options);
        });
    }

    const saveSettings = () => {
        apiFetch({
            path: '/ollie/v1/settings',
            method: 'POST',
            data: settings,
        });
    }

    const resetSettings = () => {
        setSettings(defaultSettings);

        apiFetch({
            path: '/ollie/v1/settings',
            method: 'POST',
            data: defaultSettings,
        });
    }

    const importSettings = (newSettings) => {
        setSettings(newSettings);

        apiFetch({
            path: '/ollie/v1/settings',
            method: 'POST',
            data: newSettings,
        });
    }

    const updateSetting = (key, value) => {
        setSettings({...settings, [key]: value});
    };

    useEffect(() => {
        getSettings();
    }, []);


    return (
        <SettingsContext.Provider
            value={{
                settings,
                settingsSaved,
                setSettingsSaved,
                updateSetting,
                setSettings,
                saveSettings,
                resetSettings,
                importSettings,
                activeItem,
                setActiveItem,
                currentStep,
                setCurrentStep,
                selectedPages,
                setSelectedPages,
                pageStart
            }}
        >
            {props.children}
        </SettingsContext.Provider>
    );
}

export default SettingsContextProvider;
