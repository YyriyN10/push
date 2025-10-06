<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$reviewsList = carbon_get_theme_option('push_reviews_list'.push_lang_prefix());
?>

<?php if( !empty($attributes['blockTitle']) && !empty($reviewsList) ):?>
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
        <div class="previews-slider-wrapper col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <div class="previews-slider" id="preview-reviews-slider">
	          <?php foreach( array_reverse($reviewsList) as $previewSlide ):?>
              <div class="slide">
                <p class="company"><?php echo $previewSlide['company'];?></p>
              </div>
	          <?php endforeach;?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="slider-wrapper col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <div class="slider" id="reviews-slider">
	          <?php foreach( array_reverse($reviewsList) as $review ):?>
              <div class="slide">
                <?php if( $review['review_type'] == 'image' ):?>
                  <a href="<?php echo $review['image'];?>" data-fancybox="rev" tabindex="0" class="image-inner">
                    <img alt="<?php echo $review['company'];?>" class="pic" src="<?php echo $review['image'];?>">
                  </a>
                <?php endif;?>
                <?php if( $review['review_type'] == 'video' ):?>
                  <div class="video-wrapper">
                    <div class="author">
                      <div class="text">
                        <p class="name"><?php echo $review['name'];?></p>
                        <p class="position"><?php echo $review['position'];?></p>
                      </div>
                    </div>
                    <div class="youtube" id="<?php echo $review['video_id'];?>"></div>
                    <p class="timing"><?php echo $review['time'];?></p>
                    <a href="#" class="open-review" data-videoid="<?php echo $review['video_id'];?>" tabindex="0">
                      <svg xmlns="http://www.w3.org/2000/svg" width="38" height="44" viewBox="0 0 38 44" fill="none">
                        <path d="M1.05957 42.5742L1.05957 1.27246L36.8809 21.9229L1.05957 42.5742Z" stroke="white" stroke-width="0.77037"/>
                      </svg>
                    </a>
                  </div>
                <?php endif;?>
              </div>
	          <?php endforeach;?>
          </div>
          <div class="control prev">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="23" viewBox="0 0 21 23" fill="none">
              <path d="M11.3418 0.334012L15.2909 4.28313L10.8589 8.71515L19.7578 8.64455L20.0626 14.2406L10.7772 14.3317L15.2752 18.8298L11.2954 22.8096L0.0808239 11.595L11.3418 0.334012Z" fill="#0F0F0F"/>
            </svg>
          </div>
          <div class="control next">
            <svg xmlns="http://www.w3.org/2000/svg" width="21" height="24" viewBox="0 0 21 24" fill="none">
              <path d="M9.05276 0.739285L5.10364 4.68841L9.53566 9.12042L0.636695 9.04983L0.331935 14.6459L9.61737 14.737L5.11934 19.2351L9.09911 23.2148L20.3137 12.0002L9.05276 0.739285Z" fill="#0F0F0F"/>
            </svg>
          </div>
        </div>
      </div>
		</div>
	</section>

<?php endif;?>


