import {MediaUpload} from '@wordpress/block-editor';
import {Button, Flex, FlexItem} from '@wordpress/components';
import {useEffect, useState} from "@wordpress/element";
import apiFetch from '@wordpress/api-fetch';

const {__} = wp.i18n;

function CustomLogoUpload(props) {
    const [logoUrl, setLogoUrl] = useState('');

    const getLogoUrl = () => {
        apiFetch({
            path: '/ollie/v1/site-logo',
            method: 'GET',
        }).then((logo) => {
            setLogoUrl(logo);
        });
    }

    const changeLogoUrl = (url) => {
        apiFetch({
            path: '/ollie/v1/site-logo',
            method: 'POST',
            data: { logo : url },
        }).then(() => {
            setLogoUrl(url);
        });
    }

    useEffect(() => {
        getLogoUrl();
    }, []);

    return <MediaUpload
        onSelect={media => {
            props.onMediaSelected(media.id)
            changeLogoUrl(media.url);
        }}
        type="image"
        value={props.id}
        render={
            ({open}) => {
                if (props.mediaId) {
                    return <>
                        <Flex gap="20px" direction="column">
                            <FlexItem>
                                <Button isSecondary onClick={() => {
                                    props.onMediaSelected(null)
                                }}>{__('Remove Image', 'ollie')}</Button>
                            </FlexItem>
                            <FlexItem className="ollie-upload-preview">
                                <img src={logoUrl}/>
                            </FlexItem>
                        </Flex>
                    </>;
                }
                return <Button id={props.labelId} isSecondary onClick={open}>{__('Select Image', 'ollie')}</Button>;
            }
        }/>;
}

export {CustomLogoUpload};