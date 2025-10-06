<?php

	if ( ! defined( 'ABSPATH' ) ) {
				exit;
			}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'push_our_clients' );

	function push_our_clients(){
		Container::make( 'theme_options', 'Наші клієнти')
		         ->set_icon( 'dashicons-bank' )
		         ->add_fields(array(
			         Field::make_complex('push_clients_list', 'Перелік клієнтів')
			              ->add_fields(array(
				              Field::make_image('logo', 'Скріншот для десктопу')
					                ->set_required(true)
				                   ->set_width(20)
				                   ->set_value_type('url'),
				              Field::make_text('name', 'Назва клієнту')
					              ->set_required(true)
			                    ->set_width(40),
				              Field::make_text('link', 'Посилання на ресурс клієнта')
					                ->set_width(40)
					                ->set_attribute('type', 'link'),

			              ))
		         ));
	}
