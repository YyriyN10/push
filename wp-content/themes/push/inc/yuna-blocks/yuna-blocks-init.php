<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


	/**
	 * Create Block Category
	 */

	function yuna_custom_block_category( $categories, $post ){

		$new = array(
			array(
				'slug'  => 'yuna-block-category',
				'title' => 'Push Blocks',
				'icon'  => 'admin-home',
			),
			array(
				'slug'  => 'yuna-inner-block-category',
				'title' => 'Push Inner Blocks',
				'icon'  => 'category',   // фолбек
			),
		);

		// додати свої категорії на початок списку
		return array_merge( $new, $categories );

	}

	add_filter( 'block_categories_all', 'yuna_custom_block_category', 10, 2);


/**
 * Registers the block using the metadata loaded from the `block.json` file.
 * Behind the scenes, it registers also all assets so they can be enqueued
 * through the block editor in the corresponding context.
 *
 * @see https://developer.wordpress.org/reference/functions/register_block_type/
 */
function yuna_custom_blocks_init() {
	register_block_type( __DIR__ . '/build/push-home-main-screen');
	register_block_type( __DIR__ . '/build/push-home-main-screen-inner');

	register_block_type( __DIR__ . '/build/push-numbers');
	register_block_type( __DIR__ . '/build/push-numbers-inner');

	register_block_type( __DIR__ . '/build/push-areas-of-activity');
	register_block_type( __DIR__ . '/build/push-areas-of-activity-inner');

	register_block_type( __DIR__ . '/build/push-our-services');
	register_block_type( __DIR__ . '/build/push-our-services-inner');

	register_block_type( __DIR__ . '/build/push-our-clients');

	register_block_type( __DIR__ . '/build/push-call-to-action');

	register_block_type( __DIR__ . '/build/push-why-we');

	register_block_type( __DIR__ . '/build/push-our-reviews');

	register_block_type( __DIR__ . '/build/push-our-principles');
	register_block_type( __DIR__ . '/build/push-our-principles-inner');

	register_block_type( __DIR__ . '/build/push-contact-form');

	register_block_type( __DIR__ . '/build/push-our-team');
	register_block_type( __DIR__ . '/build/push-our-team-inner');

	register_block_type( __DIR__ . '/build/push-adout-us');

	register_block_type( __DIR__ . '/build/push-last-blog-posts');

	register_block_type( __DIR__ . '/build/push-faq');
	register_block_type( __DIR__ . '/build/push-faq-inner');


	/*register_block_type( __DIR__ . '/build/yuna-main-screen');

	register_block_type( __DIR__ . '/build/yuna-tehnology' );
	register_block_type( __DIR__ . '/build/yuna-tehnology-inner' );

	register_block_type( __DIR__ . '/build/yuna-about-me' );

	register_block_type( __DIR__ . '/build/yunq-what-you-get' );
	register_block_type( __DIR__ . '/build/yuna-what-you-get-inner' );

	register_block_type( __DIR__ . '/build/yuna-themes-for-sale' );

	register_block_type( __DIR__ . '/build/yuna-how-it-work' );
	register_block_type( __DIR__ . '/build/yuna-how-it-work-inner' );

	register_block_type( __DIR__ . '/build/yuna-portfolio' );*/


	/*register_block_type( __DIR__ . '/build/our-approach' );
	register_block_type( __DIR__ . '/build/our-approach-inner' );

	register_block_type( __DIR__ . '/build/our-steps' );
	register_block_type( __DIR__ . '/build/our-steps-inner' );

	register_block_type( __DIR__ . '/build/our-services' );

	register_block_type( __DIR__ . '/build/call-banner' );

	register_block_type( __DIR__ . '/build/about-us' );

	register_block_type( __DIR__ . '/build/our-cases' );

	register_block_type( __DIR__ . '/build/yuna-step' );
	register_block_type( __DIR__ . '/build/yuna-step-inner' );*/

}
add_action( 'init', 'yuna_custom_blocks_init' );





