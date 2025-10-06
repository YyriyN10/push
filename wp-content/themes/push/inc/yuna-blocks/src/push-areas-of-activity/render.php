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
        <div class="content col-12">
          <div class="inner indent-bottom-small indent-top-small">
            <h2 class="block-title text-center" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
		          <?php echo $attributes['blockTitle'];?>
            </h2>
	          <?php if( !empty($content) ):?>
              <ul class="items-list">
			          <?php echo $content; ?>
              </ul>
	          <?php endif;?>
            <svg class="element" width="1296" height="793" viewBox="0 0 1296 793" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g style="mix-blend-mode:screen" filter="url(#filter0_f_181_1338)">
                <path d="M1193.98 1617.69C1478.71 1470.5 1561.43 1137.68 1378.73 874.32L1209.43 630.285C1026.73 366.924 647.802 272.751 363.07 419.944L9.55384 602.694C-275.179 749.887 -357.891 1082.71 -175.191 1346.07L-5.89717 1590.1C176.803 1853.46 555.733 1947.63 840.466 1800.44L1193.98 1617.69Z" fill="url(#paint0_radial_181_1338)"/>
              </g>
              <g style="mix-blend-mode:screen" filter="url(#filter1_f_181_1338)">
                <path d="M1574.94 1170.65C1861.93 1263.4 2191.88 1114.28 2311.89 837.576C2431.9 560.87 2296.54 261.362 2009.54 168.606L1890.46 130.118C1603.46 37.3624 1273.52 186.484 1153.51 463.19C1033.49 739.896 1168.86 1039.4 1455.85 1132.16L1574.94 1170.65Z" fill="url(#paint1_radial_181_1338)"/>
              </g>
              <g style="mix-blend-mode:screen" filter="url(#filter2_f_181_1338)">
                <path d="M1383.93 259.162C1141.47 514.551 1075.68 804.967 1073.1 918.251C1084.02 1148.18 1117.64 1504.68 1164.8 1091.31C1223.76 574.59 1459.63 493.769 1878.51 37.9617C2213.62 -326.685 2040.35 -421.673 1911.83 -423.587L1688.98 -291.199C1688.32 -214.158 1626.39 3.77268 1383.93 259.162Z" fill="url(#paint2_linear_181_1338)"/>
              </g>
              <g style="mix-blend-mode:screen" filter="url(#filter3_f_181_1338)">
                <path d="M912.031 961.952C1185.46 820.601 1264.89 500.99 1089.44 248.082C913.994 -4.82696 550.103 -95.2623 276.671 46.0887L208.099 81.537C-65.3339 222.888 -144.765 542.499 30.6852 795.408C206.135 1048.32 570.026 1138.75 843.459 997.401L912.031 961.952Z" fill="url(#paint3_radial_181_1338)"/>
              </g>
              <g style="mix-blend-mode:screen" filter="url(#filter4_f_181_1338)">
                <path d="M1288.02 1274.75C1561.46 1133.4 1640.89 813.786 1465.44 560.877C1289.99 307.968 926.096 217.533 652.664 358.884L584.092 394.332C310.659 535.683 231.229 855.294 406.678 1108.2C582.128 1361.11 946.019 1451.55 1219.45 1310.2L1288.02 1274.75Z" fill="url(#paint4_radial_181_1338)"/>
              </g>
              <g style="mix-blend-mode:color-dodge" filter="url(#filter5_f_181_1338)">
                <path d="M342.634 -352.81C100.169 -97.4216 34.3868 192.995 31.8036 306.279C42.7202 536.204 76.344 892.709 123.507 479.335C182.46 -37.3825 418.329 -118.203 837.213 -574.01C1172.32 -938.657 999.053 -1033.65 870.531 -1035.56L647.684 -903.171C647.028 -826.13 585.099 -608.199 342.634 -352.81Z" fill="url(#paint5_linear_181_1338)"/>
              </g>
              <g style="mix-blend-mode:color-dodge" filter="url(#filter6_f_181_1338)">
                <path d="M1259.63 271.514C971.85 574.634 893.773 919.329 890.707 1053.79C903.664 1326.68 943.572 1749.82 999.549 1259.19C1069.52 645.895 1349.47 549.969 1846.65 8.97168C2244.38 -423.826 2038.73 -536.568 1886.19 -538.84L1621.69 -381.709C1620.92 -290.268 1547.41 -31.6071 1259.63 271.514Z" fill="url(#paint6_linear_181_1338)"/>
              </g>
              <defs>
                <filter id="filter0_f_181_1338" x="-515.495" y="107.199" width="2234.53" height="2005.99" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <filter id="filter1_f_181_1338" x="866.532" y="-140.648" width="1732.33" height="1582.06" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <filter id="filter2_f_181_1338" x="984.9" y="-511.787" width="1176.08" height="1881.24" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="44.1" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <filter id="filter3_f_181_1338" x="-305.766" y="-263.897" width="1731.66" height="1571.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <filter id="filter4_f_181_1338" x="70.2269" y="48.898" width="1731.66" height="1571.28" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="121.611" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <filter id="filter5_f_181_1338" x="-56.3963" y="-1123.76" width="1176.08" height="1881.24" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="44.1" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <filter id="filter6_f_181_1338" x="802.507" y="-627.04" width="1362.92" height="2199.88" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="44.1" result="effect1_foregroundBlur_181_1338"/>
                </filter>
                <radialGradient id="paint0_radial_181_1338" cx="0" cy="0" r="1" gradientTransform="matrix(-700.296 -448.863 -503.726 595.607 514.597 1277.88)" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F5900D"/>
                  <stop offset="1" stop-color="#FA4510"/>
                </radialGradient>
                <radialGradient id="paint1_radial_181_1338" cx="0" cy="0" r="1" gradientTransform="matrix(-22.9144 -576.719 -654.137 23.9292 1574.64 685.392)" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F5900D"/>
                  <stop offset="1" stop-color="#FA4510"/>
                </radialGradient>
                <linearGradient id="paint2_linear_181_1338" x1="1993.34" y1="-520.204" x2="1644.21" y2="1358.38" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D9F5FB"/>
                  <stop offset="1" stop-color="#484EB7" stop-opacity="0"/>
                  <stop offset="1" stop-color="#D03F92" stop-opacity="0"/>
                </linearGradient>
                <radialGradient id="paint3_radial_181_1338" cx="0" cy="0" r="1" gradientTransform="matrix(-535.485 -343.225 -385.177 455.434 493.409 649.968)" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F5900D"/>
                  <stop offset="1" stop-color="#FA4510"/>
                </radialGradient>
                <radialGradient id="paint4_radial_181_1338" cx="0" cy="0" r="1" gradientTransform="matrix(-535.485 -343.225 -385.177 455.434 869.402 962.763)" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#F5900D"/>
                  <stop offset="1" stop-color="#FA4510"/>
                </radialGradient>
                <linearGradient id="paint5_linear_181_1338" x1="952.049" y1="-1132.18" x2="602.912" y2="746.408" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D9F5FB"/>
                  <stop offset="1" stop-color="#484EB7" stop-opacity="0"/>
                  <stop offset="1" stop-color="#D03F92" stop-opacity="0"/>
                </linearGradient>
                <linearGradient id="paint6_linear_181_1338" x1="1982.94" y1="-653.514" x2="1568.55" y2="1576.17" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#D9F5FB"/>
                  <stop offset="1" stop-color="#484EB7" stop-opacity="0"/>
                  <stop offset="1" stop-color="#D03F92" stop-opacity="0"/>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>
			</div>
		</div>
	</section>

<?php endif;?>


