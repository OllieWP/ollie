import {flushSync} from "react-dom";
import {useState, useRef, useLayoutEffect, useEffect} from "@wordpress/element";
import BrowserHeader from "../../assets/images/browser.svg";

const {__} = wp.i18n;

export default function HomepagePreview(props) {
    const iframeRef = useRef(null);
    const [iframeContainer, setIframeContainer] = useState(null);
    const [iframeStyle, setIframeStyle] = useState({});
    const deviceWidth = 1600;
    const [isIframeLoaded, setIsIframeLoaded] = useState(false);
    const [currentPath, setCurrentPath] = useState(props.iframe_path);

    // Fade in the iframe each time the src is updated.
    useEffect(() => {
        setIsIframeLoaded(false);
        setCurrentPath(props.iframe_path);

    }, [props.iframe_path]);

    const handleIframeLoad = () => {
        setIsIframeLoaded(true);
    };

    useLayoutEffect(() => {
        const adjustSize = () => {
            const iframe = iframeRef.current;
            if (!iframe || !iframeContainer) {
                return;
            }

            const width = deviceWidth;
            const scaleFactor = iframeContainer.clientWidth / deviceWidth;

            setIframeStyle({
                width: width,
                height: iframeContainer.clientHeight / scaleFactor,
                transform: `scale(${scaleFactor})`,
                transformOrigin: "top left"
            });
        };

        adjustSize();

        const resizeObserver = new ResizeObserver(() => {
            // Use flushSync to prevent visual jitter from async state updates.
            flushSync(() => {
                adjustSize();
            });
        });

        if (iframeContainer) {
            resizeObserver.observe(iframeContainer);
        }

        return () => {
            resizeObserver.disconnect();
        };

    }, [iframeContainer, deviceWidth]);

    return (
        <div className="ollie-homepage-iframe-outer">
            <div className="ollie-homepage-iframe-container" ref={setIframeContainer}>
                <img src={BrowserHeader}/>
                <iframe
                    title="Iframe"
                    style={iframeStyle}
                    className={`ollie-homepage-iframe ${isIframeLoaded ? 'ollie-homepage-iframe-loaded' : ''}`}
                    onLoad={handleIframeLoad}
                    src={currentPath}
                    ref={iframeRef}
                />
            </div>
        </div>
    );
}
