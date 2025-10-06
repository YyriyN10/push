<?php
	/**
	 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
	 */
?>

<?php

	$blockAttr = get_block_wrapper_attributes();
	$imageToggleClass = get_block_wrapper_attributes(["class"][0]);
	$class = get_block_wrapper_attributes(["class" => 'item']);

	$classList = '';
	if (preg_match('/"(.*?)"/s', $imageToggleClass, $matches)) {
		$classList = $matches[1]; // Перший елемент масиву - це текст між кавичками
	}

	$classesArray = explode(" ", $classList);


?>

<li <?php echo $class;?>
    data-aos="fade-up"
    data-aos-duration="300"
    data-aos-easing="ease-in-out-back"
    data-aos-delay="<?php echo  150 * ($attributes['blockIndex'] + 1) ;?>"
>
  <a href="<?php echo get_permalink($attributes['itemLink']);?>" target="_blank">
    <span class="name item-title"><?php echo $attributes['itemName'];?></span>
    <span class="description"><?php echo $attributes['itemDescription'];?></span>
    <span class="indicator">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path d="M0.0746166 0V5.5849H6.34244L0 11.8275L3.74151 16L10.3718 9.49865V15.8598H16V0H0.0746166Z" fill="#FF5900"/>
      </svg>
    </span>
  </a>
</li>
<div class="images-wrapper image-<?php echo $classesArray[0];?>">
  <div class="icon-wrapper icon1">
    <img class="svg-pic" src="<?php echo $attributes['itemIcon1Url'];?>" alt="<?php echo $attributes['itemIcon1Alt'];?>">
  </div>
  <div class="icon-wrapper icon2">
    <img class="svg-pic" src="<?php echo $attributes['itemIcon2Url'];?>" alt="<?php echo $attributes['itemIcon2Alt'];?>">
  </div>
  <div class="image">
    <img
        src="<?php echo $attributes['itemImageUrl'];?>"
			<?php
				$altText = $attributes['itemImageAlt'];
				if ( !empty( $altText ) ):?>
          alt="<?php echo $altText;?>"
				<?php else:?>
          alt="<?php echo $attributes['itemName'];?>"
				<?php endif;?>

    >
  </div>
</div>



