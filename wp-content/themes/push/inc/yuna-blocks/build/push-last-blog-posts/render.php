<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$blogArgs = array(
 		'posts_per_page' => 3,
 		'orderby' 	 => 'date',
 		'post_type'  => 'blog',
 		'post_status'    => 'publish'
 	);

 	$blogList = new WP_Query( $blogArgs );

 	$i = 1;
?>

<?php if( !empty($attributes['blockTitle']) && $blogList->have_posts() ):?>
	<?php
		$blockAttr = get_block_wrapper_attributes();

		if ( !empty( $attributes['topIndent']) || !empty( $attributes['bottomIndent']) ){
			$indent = $attributes['topIndent'].' '.$attributes['bottomIndent'];
			$blockAttr = get_block_wrapper_attributes(["class" => $indent]);
		}

	?>

	<section <?php echo $blockAttr; ?>
			<?php if( !empty($attributes['anchorId']) ):?>
				id="<?php echo $attributes['anchorId'];?>"
			<?php endif;?>
	>
		<div class="container">
			<div class="row">
        <h2 class="block-title-small text-center col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php echo $attributes['blockTitle'];?>
        </h2>
			</div>
      <div class="row post-list">
	      <?php while ( $blogList->have_posts() ) : $blogList->the_post();?>
          <div class="post-preview col-lg-4 col-sm-6 col-12" data-aos="fade-up" data-aos-delay="<?php echo 150 * $i;?>" data-aos-duration="300" data-aos-easing="ease-in-out-back">
            <a href="<?php the_permalink();?>" class="inner">
              <span class="pic-wrapper">
                <img
                   class="lazy object-fit"
                   data-src="<?php echo wp_get_attachment_image_src(get_post_thumbnail_id(), 'full')[0];?>"
                   <?php
                    $altText = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', TRUE);
                    if ( !empty( $altText ) ):?>
                        alt="<?php echo $altText;?>"
                    <?php else:?>
                        alt="<?php the_title();?>"
                    <?php endif;?>
                >
              </span>
              <span class="post-tile"><?php the_title();?></span>
              <span class="description"><?php the_excerpt();?></span>
              <span class="go-to">
                <?php echo esc_html( pll__( 'Читати статтю' ) ); ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M10.7636 2L7.22577 5.4914L11.2553 9.46798L3 9.39053L3 14.315L11.3774 14.4612L7.35423 18.4315L10.9702 22L21 12.1019L10.7636 2Z" fill="#FF5900"/>
                </svg>
              </span>
            </a>
          </div>
          <?php $i++;?>
	      <?php endwhile;?>
      </div>
		</div>
	</section>

<?php endif;?>
<?php wp_reset_postdata(); ?>


