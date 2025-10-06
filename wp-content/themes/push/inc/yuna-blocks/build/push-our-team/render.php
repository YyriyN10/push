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
        <h2 class="block-title col-12 text-center" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php echo $attributes['blockTitle'];?>
        </h2>
			</div>
      <div class="row">
        <div class="chief col-lg-6" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <svg class="decor" xmlns="http://www.w3.org/2000/svg" width="94" height="94" viewBox="0 0 94 94" fill="none">
            <path opacity="0.1" d="M94 93.5157L61.1425 93.5157L61.1425 56.7035L24.5289 94L6.66675e-06 71.9773L38.214 33.034L0.849218 33.034L0.849216 -3.55764e-06L94 -7.62939e-06L94 93.5157Z" fill="#FF5900"/>
          </svg>
          <div class="pic-wrapper">
            <img
               class="lazy"
               data-src="<?php echo $attributes['chiefPhotoUrl'];?>"
               alt="<?php echo wp_strip_all_tags($attributes['companyChiefName']);?> <?php echo wp_strip_all_tags($attributes['companyChiefPost']);?>"
            >
            <?php if( !empty($attributes['companyChiefName']) || !empty($attributes['companyChiefPost'])):?>
              <div class="chief-info">
                <?php if( !empty($attributes['companyChiefName']) ):?>
                  <p class="name"><?php echo $attributes['companyChiefName'];?></p>
                <?php endif;?>
                <?php if( !empty($attributes['companyChiefPost']) ):?>
                  <p class="position"><?php echo $attributes['companyChiefPost'];?></p>
                <?php endif;?>
              </div>
            <?php endif;?>

          </div>
        </div>
        <div class="content col-lg-6" data-aos="fade-up" data-aos-duration="300" data-aos-delay="150" data-aos-easing="ease-in-out-back">
          <?php if( !empty($attributes['slogan']) || !empty($attributes['blockText']) ):?>
            <div class="text-content">
              <?php if( !empty($attributes['slogan']) ):?>
                <blockquote>
                  <svg class="quote" xmlns="http://www.w3.org/2000/svg" width="30" height="23" viewBox="0 0 30 23" fill="none">
                    <path d="M7.7765 0H13.5829L9.15899 9.83671C10.4263 10.3136 11.4516 11.1363 12.235 12.3048C13.0415 13.4733 13.4447 14.7729 13.4447 16.2037C13.4447 17.4438 13.1452 18.5884 12.5461 19.6376C11.947 20.663 11.129 21.4857 10.0922 22.1058C9.07834 22.7019 7.94931 23 6.70507 23C5.48387 23 4.35484 22.7019 3.31797 22.1058C2.30415 21.4857 1.4977 20.6392 0.898618 19.5661C0.299539 18.493 0 17.3007 0 15.9891C0 14.7491 0.276498 13.4256 0.829493 12.0187C1.38249 10.6117 2.35023 8.8113 3.73272 6.61742L7.7765 0ZM25.576 9.83671C26.8433 10.3136 27.8687 11.1363 28.6521 12.3048C29.4585 13.4733 29.8618 14.7729 29.8618 16.2037C29.8618 17.4438 29.5622 18.5884 28.9631 19.6376C28.3641 20.663 27.5461 21.4857 26.5092 22.1058C25.4954 22.7019 24.3664 23 23.1221 23C21.9009 23 20.7719 22.7019 19.735 22.1058C18.7212 21.4857 17.9147 20.6392 17.3157 19.5661C16.7166 18.493 16.4171 17.3007 16.4171 15.9891C16.4171 14.7491 16.6935 13.4256 17.2465 12.0187C17.7995 10.6117 18.7673 8.8113 20.1498 6.61742L24.1935 0H30L25.576 9.83671Z" fill="#FF5900"/>
                  </svg>
                  <span><?php echo $attributes['slogan'];?></span>
                </blockquote>
              <?php endif;?>
              <?php if( !empty($attributes['blockText']) ):?>
                <div class="text"><?php echo $attributes['blockText'];?></div>
              <?php endif;?>
            </div>
          <?php endif;?>
	        <?php if( !empty($content) ):?>
            <div class="slider-wrapper">
              <div class="slider" id="team-slider">
	              <?php echo $content; ?>
              </div>
              <div class="control next">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="24" viewBox="0 0 22 24" fill="none">
                  <path d="M9.66043 0.33621L5.59335 4.40329L10.21 9.01997L0.992363 8.89435L0.709712 14.6888L10.3278 14.8379L5.69542 19.4703L9.84102 23.6159L21.3906 12.0664L9.66043 0.33621Z" fill="#0F0F0F"/>
                </svg>
              </div>
            </div>
	        <?php endif;?>
        </div>
      </div>
		</div>
	</section>

<?php endif;?>


