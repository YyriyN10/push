<?php
	/**
	 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
	 */
?>

<?php

	$blockAttr = get_block_wrapper_attributes();
	$class = get_block_wrapper_attributes(["class" => 'item']);

?>

<li <?php echo $class;?> data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back" data-aos-delay="<?php echo  150 * ($attributes['blockIndex'] + 1) ;?>" >

  <img class="svg-pic" src="<?php echo $attributes['itemIconUrl'];?>" alt="<?php echo $attributes['itemName'];?>">
</li>



