<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package push
 */

?>
</main>
	<footer class="site-footer indent-bottom-small">
		<div class="container">
      <div class="row">
        <div class="content col-12 indent-top-small indent-bottom-small">
          <div class="footer-info">
            <?php
              $footerLogo = carbon_get_theme_option('push_footer_logo');
              if( !empty($footerLogo) ):?>
                <div class="footer-logo">
                  <img class="svg-pic" src="<?php echo $footerLogo;?>" alt="<?php echo get_bloginfo('name');?>">
                </div>
            <?php endif;?>
            <div>
	            <?php
		            wp_nav_menu(
			            array(
				            'theme_location' => 'menu-2',
				            'menu_id'        => 'privacy-policy-menu',
				            'menu_class'  => 'privacy-policy-menu',
				            'container' => false
			            )
		            );
	            ?>
              <p class="copy">© <?php echo date('Y');?> <?php echo get_bloginfo('name');?></p>
            </div>
          </div>
          <nav class="footer-nav">
            <div class="footer-menu-wrapper">
              <h3 class="footer-menu-title"><?php echo esc_html( pll__( 'Компанія' ) ); ?></h3>
	            <?php
		            wp_nav_menu(
			            array(
				            'theme_location' => 'menu-3',
				            'menu_id'        => 'company-menu',
				            'menu_class'  => 'company-menu',
				            'container' => false
			            )
		            );
	            ?>
            </div>
            <div class="footer-menu-wrapper">
              <h3 class="footer-menu-title"><?php echo esc_html( pll__( 'Послуги' ) ); ?></h3>
		          <?php
			          wp_nav_menu(
				          array(
					          'theme_location' => 'menu-4',
					          'menu_id'        => 'services-menu',
					          'menu_class'  => 'services-menu',
					          'container' => false
				          )
			          );
		          ?>
            </div>
          </nav>
          <div class="footer-contacts">
            <?php
              $sitePhoneList = carbon_get_theme_option('push_contact_phone_list');
              $siteEmailList = carbon_get_theme_option('push_contact_email_list');
              if( !empty($sitePhoneList) || !empty($siteEmailList) ):?>

                <div class="contacts">
                  <h3 class="footer-menu-title"><?php echo esc_html( pll__( 'Контакти' ) ); ?></h3>
	                <?php foreach( $sitePhoneList as $phone ):
		                $phoneToCall =  preg_replace( '/[^0-9]/', '', $phone['phone'] );
                    ?>
		                <?php if( str_contains( strval($phone['phone']), '+') ):?>
                      <a href="tel:+<?php echo $phoneToCall;?>" rel="nofollow" target="_blank" class="contact-item">
                        <?php echo $phone['phone'];?>
                      </a>
                    <?php else :?>
                      <a href="tel:<?php echo $phoneToCall;?>" rel="nofollow" target="_blank" class="contact-item">
                        <?php echo $phone['phone'];?>
                      </a>
                    <?php endif;?>
	                <?php endforeach;?>
	                <?php foreach( $siteEmailList as $email ):?>
                    <a href="mailto:<?php echo antispambot($email['email'], true);?>" rel="nofollow" target="_blank" class="contact-item">
	                    <?php echo antispambot($email['email'], false);?>
                    </a>
	                <?php endforeach;?>
                </div>

            <?php endif;?>

            <?php
              $socialList = carbon_get_theme_option('push_contact_social_list');
              if( !empty($socialList) ):?>
                <div class="social">
                  <h3 class="footer-menu-title"><?php echo esc_html( pll__( 'Слідкуйте за нами' ) ); ?></h3>
                  <?php foreach( $socialList as $social_network ):?>
                    <a href="<?php echo $social_network['social_link'];?>" class="social-item">
                      <span class="icon">
                        <img class="svg-pic" src="<?php echo $social_network['social_icon'];?>" alt="<?php echo $social_network['social_name'];?>">
                        <span><?php echo $social_network['social_name'];?></span>
                      </span>
                    </a>
                  <?php endforeach;?>
                </div>
            <?php endif;?>

          </div>
        </div>
      </div>
    </div>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
