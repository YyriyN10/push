<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

?>

<?php if( !empty($attributes['blockTitle'])):?>
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
        <div class="text-content col-lg-7 col-md-8" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <h2 class="block-title-small" >
		        <?php echo $attributes['blockTitle'];?>
          </h2>
          <?php if( !empty($attributes['blockText']) ):?>
            <p class="text"><?php echo $attributes['blockText'];?></p>
          <?php endif;?>
          <?php if( !empty($attributes['btnText']) ):?>
            <div class="button btn-color-black btn-left-angle" data-bs-toggle="modal" data-bs-target="#formModal">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path d="M10.7636 2L7.22577 5.4914L11.2553 9.46798L3 9.39053V14.315L11.3774 14.4612L7.35423 18.4315L10.9702 22L21 12.1019L10.7636 2Z" fill="#0F0F0F"/>
              </svg>
              <span><?php echo $attributes['btnText']; ?></span>
            </div>
          <?php endif;?>
        </div>
        <div class="image-wrapper col-xxl-4 col-lg-5 col-md-4 offset-md-0 col-sm-6 offset-sm-3 col-8 offset-2" data-aos="fade-left" data-aos-delay="150" data-aos-duration="300" data-aos-easing="ease-in-out-back">
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

			</div>
		</div>
    <svg class="element" width="1440" height="351" viewBox="0 0 1440 351" fill="none" xmlns="http://www.w3.org/2000/svg">
      <g style="mix-blend-mode:screen" filter="url(#filter0_f_181_581)">
        <path d="M1654.65 1592.31C1948.11 1463.41 2021.68 1157.64 1818.97 909.351L1569.56 603.862C1366.84 355.576 964.613 258.798 671.147 387.703L94.9808 640.783C-198.485 769.687 -272.054 1075.46 -69.3419 1323.75L180.073 1629.23C382.785 1877.52 785.017 1974.3 1078.48 1845.39L1654.65 1592.31Z" fill="url(#paint0_radial_181_581)"/>
      </g>
      <g style="mix-blend-mode:screen" filter="url(#filter1_f_181_581)">
        <path d="M471.672 926.214C765.137 797.309 838.707 491.536 635.995 243.25L618.043 221.262C415.33 -27.0245 13.0984 -123.803 -280.367 5.10158L-470.826 88.7603C-764.291 217.665 -837.861 523.438 -635.149 771.724L-617.197 793.712C-414.484 1042 -12.2525 1138.78 281.213 1009.87L471.672 926.214Z" fill="url(#paint1_radial_181_581)"/>
      </g>
      <g style="mix-blend-mode:screen" filter="url(#filter2_f_181_581)">
        <path d="M2279.09 974.489C2572.56 845.585 2646.13 539.812 2443.42 291.525L2425.46 269.537C2222.75 21.2509 1820.52 -75.5273 1527.05 53.377L1336.6 137.036C1043.13 265.94 969.561 571.713 1172.27 819.999L1190.23 841.988C1392.94 1090.27 1795.17 1187.05 2088.63 1058.15L2279.09 974.489Z" fill="url(#paint2_radial_181_581)"/>
      </g>
      <defs>
        <filter id="filter0_f_181_581" x="-427.067" y="87.3978" width="2603.76" height="2058.3" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_581"/>
        </filter>
        <filter id="filter1_f_181_581" x="-992.875" y="-295.203" width="1986.6" height="1605.38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_581"/>
        </filter>
        <filter id="filter2_f_181_581" x="814.547" y="-246.928" width="1986.6" height="1605.38" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
          <feFlood flood-opacity="0" result="BackgroundImageFix"/>
          <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
          <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_581"/>
        </filter>
        <radialGradient id="paint0_radial_181_581" cx="0" cy="0" r="1" gradientTransform="matrix(-828.9 -451.436 -596.232 599.02 771.636 1285.2)" gradientUnits="userSpaceOnUse">
          <stop stop-color="#F5900D"/>
          <stop offset="1" stop-color="#FA4510"/>
        </radialGradient>
        <radialGradient id="paint1_radial_181_581" cx="0" cy="0" r="1" gradientTransform="matrix(-633.822 -345.192 -455.911 458.044 -78.4731 636.445)" gradientUnits="userSpaceOnUse">
          <stop stop-color="#F5900D"/>
          <stop offset="1" stop-color="#FA4510"/>
        </radialGradient>
        <radialGradient id="paint2_radial_181_581" cx="0" cy="0" r="1" gradientTransform="matrix(-633.822 -345.192 -455.911 458.044 1728.95 684.72)" gradientUnits="userSpaceOnUse">
          <stop stop-color="#F5900D"/>
          <stop offset="1" stop-color="#FA4510"/>
        </radialGradient>
      </defs>
    </svg>

  </section>

<?php endif;?>


