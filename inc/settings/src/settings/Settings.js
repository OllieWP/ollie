import SettingsContextProvider from './context/SettingsContext';
import SettingsPage from "./components/SettingsPage";
import './settings.scss';

function Settings() {
    return (
        <SettingsContextProvider>
        <div>
            <SettingsPage />
        </div>
        </SettingsContextProvider>
    )
}

export default Settings;