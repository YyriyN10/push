<?php

	if ( ! defined( 'ABSPATH' ) ) {
		exit;
	}

	use Carbon_Fields\Container;
	use Carbon_Fields\Field;

	add_action( 'carbon_fields_register_fields', 'push_options' );

	function push_options() {
		Container::make( 'theme_options', __('Опції сайту'))
		         ->set_icon( 'dashicons-screenoptions' )

							->add_tab( 'Шапка сайту', array(
								Field::make_image('push_logo', 'Логотип')
								     ->set_value_type('url'),
							))

							->add_tab( 'Контакти', array(
								Field::make_complex('push_contact_email_list', 'Єлектронні адреси сайту')
								     ->add_fields(array(
									     Field::make_text('email', 'Email')
									          ->set_attribute('type', 'email')
								     )),
								Field::make_complex('push_contact_phone_list', 'Контактні телефони сайту')
								     ->set_help_text('Перший в переліку телефон буде вважатись оновним')
								     ->add_fields(array(
									     Field::make_text('phone', 'Телефон')
								     )),

								Field::make_complex('push_contact_social_list', 'Соціальні мережі')
								     ->add_fields(array(
									     Field::make_text('social_name', 'Назва')
									      ->set_width(33)
									      ->set_required(true),
									     Field::make_image('social_icon', 'Іконка')
										        ->set_help_text('Іконка має мати формат svg')
										        ->set_value_type('url')
									          ->set_width(33)
									          ->set_required(true),
									     Field::make_text('social_link', 'Посилання')
										        ->set_attribute('type', 'url')
									          ->set_width(33)
									          ->set_required(true),
								     )),
							))

							->add_tab( 'Інтеграція Instagram', array(
								Field::make_text('push_instagram_user_id', 'ID користувача в Intagram'),
								Field::make_text('push_instagram_token', 'Intagram token'),
							))

							->add_tab('Підвал сайту', array(
								Field::make_image('push_footer_logo', 'Логотип')
								     ->set_width(20)
								     ->set_value_type('url'),


								/*Field::make_textarea('yuna_clining_footer_text'.yuna_lang_prefix(), __('Текст футеру', 'yuna_clining'))
								     ->set_rows(2),
								Field::make_text('yuna_clining_contact_heading'.yuna_lang_prefix(), __('Заголовок секції з контактами', 'yuna_clining'))
								     ->set_width(50),
								Field::make_text('yuna_clining_schedule_heading'.yuna_lang_prefix(), __('Заголовок секції з розкладом', 'yuna_clining'))
								     ->set_width(50),
								Field::make_textarea('yuna_clining_footer_schedule_text'.yuna_lang_prefix(), __('Текст у секції з розкладом', 'yuna_clining'))
								     ->set_rows(2),
								Field::make_text('yuna_clining_footer_copy_text'.yuna_lang_prefix(), __('Текст копірайту', 'yuna_clining'))*/
							));
		         /*->add_tab(__('Кольори сайту', 'yuna_clining'), array(
		         	Field::make_color('yuna_clining_accent_color', __('Акцентний колір', 'yuna_clining'))
		                ->set_width(50)
		                ->set_help_text(__('Використовується для виділення елементів, на приклад кнопки', 'yuna_clining')),
			        Field::make_color('yuna_clining_black_color', __('Чорний колір', 'yuna_clining'))
				        ->set_width(50)
				        ->set_help_text(__('Використовується для виділення заголовків та темного фону блоків', 'yuna_clining')),
			        Field::make_color('yuna_clining_gray_color', __('Сірий колір', 'yuna_clining'))
				        ->set_width(50)
				        ->set_help_text(__('Використовується для основного кольору текту на білому фоні', 'yuna_clining')),
			        Field::make_color('yuna_clining_white_color', __('Білий колір колір', 'yuna_clining'))
				        ->set_width(50)
				        ->set_help_text(__('Використовується для основного кольору сайту та тексту на темному фоні', 'yuna_clining')),
		         ))

		         ->add_tab(__('Шапка сайту', 'yuna_clining'), array(
		         	Field::make_image('yuna_clining_logo', __('Логотип', 'yuna_clining'))
			         ->set_value_type('url'),
			        Field::make_text('yuna_clining_header_call'.yuna_lang_prefix(), __('Заклик зателефонувати', 'yuna_clining'))
		         ))

				->add_tab(__('Підвал сайту', 'yuna_clining'), array(
					Field::make_textarea('yuna_clining_footer_text'.yuna_lang_prefix(), __('Текст футеру', 'yuna_clining'))
						->set_rows(2),
					Field::make_text('yuna_clining_contact_heading'.yuna_lang_prefix(), __('Заголовок секції з контактами', 'yuna_clining'))
						->set_width(50),
					Field::make_text('yuna_clining_schedule_heading'.yuna_lang_prefix(), __('Заголовок секції з розкладом', 'yuna_clining'))
						->set_width(50),
					Field::make_textarea('yuna_clining_footer_schedule_text'.yuna_lang_prefix(), __('Текст у секції з розкладом', 'yuna_clining'))
					     ->set_rows(2),
					Field::make_text('yuna_clining_footer_copy_text'.yuna_lang_prefix(), __('Текст копірайту', 'yuna_clining'))
				))

		         ->add_tab( __( 'Контакти', 'yuna_clining'), array(
			         Field::make_complex('yuna_clining_contact_email_list', __('Єлектронні адреси сайту', 'yuna_clining'))
		                ->add_fields(array(
		                	Field::make_text('email', 'Email')
			                    ->set_attribute('type', 'email')
		                )),
			         Field::make_complex('yuna_clining_contact_phone_list', __('Контактні телефони сайту', 'yuna_clining'))
				         ->set_help_text(__('Перший в переліку телефон буде вважатись оновним', 'yuna_clining'))
			              ->add_fields(array(
				              Field::make_text('phone', __('Телефон', 'yuna_clining'))
			              )),
			         Field::make_text('yuna_clining_office_address'.yuna_lang_prefix(), __('Адреса офісу', 'yuna_clining')),
			         Field::make_text('yuna_clining_weekday_schedule'.yuna_lang_prefix(), __('Основний розклад роботи', 'yuna_clining'))
		                ->set_help_text(__('Приклад. ПН - СБ: 9:00 - 20:00', 'yuna_clining')),
			         Field::make_text('yuna_clining_weekend_schedule'.yuna_lang_prefix(), __('Додатковий розклад роботи', 'yuna_clining'))
				         ->set_help_text(__('Приклад. СБ - НД: 10:00 - 17:00', 'yuna_clining')),
			         Field::make_complex('yuna_clining_social_networks_list', __('Перелік соціальних мереж', 'yuna_clining'))
				         ->set_max(5)
						->add_fields(array(
							Field::make_select('social_network', __('Оберіть соціальну мережу', 'yuna_clining'))
								->set_width(50)
								->set_required(true)
								->add_options( array(
									'facebook' => 'Facebook',
									'instagram' => 'Instagram',
									'youtube' => 'Youtube',
									'twitter' => 'Twitter',
									'linkedin' => 'Linkedin'
								) ),
							Field::make_text('social_link', __('Посилання', 'yuna_clining'))
								->set_width(50)
								->set_required(true)
								->set_attribute('type', 'url')
						)),
			         Field::make_complex('yuna_clining_messengers_list', __('Перелік месенджерів', 'yuna_clining'))
			              ->add_fields(array(
				              Field::make_select('messengers_type', __('Оберіть месенджер', 'yuna_clining'))
				                   ->set_width(50)
				                   ->set_required(true)
				                   ->add_options( array(
					                   'telegram' => 'Telegram',
					                   'viber' => 'Viber',
					                   'whatsapp' => 'WhatsApp',
				                   ) ),
				              Field::make_text('messengers_link', __('Посилання', 'yuna_clining'))
				                   ->set_width(50)
				                   ->set_required(true)
				                   ->set_attribute('type', 'url')
			              )),
			         Field::make_text('contact_telegram', 'Телеграм чат'),
		         ) )

		         ->add_tab( __( 'Контактна форма' ), array(
			         Field::make_text('contact_form_title'.yuna_lang_prefix(), 'Заголовок контактної форми'),
			         Field::make_text('contact_form_subtitle'.yuna_lang_prefix(), 'Підзаголовок контактної форми'),
		         ) )

		         ->add_tab( __( 'Вікно подяки за заявку' ), array(
			         Field::make_text('thank_you_title'.yuna_lang_prefix(), 'Заголовок повідомлення про подяку'),
			         Field::make_text('thank_you_text'.yuna_lang_prefix(), 'Текст повідомлення про подяку'),
		         ) )

		         ->add_tab('Сторінка 404', array(
			         Field::make_image('page_404_bg', 'Фонове зображення сторінки')
			              ->set_value_type('url'),
			         Field::make_text('page_404_title'.yuna_lang_prefix(), 'Заголовок'),
			         Field::make_text('page_404_text'.yuna_lang_prefix(), 'Текст')
		         ))

		         ->add_tab( __( 'Інтеграція форма' ), array(
			         Field::make_separator('integration_mail_separator', 'Інтенрація з поштою'),
			         Field::make_text('site_email', 'Пошта для інтеграції')
			              ->set_attribute('type', 'email'),
			         Field::make_separator('integration_telegram_separator', 'Інтеграція з Телеграм'),
			         Field::make_text('telegram_bot_api', 'API ключ телеграм боту'),
			         Field::make_text('telegram_chat_id', 'ID чату в телеграм з ботом'),
		         ) );*/

	}

	/*add_action( 'carbon_fields_register_fields', 'yuna_portfolio' );

	function yuna_portfolio() {
		Container::make( 'theme_options', __('Портфоліо'))
		         ->set_icon( 'dashicons-portfolio' )
		         ->add_fields(array(
			         Field::make_complex('portfolio_list', 'Перелік робіт')
			              ->add_fields(array(
				              Field::make_text('name', 'Назва проекту'),
				              Field::make_text('link', 'Посилання на проект')
				                   ->set_attribute('type', 'link'),
				              Field::make_image('screenshot_desktop', 'Скріншот для десктопу')
				                   ->set_value_type('url'),
				              Field::make_image('screenshot_mob', 'Скріншот для мобільного')
				                   ->set_value_type('url')
			              ))
		         ));

	}*/