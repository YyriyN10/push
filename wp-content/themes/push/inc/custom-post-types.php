<?php

	if ( ! defined( 'ABSPATH' ) ) {
				exit;
			}

	/**
	 * Register a blog post type.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/register_post_type
	 *
	 * @since push 1.0
	 */

	function blog_post_type() {

		$labels = array(
			'name'               => _x( 'Блог', 'post type general name', 'push' ),
			'singular_name'      => _x( 'Блог', 'post type singular name', 'push' ),
			'menu_name'          => _x( 'Блог', 'admin menu', 'push' ),
			'name_admin_bar'     => _x( 'Блог', 'add new on admin bar', 'push' ),
			'add_new'            => _x( 'Додати нову', 'actions', 'push' ),
			'add_new_item'       => __( 'Додати нову статтю', 'push' ),
			'new_item'           => __( 'Нова стаття', 'push' ),
			'edit_item'          => __( 'Редагувати статтю', 'push' ),
			'view_item'          => __( 'Переглянути статтю', 'push' ),
			'all_items'          => __( 'Всі статті', 'push' ),
			'search_items'       => __( 'Шукати статтю', 'push' ),
			'parent_item_colon'  => __( 'Батько статті:', 'push' ),
			'not_found'          => __( 'Статт не знайдено.', 'push' ),
			'not_found_in_trash' => __( 'У кошику статей не знайдено.', 'push' )
		);

		$args = array(
			'labels'             => $labels,
			'taxonomies'         => [],
			'description'        => __( 'Опис.', 'push' ),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'blog' ),
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => true,
			'menu_position'      => 7,
			'menu_icon'          => 'dashicons-welcome-write-blog',
			'supports'           => array( 'title', 'thumbnail', 'excerpt' )
		);

		register_post_type( 'blog', $args );
	}

	add_action( 'init', 'blog_post_type' );
