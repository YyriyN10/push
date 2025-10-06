<?php
	/**
	 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
	 */
?>

<?php

	$blockAttr = get_block_wrapper_attributes();
	$context = isset( $block->context ) && is_array( $block->context ) ? $block->context : [];

	$class = get_block_wrapper_attributes(["class" => 'card']);

?>

<div <?php echo $class;?> class="item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back" data-aos-delay="<?php echo  150 * ($attributes['blockIndex'] + 1) ;?>">
  <div class="card-header">
    <a class="btn collapsed" data-bs-toggle="collapse" href="#faq-<?php echo $attributes['blockIndex'] + 1;?>">
      <?php echo $attributes['itemQuestion'];?>
      <svg class="indicator" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
        <path d="M38 17L24 31L10 17" stroke="#1D1D1B" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
    </a>
  </div>
  <div id="faq-<?php echo $attributes['blockIndex'] + 1;?>" class="collapse" data-bs-parent="#accordion-faq">
    <div class="card-body">
      <?php echo $content;?>
    </div>
  </div>
</div>



