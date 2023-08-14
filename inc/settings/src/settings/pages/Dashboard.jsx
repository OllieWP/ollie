import {
    Button,
    Flex,
    FlexItem,
    __experimentalGrid as Grid,
    __experimentalHStack as HStack,
    Card,
    CardHeader,
    CardBody,
    CardFooter, __experimentalNavigatorButton as NavigatorButton,
} from "@wordpress/components";
import {Icon, arrowRight} from '@wordpress/icons';
import onboardingWizard from '../assets/images/onboarding-wizard.webp';
import onboardingVideo from '../assets/images/onboarding-video.webp';
import onboardingSupport from '../assets/images/onboarding-support.webp';
import {useContext} from "@wordpress/element";
import {SettingsContext} from "../context/SettingsContext";
import {Video} from "../components/partials/Video";
import builderImage from '../assets/images/builder-illustration.webp';
import {Header} from "../components/partials/Header";

const {__} = wp.i18n;

function Dashboard() {

    const {activeItem, setActiveItem} = useContext(SettingsContext);

    return (
        <div className={"ollie-inner-settings"}>
            <div className={"ollie-dash-hero"}>
                <div className="ollie-dash-container">
					<Header />
                    <Flex gap={"75px"} className="ollie-dash-hero-content">
                        <FlexItem>
                            <h1>{__('Welcome to Ollie, the future of WordPress site building.', 'ollie')}</h1>
                            <p>{__('A new era of site building has arrived in WordPress. With the powerful new site editor, you can build beautiful, blazing-fast websites natively right inside WordPress — no page builder plugins required.', 'ollie')}</p>
                            <p>{__('Ollie is a block theme designed and built to work seamlessly with the new site editor. Ollie is also a handy educational resource, helping you learn the new WordPress interface and workflows so you can launch quicker. Ready to get started?', 'ollie')}</p>
                            <NavigatorButton variant="primary" onClick={() => setActiveItem('/onboarding')}
                                             className={activeItem === '/onboarding' ? 'ollie-nav-is-active' : ''}
                                             path="/onboarding">
                                <HStack spacing="3">
                                    <span>{__('Go to the Setup Wizard', 'ollie')}</span> <Icon icon={arrowRight}/>
                                </HStack>
                            </NavigatorButton>
                        </FlexItem>
                        <FlexItem>
							<img className="ollie-builder-illustration" src={builderImage}/>
                        </FlexItem>
                    </Flex>
                </div>
            </div>
            <div className="ollie-dash-content">
                <div className="ollie-dash-container">
					<Flex className="ollie-dash-content-intro">
						<h2>{__('Get Started with Ollie', 'ollie')}</h2>
					</Flex>
                    <Grid className={"ollie-dash-boxes"} columns={3} gap={8}>
                        <Card>
                            <CardHeader size="large">
                                <h3>{__('Ollie Setup Wizard', 'ollie')}</h3>
                            </CardHeader>
                            <CardBody size="large">
                                <img src={onboardingWizard}/>
                                <p>{__('The Ollie Setup Wizard makes setting up your site a breeze. Choose your styles, create some pages, and you’re ready to go!', 'ollie')}</p>
                            </CardBody>
                            <CardFooter size="large">
                                <NavigatorButton variant="secondary" onClick={() => setActiveItem('/onboarding')}
                                                 className={activeItem === '/onboarding' ? 'ollie-nav-is-active' : ''}
                                                 path="/onboarding">
                                    {__('Start Site Setup', 'ollie')}
                                </NavigatorButton>
                            </CardFooter>
                        </Card>
                        <Card>
                            <CardHeader size="large">
                                <h3>{__('Learn with Docs and Videos', 'ollie')}</h3>
                            </CardHeader>
                            <CardBody size="large">
                                <img src={onboardingVideo}/>
                                <p>{__('Learn how to design in the WordPress editor, how to work with patterns, how to use all of the powerful Ollie features, and more.', 'ollie')}</p>
                            </CardBody>
                            <CardFooter size="large">
                                <NavigatorButton variant="secondary" onClick={() => setActiveItem('/documentation')}
                                                 className={activeItem === '/documentation' ? 'ollie-nav-is-active' : ''}
                                                 path="/documentation">
                                    {__('Browse the Ollie Docs', 'ollie')}
                                </NavigatorButton>
                            </CardFooter>
                        </Card>

                        <Card>
                            <CardHeader size="large">
                                <h3>{__('Get Help', 'ollie')}</h3>
                            </CardHeader>
                            <CardBody size="large">
                                <img src={onboardingSupport}/>
                                <p>{__('Having trouble with your theme or want to report an issue? Submit an issue through the Ollie GitHub repo and we\'ll help out.', 'ollie')}</p>
                            </CardBody>
                            <CardFooter size="large">
                                <Button href="https://github.com/OllieWP/ollie/issues/new/choose" variant="secondary">
                                    {__('Visit Ollie on Github', 'ollie')}
                                </Button>
                            </CardFooter>
                        </Card>
                    </Grid>
                </div>
            </div>

            <div className="ollie-dash-content ollie-dash-content-alt">
                <div className="ollie-dash-container">
					<Flex className="ollie-dash-content-intro" >
						<h2>{__('Ollie Video Tutorials', 'ollie')}</h2>
						<NavigatorButton variant="secondary" onClick={() => setActiveItem('/videos')}
											path="/videos">
							{__('View Full Video Library', 'ollie')}
						</NavigatorButton>
					</Flex>
                    <Grid className={"ollie-dash-boxes"} columns={3} gap={8}>
						<Video 
							title={__('What is a block theme?', 'ollie')}
							tagline={__('Let\'s dig into block themes and learn about all of the powerful new features.', 'ollie')}
							videoId={'D7GUoX2XU1k'}
						/>
						<Video 
							title={__('Intro to Ollie', 'ollie')}
							tagline={__('Learn about the Ollie dashboard and the Ollie setup wizard.', 'ollie')}
							videoId={'JZ1EgDaDAH0'}
						/>
						<Video 
							title={__('Ollie Setup Wizard', 'ollie')}
							tagline={__('Set up your site with a few clicks with the Ollie Setup Wizard.', 'ollie')}
							videoId={'OiO4gNDY0VQ'}
						/>
                    </Grid>
                </div>
            </div>
        </div>
    )
}

export default Dashboard;
