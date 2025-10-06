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
import { useBlockProps, RichText, MediaUpload, MediaUploadCheck } from '@wordpress/block-editor';
import { Button, SelectControl } from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { useEffect, useState } from '@wordpress/element';



/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes, clientId }) {

	const {itemName, itemDescription, itemLink, itemIcon1Url, itemIcon2Url, itemIcon1Id, itemIcon2Id, itemIcon1Alt, itemIcon2Alt, itemImageUrl, itemImageId, itemImageAlt} = attributes;

	//Block index
	const { blockIndexAttr } = { blockIndexAttr: attributes.blockIndex ?? 0 };

	const index = useSelect( ( select ) => {
		const be = select( 'core/block-editor' );
		const rootId = be.getBlockRootClientId( clientId );        // батьківський блок
		const idx = be.getBlockIndex( clientId, rootId );           // 0-based індекс
		return typeof idx === 'number' ? idx : 0;
	}, [ clientId ] );

	useEffect( () => {
		if ( index !== blockIndexAttr ) {
			setAttributes( { blockIndex: index } );
		}
	}, [ index ] );

	const blockProps = useBlockProps();

	// Отримуємо сторінку послуг
	const pagesList = useSelect(
		(select) => select('core').getEntityRecords('postType', 'page', { per_page: -1 }),
		[]
	);

	const pagesListOptions = pagesList
		? pagesList.map((page) => ({ label: page.title.rendered, value: page.id }))
		: [];

	pagesListOptions.unshift({ label: __('Виберіть сторінку послуг', ), value: 0 });


	//Select image
	const onSelectImage = (media) => {
		setAttributes({
			itemImageUrl: media?.url || '',
			itemImageId: media?.id || 0,
			itemImageAlt: media?.alt || '',
		});
	};

	//Select icon 1
	const onSelectIcon1 = (media) => {
		setAttributes({
			itemIcon1Url: media?.url || '',
			itemIcon1Id: media?.id || 0,
			itemIcon1Alt: media?.alt || '',
		});
	};

	//Select icon 2
	const onSelectIcon2 = (media) => {
		setAttributes({
			itemIcon2Url: media?.url || '',
			itemIcon2Id: media?.id || 0,
			itemIcon2Alt: media?.alt || '',
		});
	};



	return (
		<>
			{/*<InspectorControls>
				<PanelBody title={'Settings'}  >

				</PanelBody>
			</InspectorControls>*/}
			<div { ...blockProps } >

				<div className="image-block">
					{itemImageUrl ? (
						<img src={itemImageUrl} alt={itemImageAlt} style={{ maxWidth: '50%' }} />
					) : (
						<p>Зображення не вибрано</p>
					)}

					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectImage}
							allowedTypes={['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml']}
							render={({ open }) => (
								<Button onClick={open} variant="primary">
									{itemImageUrl ? 'Змінити зображення' : 'Завантажити зображення послуги'}
								</Button>
							)}
						/>
					</MediaUploadCheck>
				</div>

				<div className="image-block">
					{itemIcon1Url ? (
						<img src={itemIcon1Url} alt={itemIcon1Alt} style={{ maxWidth: '50%' }} />
					) : (
						<p>Зображення не вибрано</p>
					)}

					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectIcon1}
							allowedTypes={['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml']}
							render={({ open }) => (
								<Button onClick={open} variant="primary">
									{itemIcon1Url ? 'Змінити зображення' : 'Завантажити зображення іконки 1'}
								</Button>
							)}
						/>
					</MediaUploadCheck>
				</div>

				<div className="image-block">
					{itemIcon2Url ? (
						<img src={itemIcon2Url} alt={itemIcon2Alt} style={{ maxWidth: '50%' }} />
					) : (
						<p>Зображення не вибрано</p>
					)}

					<MediaUploadCheck>
						<MediaUpload
							onSelect={onSelectIcon2}
							allowedTypes={['image/jpeg', 'image/png', 'image/webp', 'image/svg+xml']}
							render={({ open }) => (
								<Button onClick={open} variant="primary">
									{itemIcon2Url ? 'Змінити зображення' : 'Завантажити зображення іконки 2'}
								</Button>
							)}
						/>
					</MediaUploadCheck>
				</div>

				<RichText
					tagName="p"
					className={'item-name'}
					value={ attributes.itemName }
					placeholder={'Назва блоку'}
					style={{maxWidth: '50%'}}
					onChange={ (value)=>setAttributes({ itemName: value })}
					allowedFormats={ [ ] }
				/>
				<RichText
					tagName="p"
					className={'item-description'}
					value={ attributes.itemDescription }
					placeholder={'Кроткий опис'}
					style={{maxWidth: '50%'}}
					onChange={ (value)=>setAttributes({ itemDescription: value })}
					allowedFormats={ [ ] }
				/>
				<SelectControl
					label={__('Оберіть сторінкуг послуг')}
					value={itemLink}
					options={pagesListOptions}
					onChange={(value) => setAttributes({ itemLink: parseInt(value) })}
				/>


			</div>
		</>
	);
}
