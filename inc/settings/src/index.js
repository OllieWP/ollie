// eslint-disable-next-line import/no-extraneous-dependencies
import { createRoot } from '@wordpress/element';
import Settings from './settings/Settings';

let settings = createRoot(document.getElementById('ollie-onboarding'));
settings.render(<Settings/>);