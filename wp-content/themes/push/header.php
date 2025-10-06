<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package push
 */

	if ( defined( 'POLYLANG_VERSION' ) ) {

		$langArgs = array(
			'show_names' => 1,
			'display_names_as' => 'name',
			'show_flags' => 0,
			'hide_current' => 0
		);
	}

	$siteLogo = carbon_get_theme_option('push_logo');

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Rubik:ital,wght@0,300..900;1,300..900&family=Unbounded:wght@200..900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>
<div class="wrapper">
	<header class="site-header">
    <div class="container">
      <div class="row">
        <div class="content col-12">
		      <?php if( is_front_page() ):?>
			      <?php if( !empty($siteLogo) ):?>
              <div class="logo">
                <img src="<?php echo $siteLogo;?>" alt="<?php echo get_bloginfo('name');?>" class="svg-pic">
              </div>
			      <?php endif;?>
		      <?php else:?>
			      <?php if( !empty($siteLogo) ):?>
              <a href="<?php echo get_home_url('/');?>" class="logo">
                <img src="<?php echo $siteLogo;?>" alt="<?php echo get_bloginfo('name');?>" class="svg-pic">
              </a>
			      <?php endif;?>
		      <?php endif;?>
          <div class="menu-btn" id="menu-btn">
            <span></span><span></span><span></span>
          </div>
          <nav id="header-navigation" class="header-navigation">

			      <?php
				      wp_nav_menu(
					      array(
						      'theme_location' => 'menu-1',
						      'menu_id'        => 'primary-menu',
						      'menu_class'  => 'main-menu',
						      'container' => false
					      )
				      );
			      ?>
          </nav>

		      <?php
			      $phoneList = carbon_get_theme_option('push_contact_phone_list');
			      if( !empty($phoneList) ):?>
				      <?php foreach( $phoneList as $index=>$phone ):?>
					      <?php if( $index === 0 ):
						      $phoneToCall =  preg_replace( '/[^0-9]/', '', $phone['phone'] );
						      ?>
						      <?php if( str_contains( strval($phone['phone']), '+') ):?>
                  <a href="tel:+<?php echo $phoneToCall;?>" class="phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                      <g clip-path="url(#clip0_181_502)">
                        <path d="M19.5536 19.1365L19.0531 18.3007C18.1529 16.8165 16.9106 15.1131 15.2811 15.1131C14.9792 15.1131 14.6802 15.1738 14.3842 15.2968L13.5096 15.6719C13.4297 15.705 13.3521 15.7426 13.27 15.7826C13.0461 15.8915 12.7923 16.0148 12.5312 16.0148C11.8871 16.0148 11.1409 15.1766 10.4303 13.6548C9.73284 12.1611 9.77733 11.3781 9.93743 10.9841C10.1141 10.5494 10.5249 10.3635 10.9662 10.1965C11.0276 10.1732 11.083 10.1521 11.1369 10.1299L12.0226 9.75701C14.3299 8.79212 13.4715 5.42017 13.1901 4.31467L12.9514 3.36417C12.7474 2.5808 12.2064 0.5 10.4119 0.5C10.0797 0.5 9.72527 0.577395 9.35886 0.730129C9.11845 0.825601 5.81004 2.17607 4.61144 4.54858C3.17893 7.37259 3.4438 11.1595 5.39795 15.8019C7.33749 20.45 9.85256 23.2931 12.8734 24.2519C13.3915 24.4165 13.9771 24.4999 14.614 24.4999H14.6144C16.6991 24.4999 18.7569 23.6129 18.9239 23.5393C19.6427 23.2348 20.1073 22.7721 20.3047 22.1639C20.6394 21.1324 20.0779 20.0023 19.5536 19.1365ZM18.7602 21.6627C18.7143 21.804 18.5547 21.9331 18.2863 22.0461C18.2818 22.048 18.2764 22.0503 18.2719 22.0524C18.2533 22.0606 16.3906 22.8764 14.6139 22.8763C14.1439 22.8763 13.7236 22.8185 13.3647 22.7044C10.8197 21.8966 8.64357 19.364 6.89531 15.1744C5.13405 10.9899 4.85261 7.66204 6.05998 5.28194C6.99749 3.4263 9.93256 2.24913 9.96135 2.23788C9.96719 2.23549 9.97293 2.23322 9.97867 2.23084C10.1458 2.1607 10.2956 2.12368 10.4119 2.12368C10.7696 2.12368 11.0952 2.67854 11.3782 3.76608L11.6158 4.71258C12.1284 6.72593 12.0504 7.98526 11.3941 8.25977L10.5126 8.63105C10.4776 8.64555 10.4365 8.66082 10.3913 8.67803C9.90441 8.86237 8.89124 9.24577 8.43304 10.3728C8.01727 11.3955 8.18938 12.6938 8.95867 14.342C9.9948 16.5602 11.1633 17.6386 12.531 17.6386C13.1657 17.6386 13.6752 17.3909 13.9796 17.243C14.0357 17.2158 14.0858 17.1908 14.1397 17.1685L15.0156 16.7928C15.106 16.7552 15.1928 16.7369 15.2809 16.7369C15.7026 16.7369 16.4585 17.1544 17.6624 19.1389L18.1627 19.9742C18.7791 20.992 18.8278 21.4542 18.7602 21.6627Z" fill="#1D1D1B"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_181_502">
                          <rect width="24" height="24" fill="white" transform="translate(0.0556641 0.5)"/>
                        </clipPath>
                      </defs>
                    </svg>
                    <span><?php echo $phone['phone'];?></span>
                  </a>
					      <?php else :?>
                  <a href="tel:<?php echo $phoneToCall;?>" class="phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                      <g clip-path="url(#clip0_181_502)">
                        <path d="M19.5536 19.1365L19.0531 18.3007C18.1529 16.8165 16.9106 15.1131 15.2811 15.1131C14.9792 15.1131 14.6802 15.1738 14.3842 15.2968L13.5096 15.6719C13.4297 15.705 13.3521 15.7426 13.27 15.7826C13.0461 15.8915 12.7923 16.0148 12.5312 16.0148C11.8871 16.0148 11.1409 15.1766 10.4303 13.6548C9.73284 12.1611 9.77733 11.3781 9.93743 10.9841C10.1141 10.5494 10.5249 10.3635 10.9662 10.1965C11.0276 10.1732 11.083 10.1521 11.1369 10.1299L12.0226 9.75701C14.3299 8.79212 13.4715 5.42017 13.1901 4.31467L12.9514 3.36417C12.7474 2.5808 12.2064 0.5 10.4119 0.5C10.0797 0.5 9.72527 0.577395 9.35886 0.730129C9.11845 0.825601 5.81004 2.17607 4.61144 4.54858C3.17893 7.37259 3.4438 11.1595 5.39795 15.8019C7.33749 20.45 9.85256 23.2931 12.8734 24.2519C13.3915 24.4165 13.9771 24.4999 14.614 24.4999H14.6144C16.6991 24.4999 18.7569 23.6129 18.9239 23.5393C19.6427 23.2348 20.1073 22.7721 20.3047 22.1639C20.6394 21.1324 20.0779 20.0023 19.5536 19.1365ZM18.7602 21.6627C18.7143 21.804 18.5547 21.9331 18.2863 22.0461C18.2818 22.048 18.2764 22.0503 18.2719 22.0524C18.2533 22.0606 16.3906 22.8764 14.6139 22.8763C14.1439 22.8763 13.7236 22.8185 13.3647 22.7044C10.8197 21.8966 8.64357 19.364 6.89531 15.1744C5.13405 10.9899 4.85261 7.66204 6.05998 5.28194C6.99749 3.4263 9.93256 2.24913 9.96135 2.23788C9.96719 2.23549 9.97293 2.23322 9.97867 2.23084C10.1458 2.1607 10.2956 2.12368 10.4119 2.12368C10.7696 2.12368 11.0952 2.67854 11.3782 3.76608L11.6158 4.71258C12.1284 6.72593 12.0504 7.98526 11.3941 8.25977L10.5126 8.63105C10.4776 8.64555 10.4365 8.66082 10.3913 8.67803C9.90441 8.86237 8.89124 9.24577 8.43304 10.3728C8.01727 11.3955 8.18938 12.6938 8.95867 14.342C9.9948 16.5602 11.1633 17.6386 12.531 17.6386C13.1657 17.6386 13.6752 17.3909 13.9796 17.243C14.0357 17.2158 14.0858 17.1908 14.1397 17.1685L15.0156 16.7928C15.106 16.7552 15.1928 16.7369 15.2809 16.7369C15.7026 16.7369 16.4585 17.1544 17.6624 19.1389L18.1627 19.9742C18.7791 20.992 18.8278 21.4542 18.7602 21.6627Z" fill="#1D1D1B"/>
                      </g>
                      <defs>
                        <clipPath id="clip0_181_502">
                          <rect width="24" height="24" fill="white" transform="translate(0.0556641 0.5)"/>
                        </clipPath>
                      </defs>
                    </svg>
                    <span><?php echo $phone['phone'];?></span>
                  </a>
					      <?php endif;?>
					      <?php endif;?>
				      <?php endforeach;?>
			      <?php endif;?>

          <div class="button btn-color-orange btn-left-angle">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
              <path d="M10.7636 2L7.22577 5.4914L11.2553 9.46798L3 9.39053V14.315L11.3774 14.4612L7.35423 18.4315L10.9702 22L21 12.1019L10.7636 2Z" fill="#0F0F0F"/>
            </svg>
            <span><?php echo esc_html( pll__( 'ОТРИМАТИ ПРОПОЗИЦІЮ' ) ); ?></span>
          </div>
		      <?php if ( defined( 'POLYLANG_VERSION' ) ):?>

            <div class="lang-wrapper" id="lang-wrapper">
              <button class="page-lang">
                <span class="lang-name"></span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                  <path d="M7.99687 11.167C7.82668 11.1661 7.65881 11.1274 7.50545 11.0536C7.35208 10.9798 7.21707 10.8728 7.11021 10.7403L4.30354 7.34033C4.13954 7.13564 4.03633 6.88899 4.00568 6.6285C3.97504 6.36801 4.01818 6.10415 4.13021 5.86699C4.22106 5.66088 4.36932 5.48527 4.55729 5.36114C4.74525 5.23701 4.96497 5.16961 5.19021 5.16699H10.8035C11.0288 5.16961 11.2485 5.23701 11.4365 5.36114C11.6244 5.48527 11.7727 5.66088 11.8635 5.86699C11.9756 6.10415 12.0187 6.36801 11.9881 6.6285C11.9574 6.88899 11.8542 7.13564 11.6902 7.34033L8.88354 10.7403C8.77667 10.8728 8.64166 10.9798 8.4883 11.0536C8.33494 11.1274 8.16707 11.1661 7.99687 11.167Z" fill="#1D1D1B"/>
                </svg>
              </button>

              <ul class="lang-list">
					      <?php pll_the_languages( $langArgs ); ?>
              </ul>

            </div>

		      <?php endif;?>
        </div>
      </div>
    </div>
	</header>
  <main>
