<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$clientList = carbon_get_theme_option('push_clients_list');
?>

<?php if( !empty($attributes['blockTitle']) && !empty($clientList) ):?>
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
        <h2 class="block-title text-center col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php echo $attributes['blockTitle'];?>
        </h2>
			</div>
      <div class="row">
        <div class="slider-wrapper col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <div class="slider" id="clients-slider">
	          <?php foreach( $clientList as $client ):?>
              <?php if( !empty($client['link']) ):?>
                <a href="<?php echo $client['link'];?>" rel="nofollow" target="_blank" class="slide">
                  <img src="<?php echo $client['logo'];?>" alt="<?php echo $client['name'];?>">
                </a>
              <?php else:?>
                <div class="slide" >
                  <img src="<?php echo $client['logo'];?>" alt="<?php echo $client['name'];?>">
                </div>
              <?php endif;?>
	          <?php endforeach;?>
          </div>
        </div>
      </div>
		</div>
	</section>

<?php endif;?>


