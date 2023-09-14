// eslint-disable-next-line import/no-extraneous-dependencies
import { createRoot } from '@wordpress/element';
import Settings from './settings/Settings';
import OllieModal from './modal/OllieModal';

switch (ollie_options.screen) {
    case 'modal':
        let modal = createRoot(document.getElementById('ollie-modal'));
        modal.render(<OllieModal/>);
        break;
    case 'settings':
        let settings = createRoot(document.getElementById('ollie-onboarding'));
        settings.render(<Settings/>);
        break;
    default:
        break;
}