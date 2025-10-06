<?php
	/**
	 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
	 */
?>

<?php

	$blockAttr = get_block_wrapper_attributes();

	$class = get_block_wrapper_attributes(["class" => 'direction-item']);

?>

<li <?php echo $class;?> class="item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back" data-aos-delay="<?php echo  150 * ($attributes['blockIndex'] + 1) ;?>">
  <h3 class="name item-title"><?php echo $attributes['itemTitle'];?></h3>
  <div class="direction-inner-wrapper">
		<?php echo $content;?>
  </div>
</li>



