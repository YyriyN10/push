<?php

	if ( ! defined( 'ABSPATH' ) ) {
				exit;
			}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'push_form_services' );

	function push_form_services(){
		Container::make( 'post_meta', 'Послуги форми' )
				         ->where( function( $homeFields ) {
					         $homeFields->where( 'post_type', '=', 'page' );
				         } )
				         ->set_context('side')

				         ->add_fields( array(
										Field::make_multiselect('push_form_current_default_services', 'Послуги обрані за замовченням')
											->add_options( array(
												'meta-ads' => 'Таргетована реклама в Meta ads',
												'google-ads' => 'Таргетована реклама в Google ads',
												'tikTok-ads' => 'Таргетована реклама в TikTok ads',
												'smm' => 'SMM-просування',
												'site-dev' => 'Розробка сайтів'
											) )
				         ));
	}
