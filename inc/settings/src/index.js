// eslint-disable-next-line import/no-extraneous-dependencies
import { createRoot } from '@wordpress/element';
import Settings from './settings/Settings';
import OllieModal from './modal/OllieModal';

if (options.screen === 'modal') {
    let modal = createRoot(document.getElementById('ollie-modal'));
    modal.render(<OllieModal/>);
} else if (options.screen === 'settings') {
    let settings = createRoot(document.getElementById('ollie-onboarding'));
    settings.render(<Settings/>);
}
