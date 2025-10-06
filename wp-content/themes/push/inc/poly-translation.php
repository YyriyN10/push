<?php

	if ( ! defined( 'ABSPATH' ) ) {
				exit;
			}

	add_action('init', 'push_polylang_strings' );

	function push_polylang_strings(){
		if( ! function_exists( 'pll_register_string' ) ) {
			return;
		}

		/**
		 * Buttons
		 */

		pll_register_string(
			'push_btn_get_a_quote',
			'ОТРИМАТИ ПРОПОЗИЦІЮ',
			'Кнопки',
			false
		);

		/**
		 * Footer text
		 */

		pll_register_string(
			'push_footer_text_services',
			'Послуги',
			'Футер',
			false
		);

		pll_register_string(
			'push_footer_text_company',
			'Компанія',
			'Футер',
			false
		);

		pll_register_string(
			'push_footer_text_contacts',
			'Контакти',
			'Футер',
			false
		);

		pll_register_string(
			'push_footer_text_social',
			'Слідкуйте за нами',
			'Футер',
			false
		);

		/**
		 * Form text
		 */

		pll_register_string(
			'push_form_services_title',
			'Оберіть послугу',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_services_text_1',
			'Таргетована реклама в Meta ads',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_services_text_2',
			'Таргетована реклама в Google ads',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_services_text_3',
			'Таргетована реклама в TikTok ads',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_services_text_4',
			'SMM-просування',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_services_text_5',
			'Розробка сайтів',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_body_title',
			'Заповніть форму',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_placeholder_name',
			'Імʼя',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_pravici_text',
			'Приймаю умови угоди користувача та політики конфіденційності',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_placeholder_message',
			'Про проєкт',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_btn_text',
			'Відправити',
			'Форма',
			false
		);

		pll_register_string(
			'push_form_messenger_text',
			'або напишіть нам в Telegram',
			'Форма',
			false
		);


		/**
		 * Site text
		 */

		pll_register_string(
			'push_text_content_more_post',
			'Читати статтю',
			'Текстовий контент',
			false
		);







	}
