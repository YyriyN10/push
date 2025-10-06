/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { InspectorControls, useBlockProps, RichText, InnerBlocks, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { PanelBody, TextControl, SelectControl, Button} from '@wordpress/components';


// беремо enum прямо з block.json
import metadata from './block.json';

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
/*import '../main-block/editor.scss';*/

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {

	const { mainTitle, mainTitleServicesList, videoFile, videoPoster, btnText } = attributes;

	const blockProps = useBlockProps();

	//Inner block
	const cardTemplate = [
		['push-blocks/push-home-main-screen-inner',{}]
	];

	const ALLOWED_BLOCKS = [ 'push-blocks/push-home-main-screen-inner'];

	//Select poster
	const onSelectPoster = (media) => {
		setAttributes({
			videoPoster: media?.url || '',
		});
	};

	//Select video
	const onSelectVideo = (media) => {
		setAttributes({
			videoFile: media?.url || '',
		});
	};

	return (
		<>
			<InspectorControls>
				<PanelBody title={'Settings'}  >
					<div className="image-block">
						{videoPoster ? (
							<img src={videoPoster} style={{ maxWidth: '50%' }} />
						) : (
							<p>Постер не вибрано</p>
						)}

						<MediaUploadCheck>
							<MediaUpload
								onSelect={onSelectPoster}
								allowedTypes={['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml']}
								render={({ open }) => (
									<Button onClick={open} variant="primary">
										{videoPoster ? 'Змінити постер' : 'Завантажити постер'}
									</Button>
								)}
							/>
						</MediaUploadCheck>
					</div>

					<div className="image-block">
						{videoFile ? (
							<img src={videoFile} style={{ maxWidth: '50%' }} />
						) : (
							<p>Відео не вибрано</p>
						)}

						<MediaUploadCheck>
							<MediaUpload
								onSelect={onSelectVideo}
								allowedTypes={['video/mp4', 'video/webm']}
								render={({ open }) => (
									<Button onClick={open} variant="primary">
										{videoFile ? 'Змінити відео' : 'Завантажити відео'}
									</Button>
								)}
							/>
						</MediaUploadCheck>
					</div>
					<TextControl
						label={'Текст кнопки'}
						value={ btnText || ''}
						onChange={ (value)=> setAttributes({ btnText: value })}
					/>
				</PanelBody>
			</InspectorControls>

			<section { ...blockProps } >
				<div className="container">
					<div className="row">
						<RichText
							tagName="h1"
							className={'mein-title'}
							value={ attributes.mainTitle }
							placeholder={'Заголовок сторінки'}
							onChange={ (value)=>setAttributes({ mainTitle: value })}
							allowedFormats={ [ 'core/text-color' ] }
						/>
						<RichText
							tagName="div"
							multiline="p"
							className={'mein-title'}
							value={ attributes.mainTitleServicesList }
							placeholder={'Змфнюємий тккст'}
							onChange={ (value)=>setAttributes({ mainTitleServicesList: value })}
							allowedFormats={ [ 'core/text-color' ] }
						/>
					</div>
					<div className="row card-list">
						<InnerBlocks
							template={ cardTemplate }
							allowedBlocks={ ALLOWED_BLOCKS }
						/>
					</div>

				</div>
			</section>
		</>
	);
}
