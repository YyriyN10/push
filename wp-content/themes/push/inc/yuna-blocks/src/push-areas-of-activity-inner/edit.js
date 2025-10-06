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
import {
	useBlockProps,
	RichText,
	InnerBlocks,
} from '@wordpress/block-editor';
import { Notice, Button } from '@wordpress/components';
import { useSelect, useDispatch } from '@wordpress/data';
import { useEffect, useState } from '@wordpress/element';
import { rawHandler } from '@wordpress/blocks';



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

// Витягуємо іконки з глобального пакета (WP 6.x). Фолбек — dashicons-рядки.


export default function Edit({ attributes, setAttributes, clientId }) {

	const {itemTitle, itemList} = attributes;

	// Чи є вже внутрішні блоки у відповіді
	const hasInner = useSelect( ( select ) => {
		const b = select( 'core/block-editor' ).getBlock( clientId );
		return !!( b && b.innerBlocks && b.innerBlocks.length );
	}, [ clientId ] );

	// Міграція зі старого HTML (answer) у внутрішні блоки
	const { replaceInnerBlocks } = useDispatch( 'core/block-editor' );
	const [ migrated, setMigrated ] = useState( false );

	const migrateLegacyToInnerBlocks = () => {
		if ( !itemList ) return;
		const blocks = rawHandler( { HTML: itemList } ) || [];
		replaceInnerBlocks( clientId, blocks, false );
		setAttributes( { itemList: '' } ); // очистити легасі, щоб контент не дублювався
		setMigrated( true );
	};

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


	return (
		<>

			{!!itemList && !hasInner && (
				<Notice status="info" isDismissible={ false }>
					{ 'Виявлено старий текст відповіді. Конвертувати у параграфи/списки?' }{' '}
					<Button variant="primary" onClick={ migrateLegacyToInnerBlocks }>
						{ 'Конвертувати' }
					</Button>
				</Notice>
			)}
			<div { ...blockProps } >

				<RichText
					tagName="p"
					className={'item-name'}
					value={ attributes.itemTitle }
					placeholder={'Назва напрямку'}
					style={{maxWidth: '50%'}}
					onChange={ (value)=>setAttributes({ itemTitle: value })}
					allowedFormats={ [ 'core/bold', 'core/italic', 'core/text-color' ] }
				/>
				{/* Відповідь: комбіновані елементи — параграфи/списки/Classic */}
				<div className="item-answer">
					<InnerBlocks
						allowedBlocks={ [ 'core/paragraph', 'core/list', 'core/freeform' ] }
						template={ [
							[ 'core/paragraph', { placeholder: 'Текст складової' } ],
						] }
						templateLock={ false }
						orientation="vertical"
						renderAppender={ InnerBlocks.ButtonBlockAppender }
					/>
				</div>
			</div>
			{ migrated && (
				<Notice
					status="success"
					onRemove={ () => setMigrated( false ) }
				>
					{ 'Готово! Текст сконвертовано у внутрішні блоки.'}
				</Notice>
			) }
		</>
	);
}
