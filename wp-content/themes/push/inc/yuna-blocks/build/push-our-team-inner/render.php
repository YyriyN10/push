<?php
	/**
	 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
	 */
?>

<?php

	$blockAttr = get_block_wrapper_attributes();

	$class = get_block_wrapper_attributes(["class" => 'slide']);

?>

<div <?php echo $class;?> >

  <?php if( !empty($attributes['imageUrl']) ):?>
    <div class="pic-wrapper">
      <img
           src="<?php echo $attributes['imageUrl'];?>"
			  <?php
				  if ( !empty( $attributes['imageAlt'] ) ):?>
            alt="<?php echo $attributes['imageAlt'] ;?>"
				  <?php else:?>
            alt="<?php wp_strip_all_tags($attributes['name']);?>"
				  <?php endif;?>
      >
    </div>
  <?php endif;?>

	<?php if( !empty($attributes['name']) ):?>
    <p class="name"><?php echo $attributes['name'];?></p>
	<?php endif;?>
  <?php if( !empty($attributes['position']) ):?>
    <p class="description"><?php echo $attributes['position'];?></p>
  <?php endif;?>
</div>



