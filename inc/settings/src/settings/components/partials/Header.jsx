import {
    Flex,
    FlexItem,
} from "@wordpress/components";

import ollieLogo from '../../assets/images/ollie-logo.svg';

const {__} = wp.i18n;

function Header(props) {

    return (
		<Flex className="ollie-dash-header">
			<FlexItem>
				<Flex gap={3} align="end">
					<FlexItem>
						<img className="ollie-logo" src={ollieLogo}/>
					</FlexItem>
				</Flex>
			</FlexItem>
			<FlexItem>
				<ul className="ollie-dash-nav">
					<li><a href="https://olliewp.com">{__('OllieWP.com', 'ollie')}</a></li>
					<li><a href="https://twitter.com/buildwithollie">{__('Twitter', 'ollie')}</a></li>
					<li><a href="https://www.youtube.com/@OllieWP">{__('YouTube', 'ollie')}</a></li>
					<li><a href="https://github.com/OllieWP/ollie">{__('GitHub', 'ollie')}</a></li>
				</ul>
			</FlexItem>
		</Flex>
    )
}
export {Header};
