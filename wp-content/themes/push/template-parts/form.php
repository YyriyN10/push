<?php

	if ( ! defined( 'ABSPATH' ) ) {
				exit;
			}

?>

<form method="post">
	<input type="hidden" name="action" value="contact_form">
	<input type="hidden" name="page-name" value="<?php the_title(); ?>">
	<input type="hidden" name="home-url" value="<?php echo home_url('/');?>">
	<?php wp_nonce_field( "contact_form", "contact_form" ); ?>
	<div class="form-services-wrapper">
		<h3 class="form-part-title item-title"><?php echo esc_html( pll__( 'Оберіть послугу' ) ); ?></h3>
		<div class="services-list">
			<div class="item">
				<label class="ch-button <?php foreach ($args['active_service'] as $service){if ($service == 'meta-ads'){echo 'active-ch';}}?>">
					<p class="label-text"><?php echo esc_html( pll__( 'Таргетована реклама в Meta ads' ) ); ?></p>

					<input type="checkbox"
						<?php foreach( $args['active_service'] as $service ):?>
							<?php if($service == 'meta-ads'):?>
								checked
							<?php endif;?>
						<?php endforeach;?>
						     name="form-service[]"
						     class="btn-check" autocomplete="off" value="meta-ads">
				</label>
			</div>
      <div class="item">
        <label class="ch-button <?php foreach ($args['active_service'] as $service){if ($service == 'smm'){echo 'active-ch';}}?>" >
          <p class="label-text"><?php echo esc_html( pll__( 'SMM-просування' ) ); ?></p>

          <input type="checkbox"
						<?php foreach( $args['active_service'] as $service ):?>
							<?php if($service == 'smm'):?>
                checked
							<?php endif;?>
						<?php endforeach;?>
                 name="form-service[]"
                 class="btn-check" autocomplete="off" value="smm">
        </label>
      </div>
			<div class="item">
				<label class="ch-button <?php foreach ($args['active_service'] as $service){if ($service == 'google-ads'){echo 'active-ch';}}?>">
					<p class="label-text"><?php echo esc_html( pll__( 'Таргетована реклама в Google ads' ) ); ?></p>

					<input type="checkbox"
						<?php foreach( $args['active_service'] as $service ):?>
							<?php if($service == 'google-ads'):?>
								checked
							<?php endif;?>
						<?php endforeach;?>
						     name="form-service[]"
						     class="btn-check" autocomplete="off" value="google-ads">
				</label>
			</div>
      <div class="item">
        <label class="ch-button <?php foreach ($args['active_service'] as $service){if ($service == 'site-dev'){echo 'active-ch';}}?>" >
          <p class="label-text"><?php echo esc_html( pll__( 'Розробка сайтів' ) ); ?></p>

          <input type="checkbox"
						<?php foreach( $args['active_service'] as $service ):?>
							<?php if($service == 'site-dev'):?>
                checked
							<?php endif;?>
						<?php endforeach;?>
                 name="form-service[]"
                 class="btn-check" autocomplete="off" value="site-dev">
        </label>
      </div>
			<div class="item">
				<label class="ch-button <?php foreach ($args['active_service'] as $service){if ($service == 'tikTok-ads'){echo 'active-ch';}}?>" >
					<p class="label-text"><?php echo esc_html( pll__( 'Таргетована реклама в TikTok ads' ) ); ?></p>

					<input type="checkbox"
						<?php foreach( $args['active_service'] as $service ):?>
							<?php if($service == 'tikTok-ads'):?>
								checked
							<?php endif;?>
						<?php endforeach;?>
						     name="form-service[]"
						     class="btn-check" autocomplete="off" value="tikTok-ads">
				</label>
			</div>

		</div>
	</div>
	<div class="form-body-wrapper">
		<h3 class="form-part-title item-title"><?php echo esc_html( pll__( 'Заповніть форму' ) ); ?></h3>
    <div class="field-list">
      <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="<?php echo esc_html( pll__( 'Імʼя' ) ); ?>" required autocomplete="off" >
        <div class="invalid-feedback"><?php echo esc_html( pll__( 'Заповніть, будь ласка, поле' ) ); ?></div>
      </div>
      <div class="form-group phone-group">
        <input type="tel" name="phone" class="form-control" placeholder="+38 (___) ___ - __ - __ " required autocomplete="off">
        <div class="invalid-feedback"><?php echo esc_html( pll__( 'Заповніть, будь ласка, поле' ) ); ?></div>
      </div>
      <div class="form-group textarea-group">
        <textarea name="mess" class="form-control" placeholder="<?php echo esc_html( pll__( 'Про проєкт' ) ); ?>" autocomplete="off"></textarea>
      </div>
      <div class="form-group form-check">
        <label class="form-check-label">
          <input type="checkbox"
                 checked
                 name="chboxfild"
                 class="form-check-input"
                 value="">
          <p class="checkbox__text">
            <a href="" target="_blank">
					    <?php echo esc_html( pll__( 'Приймаю умови угоди користувача та політики конфіденційності' ) ); ?>
            </a>
          </p>

        </label>
      </div>
      <div class="buttons-wrapper">
        <button type="submit" class="button btn-right-angle btn-color-white" >
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M10.7636 2L7.22577 5.4914L11.2553 9.46798L3 9.39053V14.315L11.3774 14.4612L7.35423 18.4315L10.9702 22L21 12.1019L10.7636 2Z" fill="#0F0F0F"/>
          </svg>
          <span><?php echo esc_html( pll__( 'Відправити' ) ); ?></span>
        </button>
        <a href="" class="go-messenger">
          <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
            <g clip-path="url(#clip0_404_708)">
              <path d="M26 52C40.3594 52 52 40.3594 52 26C52 11.6406 40.3594 0 26 0C11.6406 0 0 11.6406 0 26C0 40.3594 11.6406 52 26 52Z" fill="url(#paint0_linear_404_708)"/>
              <path d="M38.2374 15.5043C38.0835 15.5488 37.9398 15.6172 37.7927 15.6754L17.3416 24.0775C15.8751 24.675 14.4098 25.2897 12.9456 25.9214C12.8784 25.9519 12.8182 25.9959 12.7688 26.0506C12.7193 26.1053 12.6817 26.1697 12.6582 26.2396C12.6582 26.308 12.819 26.4449 12.9285 26.5167C13.0687 26.5919 13.2153 26.6548 13.3664 26.7049C15.8056 27.6901 18.2414 28.6856 20.684 29.6538L20.7729 29.6949L21.3511 36.0101C21.3576 36.0985 21.3821 36.1846 21.4229 36.2633C21.4523 36.3239 21.495 36.3772 21.5478 36.4191C21.6006 36.461 21.6622 36.4904 21.7279 36.5052C21.7937 36.52 21.8619 36.5198 21.9276 36.5045C21.9932 36.4893 22.0546 36.4595 22.1072 36.4172C23.4756 35.2712 24.844 34.1217 26.2124 32.9449C26.3268 32.8242 26.4812 32.7493 26.6468 32.7342C26.8124 32.7191 26.9778 32.7648 27.1121 32.8628C29.0314 33.8891 30.9643 34.9154 32.8937 35.9417C34.0364 36.5472 34.0432 36.5438 34.3271 35.278L37.7961 19.6678C38.08 18.3985 38.3571 17.1259 38.6343 15.8738C38.6821 15.5625 38.5145 15.4188 38.2374 15.5043ZM33.7045 20.4409C30.621 23.8346 27.5432 27.2283 24.4711 30.622C24.2981 30.8157 24.1488 31.0293 24.0264 31.2583C23.4379 32.3735 22.8666 33.4922 22.285 34.6109L21.8437 29.7804C21.8798 29.6989 21.9336 29.6265 22.0011 29.5683C26.2158 26.0925 30.4351 22.6258 34.659 19.1683C34.6898 19.1443 34.7308 19.1272 34.7685 19.1033L34.8369 19.1614C34.4651 19.5902 34.0877 20.0167 33.7045 20.4409Z" fill="white"/>
            </g>
            <defs>
              <linearGradient id="paint0_linear_404_708" x1="26" y1="0" x2="26" y2="52" gradientUnits="userSpaceOnUse">
                <stop stop-color="#09C4F9"/>
                <stop offset="1" stop-color="#0163EC"/>
              </linearGradient>
              <clipPath id="clip0_404_708">
                <rect width="52" height="52" fill="white"/>
              </clipPath>
            </defs>
          </svg>
          <span><?php echo esc_html( pll__( 'або напишіть нам в Telegram' ) ); ?></span>
        </a>
      </div>
    </div>



	</div>

</form>
