<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */
?>

<?php if( !empty($attributes['mainTitle']) ):?>
	<?php
		$blockAttr = get_block_wrapper_attributes();

	?>
	<section <?php echo $blockAttr; ?>>
		<div class="container">
			<div class="row">
        <div class="content col-12">
          <div class="text-wrapper">
            <h1 class="main-title">
              <?php echo $attributes['mainTitle'];?>
            </h1>
	          <?php if( !empty($attributes['mainTitleServicesList']) ):?>
              <div class="main-title-slider" id="main-title-slider">
			          <?php echo $attributes['mainTitleServicesList'];?>
              </div>
	          <?php endif;?>
            <?php if( !empty($attributes['btnText']) ):?>
              <div class="button btn-color-black btn-right-angle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M10.7636 2L7.22577 5.4914L11.2553 9.46798L3 9.39053V14.315L11.3774 14.4612L7.35423 18.4315L10.9702 22L21 12.1019L10.7636 2Z" fill="#0F0F0F"/>
                </svg>
                <span><?php echo $attributes['btnText'];?></span>
              </div>
            <?php endif;?>
	          <?php if( !empty($content) ):?>
              <ul class="items-list">
			          <?php echo $content; ?>
              </ul>
	          <?php endif;?>
          </div>
          <div class="video-wrapper">
            <video loop="" autoplay="" muted="" playsinline="">
              <source src="<?php echo $attributes['videoFile'];?>" type="video/webm">
            </video>
            <svg class="lighting" width="1169" height="1158" viewBox="0 0 1169 1158" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g filter="url(#filter0_f_221_682m)">
                <mask id="mask0_221_682m" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="189" y="255" width="794" height="652">
                  <path d="M887.243 728.025C888.28 724.434 888.341 720.61 887.419 716.945C886.497 713.28 884.625 709.904 881.995 707.162L687.185 504.098L974.357 293.977C978.113 291.074 980.757 286.969 981.862 282.323C982.967 277.676 982.469 272.759 980.449 268.361C978.428 263.964 975.002 260.344 970.723 258.082C966.443 255.821 961.559 255.051 956.857 255.896L296.634 415.056C292.95 415.816 289.558 417.551 286.805 420.082C284.053 422.612 282.042 425.846 280.977 429.45C279.913 433.055 279.835 436.899 280.751 440.587C281.668 444.275 283.545 447.672 286.19 450.43L478.088 650.459L197.311 868.013C193.662 871.004 191.145 875.153 190.159 879.799C189.173 884.446 189.775 889.323 191.87 893.654C193.965 897.985 197.432 901.522 201.72 903.702C206.008 905.882 210.87 906.58 215.532 905.684L871.795 742.487C875.448 741.688 878.802 739.928 881.516 737.387C884.23 734.846 886.206 731.616 887.243 728.025Z" fill="black"/>
                </mask>
                <g mask="url(#mask0_221_682m)">
                  <g filter="url(#filter1_f_221_682m)">
                    <path d="M433.413 433.727L577.99 488.188C459.455 802.862 509.948 1114.17 690.557 1182.2L595.671 1434.09C335.359 1336.04 262.569 887.266 433.413 433.727Z" fill="url(#paint0_linear_221_682m)"/>
                    <path d="M508.78 462.116L630.299 507.891C530.692 772.316 573.133 1033.97 724.902 1091.14L645.148 1302.86C426.355 1220.45 365.21 843.252 508.78 462.116Z" fill="url(#paint1_linear_221_682m)"/>
                    <path d="M376.463 585.031L521.04 639.492C639.575 324.818 882.906 124.196 1063.52 192.23L1158.4 -59.664C898.09 -157.722 547.307 131.493 376.463 585.031Z" fill="url(#paint2_linear_221_682m)"/>
                    <path d="M214.486 613.014L359.063 667.475C477.598 352.801 720.93 152.178 901.539 220.212L996.426 -31.6817C736.113 -129.739 385.331 159.475 214.486 613.014Z" fill="url(#paint3_linear_221_682m)"/>
                  </g>
                  <g filter="url(#filter2_f_221_682m)">
                    <path d="M554.297 529.567L614.677 552.312C565.173 683.73 586.26 813.741 661.689 842.154L622.061 947.353C513.346 906.401 482.947 718.98 554.297 529.567Z" fill="url(#paint4_linear_221_682m)"/>
                    <path d="M954.56 646.052L946.07 748.052C724.119 729.578 534.906 818.196 524.303 945.587L346.591 930.795C361.877 747.146 634.645 619.425 954.56 646.052Z" fill="url(#paint5_linear_221_682m)"/>
                    <path d="M983.56 535.524L975.07 637.523C753.119 619.05 563.906 707.668 553.303 835.058L375.591 820.267C390.877 636.618 663.645 508.896 983.56 535.524Z" fill="url(#paint6_linear_221_682m)"/>
                    <path d="M676.876 701.456L668.386 803.456C446.436 784.982 257.223 873.6 246.62 1000.99L68.9073 986.199C84.1929 802.55 356.961 674.829 676.876 701.456Z" fill="url(#paint7_linear_221_682m)"/>
                    <path d="M530.511 592.757L590.891 615.501C640.395 484.083 742.018 400.297 817.447 428.71L857.074 323.511C748.359 282.559 601.861 403.344 530.511 592.757Z" fill="url(#paint8_linear_221_682m)"/>
                    <path d="M671.913 528.251L732.293 550.996C781.797 419.578 883.42 335.791 958.849 364.205L998.477 259.005C889.762 218.053 743.263 338.839 671.913 528.251Z" fill="url(#paint9_linear_221_682m)"/>
                  </g>
                </g>
              </g>
              <defs>
                <filter id="filter0_f_221_682m" x="119.697" y="185.562" width="932.74" height="790.502" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="35" result="effect1_foregroundBlur_221_682"/>
                </filter>
                <filter id="filter1_f_221_682m" x="57.4476" y="-235.803" width="1257.99" height="1826.94" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="78.5193" result="effect1_foregroundBlur_221_682"/>
                </filter>
                <filter id="filter2_f_221_682m" x="-9.61114" y="172.509" width="1086.61" height="907.001" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                  <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                  <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                  <feGaussianBlur stdDeviation="39.2597" result="effect1_foregroundBlur_221_682"/>
                </filter>
                <linearGradient id="paint0_linear_221_682m" x1="359.636" y1="1345.19" x2="669.484" y2="522.644" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint1_linear_221_682m" x1="446.775" y1="1228.15" x2="707.184" y2="536.845" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint2_linear_221_682m" x1="612.527" y1="673.967" x2="922.375" y2="-148.583" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint3_linear_221_682m" x1="450.55" y1="701.95" x2="760.398" y2="-120.601" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint4_linear_221_682m" x1="523.485" y1="910.226" x2="652.888" y2="566.702" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint5_linear_221_682m" x1="360.442" y1="764.288" x2="940.705" y2="812.585" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint6_linear_221_682m" x1="389.442" y1="653.76" x2="969.705" y2="702.057" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint7_linear_221_682m" x1="82.7583" y1="819.692" x2="663.021" y2="867.989" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint8_linear_221_682m" x1="629.099" y1="629.899" x2="758.501" y2="286.375" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
                <linearGradient id="paint9_linear_221_682m" x1="770.501" y1="565.394" x2="899.904" y2="221.87" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#FA4510"/>
                  <stop offset="1" stop-color="#FFB912"/>
                </linearGradient>
              </defs>
            </svg>
          </div>
        </div>

			</div>
		</div>


  </section>

<?php endif;?>


