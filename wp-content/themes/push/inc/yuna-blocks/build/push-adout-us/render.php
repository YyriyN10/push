<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
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
        <div class="left-part part-wrapper col-md-6" >
          <?php if( !empty($attributes['textWhoWeAre']) || !empty($attributes['textApproach']) ):?>
            <div class="card-item white-item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
              <?php if( !empty($attributes['textWhoWeAre']) ):?>
                <p class="text-who-we-are"><?php echo $attributes['textWhoWeAre'];?></p>
              <?php endif;?>
	            <?php if( !empty($attributes['textApproach']) ):?>
                <p class="text-approach"><?php echo $attributes['textApproach'];?></p>
	            <?php endif;?>
            </div>
          <?php endif;?>
          <?php if( !empty($attributes['areasSpecializationList'])  ):?>
            <div class="card-item white-item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
              <?php if( !empty($attributes['titleAreasSpecialization']) ):?>
                <h3 class="card-title"><?php echo $attributes['titleAreasSpecialization'];?></h3>
              <?php endif;?>
              <ul class="specialization-list">
                <?php echo $attributes['areasSpecializationList'];?>
              </ul>
              <?php if( !empty($attributes['imageUrl']) ):?>
                <div class="pic">
                  <img src="<?php echo $attributes['imageUrl'];?>" alt="<?php echo $attributes['imageAlt'];?>" class="svg-pic">
                </div>
              <?php endif;?>
            </div>
          <?php endif;?>
        </div>
        <div class="right-part part-wrapper col-md-6">
          <?php if( !empty($attributes['aboutList']) ):?>
            <div class="card-item white-item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
              <ul class="about-list">
		            <?php echo $attributes['aboutList'];?>
              </ul>
            </div>
          <?php endif;?>
          <?php if( !empty($attributes['sloganText']) ):?>
            <div class="card-item accent-item" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
              <p class="slogan"><?php echo $attributes['sloganText'];?></p>
            </div>
          <?php endif;?>
        </div>
      </div>
		</div>
	</section>

<?php endif;?>


