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
import { InspectorControls, useBlockProps, RichText, MediaUpload, MediaUploadCheck} from '@wordpress/block-editor';
import { PanelBody, TextControl, SelectControl, Button} from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { useEffect, useState } from "@wordpress/element";

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

	const { blockTitle, textWhoWeAre, textApproach, titleAreasSpecialization, areasSpecializationList, aboutList, sloganText, imageUrl, imageAlt, imageId, anchorId, topIndent, bottomIndent} = attributes;

	const blockProps = useBlockProps({
		className: topIndent + ' ' + bottomIndent
	});


	// Отримуємо enum bottomIndent з block.json
	const bottomIndentOptions = metadata.attributes.bottomIndent.enum.map((value) => ({
		label: value,
		value: value,
	}));

	// Отримуємо enum topIndent з block.json
	const topIndentOptions = metadata.attributes.topIndent.enum.map((value) => ({
		label: value,
		value: value,
	}));

	//Select icon
	const onSelectImage = (media) => {
		setAttributes({
			imageUrl: media?.url || '',
			imageId: media?.id || 0,
			imageAlt: media?.alt || '',
		});
	};


	return (
		<>
			<InspectorControls>
				<PanelBody title={'Settings'}  >

					<TextControl
						label={'Якір блоку'}
						help={'Це ідентеуфікатор блоку, він має бути унікальним. За його допомогою можна звернутися до блоку в меню тощо'}
						value={ anchorId || ''}
						onChange={ (value)=> setAttributes({ anchorId: value })}
					/>
					<SelectControl
						label={__('Верхній внутрішній відступ')}
						value={topIndent}
						options={topIndentOptions}
						onChange={(value) => setAttributes({ topIndent: value })}
					/>

					<SelectControl
						label={__('Нижній внутрішній відступ')}
						value={bottomIndent}
						options={bottomIndentOptions}
						onChange={(value) => setAttributes({ bottomIndent: value })}
					/>

				</PanelBody>
			</InspectorControls>

			<section { ...blockProps } >
				<div className="container">
					<div className="row">
						<RichText
							tagName="h2"
							className={'block-title'}
							value={ attributes.blockTitle }
							placeholder={'Заголовок блоку'}
							onChange={ (value)=>setAttributes({ blockTitle: value })}
							allowedFormats={ [ 'core/text-color' ] }
						/>
						<RichText
							tagName="p"
							className={'block-textWhoWeAre'}
							value={ attributes.textWhoWeAre }
							placeholder={'Текст, то ми є'}
							onChange={ (value)=>setAttributes({ textWhoWeAre: value })}
							allowedFormats={ [ 'core/text-color', 'core/bold', 'core/link' ] }
						/>

						<RichText
							tagName="p"
							className={'block-textApproach'}
							value={ attributes.textApproach }
							placeholder={'Текст, наш підхід'}
							onChange={ (value)=>setAttributes({ textApproach: value })}
							allowedFormats={ [ 'core/text-color', 'core/bold', 'core/link' ] }
						/>

						<RichText
							tagName="h3"
							className={'block-titleAreasSpecialization'}
							value={ attributes.titleAreasSpecialization }
							placeholder={'Заголоаок секції спеціалізації'}
							onChange={ (value)=>setAttributes({ titleAreasSpecialization: value })}
							allowedFormats={ [ 'core/text-color', 'core/bold' ] }
						/>
						<RichText
							identifier="areasSpecializationList"
							tagName="ul"                 // сам контейнер — <ul>
							multiline="li"               // Enter => новий <li>
							value={ areasSpecializationList }
							placeholder="Що в ходить в спеціалізацію"
							onChange={ (value) => setAttributes({ areasSpecializationList: value }) }
							allowedFormats={[ 'core/bold', 'core/italic', 'core/link' ]}
							// ВАЖЛИВО: не додавайте onSplit — інакше буде <br> замість нового <li>
						/>
						<div className="image-block">
							{imageUrl ? (
								<img src={imageUrl} alt={imageAlt} style={{ maxWidth: '50%' }} />
							) : (
								<p>Зображення не вибрано</p>
							)}

							<MediaUploadCheck>
								<MediaUpload
									onSelect={onSelectImage}
									allowedTypes={['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml']}
									render={({ open }) => (
										<Button onClick={open} variant="primary">
											{imageUrl ? 'Змінити зображення' : 'Завантажити зображення для секції спеціалізації'}
										</Button>
									)}
								/>
							</MediaUploadCheck>
						</div>
						<RichText
							identifier="aboutList"
							tagName="ul"                 // сам контейнер — <ul>
							multiline="li"               // Enter => новий <li>
							value={ aboutList }
							placeholder="Перелік про фактів про компанію"
							onChange={ (value) => setAttributes({ aboutList: value }) }
							allowedFormats={[ 'core/bold', 'core/italic', 'core/link' ]}
							// ВАЖЛИВО: не додавайте onSplit — інакше буде <br> замість нового <li>
						/>
						<RichText
							tagName="p"
							className={'block-sloganText'}
							value={ attributes.sloganText }
							placeholder={'Виділиний текст слогану'}
							onChange={ (value)=>setAttributes({ sloganText: value })}
							allowedFormats={ [ 'core/text-color', 'core/bold', 'core/link' ] }
						/>
					</div>
				</div>
			</section>
		</>
	);
}
