<?php

	if ( ! defined( 'ABSPATH' ) ) {
				exit;
			}

	function push_scripts() {
		wp_enqueue_style( 'push-style', get_stylesheet_uri(), array(), _S_VERSION );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '5.3.3' );
		wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/aos.css', array(), _S_VERSION );
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.css', array(), '3.2.10' );
		wp_enqueue_style( 'push-main-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '5.3.3', true );
		wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/aos.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'youtube', get_template_directory_uri() . '/assets/js/youtube.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'lazy', get_template_directory_uri() . '/assets/js/jquery.lazy.js', array(), '1.7.10', true );
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(), '1.6.0', true );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array(), '3.2.10', true );
		wp_enqueue_script( 'push-main-js', get_template_directory_uri() . '/assets/js/main.min.js', array('jquery'), _S_VERSION, true );
	}
	add_action( 'wp_enqueue_scripts', 'push_scripts' );

	function add_async_attribute($tag, $handle) {

		$scripts_to_async = array('bootstrap', 'aos', 'youtube', 'lazy', 'slick', 'fancybox', 'push-main-js' );

		foreach($scripts_to_async as $async_script) {
			if ($async_script === $handle) {
				return str_replace(' src', ' defer src', $tag);
			}
		}
		return $tag;

	}

	add_filter('script_loader_tag', 'add_async_attribute', 10, 2);