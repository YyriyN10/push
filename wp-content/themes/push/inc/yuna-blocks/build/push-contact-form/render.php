<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

  $formServicesList = carbon_get_post_meta(get_the_ID(), 'push_form_current_default_services');


	$argsList = array(
		'active_service' => $formServicesList,
	);
?>

<?php if( !empty($attributes['blockTitle']) ):?>
	<?php
		$blockAttr = get_block_wrapper_attributes();

		if ( !empty( $attributes['topIndent']) || !empty( $attributes['bottomIndent']) ){
			$indent = $attributes['topIndent'].' '.$attributes['bottomIndent'];
			$blockAttr = get_block_wrapper_attributes(["class" => $indent]);
		}

	?>

	<section <?php echo $blockAttr; ?>
			<?php if( !empty($attributes['anchorId']) ):?>
				id="<?php echo $attributes['anchorId'];?>"
			<?php endif;?>
	>
		<div class="container">
			<div class="row">
        <h2 class="block-title-small text-center col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php echo $attributes['blockTitle'];?>
        </h2>
			</div>
      <div class="row">
        <div class="image-wrapper col-lg-5 col-md-4 offset-md-0 col-sm-6 offset-sm-3 col-8 offset-2" data-aos="fade-right" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <div class="pic">
            <img
               class="lazy"
               data-src="<?php echo $attributes['imageUrl'];?>"
               <?php
                $altText = $attributes['imageAlt'];
                if ( !empty( $altText ) ):?>
                    alt="<?php echo $altText;?>"
                <?php else:?>
                    alt="<?php $attributes['blockTitle'];?>"
                <?php endif;?>
            >
          </div>
        </div>
        <div class="form-wrapper col-xl-6 col-lg-7 col-md-8" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php get_template_part('template-parts/form', null, $argsList);?>
        </div>
      </div>
		</div>
	</section>

<?php endif;?>


