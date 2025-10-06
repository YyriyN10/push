<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'push_our_reviews' );

	function push_our_reviews(){
		Container::make( 'theme_options', 'Відгуки про нас')
		         ->set_icon( 'dashicons-testimonial' )
		         ->add_fields(array(
			         Field::make_complex('push_reviews_list'.push_lang_prefix(), 'Перелік відгуків')
			              ->add_fields(array(
			              	Field::make_select('review_type', 'Тип відгуку')
					              ->add_options( array(
						              'image' => 'Зображення',
						              'video' => 'Відео',
					              ) ),
				              Field::make_text('company', 'Назва компанії'),

				              Field::make_image('image', 'Скріншот з відгуком')
				                   ->set_required(true)
				                   ->set_value_type('url')
						              ->set_conditional_logic( array(
							              'relation' => 'AND',
							              array(
								              'field' => 'review_type',
								              'value' => 'image',
								              'compare' => '=',
							              )
						              ) ),
				              Field::make_text('name', 'Імʼя')
				                   ->set_required(true)
				                   ->set_width(30)
						              ->set_conditional_logic( array(
							              'relation' => 'AND',
							              array(
								              'field' => 'review_type',
								              'value' => 'video',
								              'compare' => '=',
							              )
						              ) ),
				              Field::make_text('position', 'Посада')
				                   ->set_required(true)
				                   ->set_width(30)
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'review_type',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('video_id', 'ID відео з youtube')
				                   ->set_required(true)
				                   ->set_width(30)
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'review_type',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),
				              Field::make_text('time', 'Тривалість відео')
				                   ->set_required(true)
				                   ->set_width(10)
				                   ->set_conditional_logic( array(
					                   'relation' => 'AND',
					                   array(
						                   'field' => 'review_type',
						                   'value' => 'video',
						                   'compare' => '=',
					                   )
				                   ) ),

			              ))
		         ));
	}
