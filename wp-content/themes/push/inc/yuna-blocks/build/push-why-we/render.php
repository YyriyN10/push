<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php if( !empty($attributes['blockTitle']) && !empty($attributes['otherAgencyList']) && !empty($attributes['ourAgencyList']) ):?>
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
        <h2 class="block-title text-center col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php echo $attributes['blockTitle'];?>
        </h2>
        <?php if( !empty($attributes['blockSubTitle']) ):?>
          <h3 class="subtilte text-center col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
            <?php echo $attributes['blockSubTitle'];?>
          </h3>
        <?php endif;?>
			</div>
      <div class="row">

        <div class="content col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
          <div class="inner" >
            <div class="other-agency agency-item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
		          <?php if( !empty($attributes['otherAgencyTitle']) ):?>
                <h3 class="name"><?php echo $attributes['otherAgencyTitle'];?></h3>
		          <?php endif;?>
              <ul class="other-agency-problem">
			          <?php echo $attributes['otherAgencyList'];?>
              </ul>
            </div>
            <div class="our-agency agency-item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
              <div class="item-pic">
                <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34" fill="none">
                  <path d="M33.5125 33.8225L33.5125 22.3191L20.4546 22.3191L33.668 9.46097L25.8732 0.866706L12.0602 14.2578L12.0602 1.15541L0.334636 1.15541L0.334633 33.8225L33.5125 33.8225Z" fill="#FF5900"/>
                </svg>
              </div>
		          <?php if( !empty($attributes['ourAgencyTitle']) ):?>
                <h3 class="name"><?php echo $attributes['ourAgencyTitle'];?></h3>
		          <?php endif;?>
              <ul class="our-agency-advantages">
			          <?php echo $attributes['ourAgencyList'];?>
              </ul>
            </div>
          </div>

        </div>
      </div>
		</div>
	</section>

<?php endif;?>


