<?php
/**
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

  $pushInstagramUserId = carbon_get_theme_option('push_instagram_user_id');
	$pushInstagramToken = carbon_get_theme_option('push_instagram_token');

	function yuna_if_build_api_url( $ig_user_id, $token, $limit ) {
		$args = array(
			'fields' => 'id,caption,media_type,media_url,thumbnail_url,permalink,timestamp,children{media_type,media_url}',
			'limit'  => $limit,
			'access_token' => $token,
		);
		return add_query_arg( $args, "https://graph.facebook.com/v22.0/{$ig_user_id}/media" );
	}

	function yuna_if_fetch_media( $ig_user_id, $token, $limit ) {
		$limit = max( 1, min( 50, intval( $limit ) ) );
		$t_key = 'yuna_if_' . md5( $ig_user_id . '|' . $limit . '|' . substr( $token, 0, 10 ) );

		if ( false !== ( $cached = get_transient( $t_key ) ) ) {
			return $cached;
		}

		$url = yuna_if_build_api_url( $ig_user_id, $token, $limit );
		$res = wp_remote_get( $url, array( 'timeout' => 15 ) );

		if ( is_wp_error( $res ) ) {
			return array( 'error' => $res->get_error_message() );
		}

		$code = wp_remote_retrieve_response_code( $res );
		$body = json_decode( wp_remote_retrieve_body( $res ), true );

		if ( $code !== 200 ) {
			$msg = isset( $body['error']['message'] ) ? $body['error']['message'] : 'API error';
			return array( 'error' => $msg );
		}

		$items = isset( $body['data'] ) ? $body['data'] : array();
		set_transient( $t_key, $items, 30 * MINUTE_IN_SECONDS );
		return $items;
	}
?>

<?php if( !empty($attributes['blockTitle']) && !empty($pushInstagramUserId) && !empty($pushInstagramToken) ):?>
	<?php
		$blockAttr = get_block_wrapper_attributes();

		if ( !empty( $attributes['topIndent']) || !empty( $attributes['bottomIndent']) ){
			$indent = $attributes['topIndent'].' '.$attributes['bottomIndent'];
			$blockAttr = get_block_wrapper_attributes(["class" => $indent]);
		}

	// Якщо не налаштовано — покажемо дружнє повідомлення тільки в адмінці
	if ( empty( $pushInstagramUserId ) || empty( $pushInstagramToken ) ) {
		ob_start(); ?>
    <section <?php echo $blockAttr; ?>>
			<?php if ( is_admin() ) : ?>
        <div class="notice notice-warning" style="padding:12px;">
          <p><strong>Instagram Feed:</strong> вкажіть <code>IG User ID</code> і <code>Access Token</code> на сторінці опцій.</p>
        </div>
			<?php endif; ?>
    </section>
		<?php
		return ob_get_clean();
	}

	$items = yuna_if_fetch_media( $pushInstagramUserId, $pushInstagramToken, $attributes['limit'] );

	// Якщо помилка API — покажемо її в адмінці, на фронті мовчки сховаємо блок
	if ( isset( $items['error'] ) ) {
		if ( is_admin() ) {
			ob_start(); ?>
      <section <?php echo $blockAttr; ?>>
        <div class="notice notice-error" style="padding:12px;">
          <p><strong>Instagram API:</strong> <?php echo esc_html( $items['error'] ); ?></p>
        </div>
      </section>
			<?php return ob_get_clean();
		}
		return '';
	}

	if ( empty( $items ) ) {
		return is_admin()
			? '<section ' . $blockAttr . '><p style="opacity:.7">Немає постів для відображення.</p></section>'
			: '';
	}

	ob_start();

	?>

	<section <?php echo $blockAttr; ?>
			<?php if( !empty($attributes['anchorId']) ):?>
				id="<?php echo $attributes['anchorId'];?>"
			<?php endif;?>
	>
		<div class="container">
			<div class="row">
        <h2 class="block-title col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
          <?php echo $attributes['blockTitle'];?>
        </h2>
			</div>
      <div class="row">
        <ul class="items-list instagram-posts-wrapper col-12" data-aos="fade-up" data-aos-duration="300" data-aos-easing="ease-in-out-back">
	        <?php
		        $shown = 0;
		        foreach ( $items as $m ) {
			        if ( $shown >= $attributes['limit'] ) break;
			        $type = isset( $m['media_type'] ) ? $m['media_type'] : '';
			        $img  = '';

			        if ( $type === 'VIDEO' ) {
				        $img = $m['thumbnail_url'] ?? ($m['media_url'] ?? '');
			        } elseif ( $type === 'CAROUSEL_ALBUM' ) {
				        // Якщо є діти — беремо перше зображення
				        if ( ! empty( $m['children']['data'][0]['media_url'] ) ) {
					        $img = $m['children']['data'][0]['media_url'];
				        } else {
					        $img = $m['media_url'] ?? '';
				        }
			        } else {
				        $img = $m['media_url'] ?? '';
			        }

			        if ( ! $img ) { continue; }

			        $link = $m['permalink'] ?? '#';
			        $alt  = isset( $m['caption'] ) ? wp_strip_all_tags( $m['caption'] ) : '';

			        ?>
              <li class="item">
                <a href="<?php echo esc_url( $link ); ?>" target="_blank" rel="noopener nofollow">
                  <img
                      src="<?php echo esc_url( $img ); ?>"
                      alt="<?php echo esc_attr( $alt ); ?>"
                      loading="lazy"
                  />
                </a>
              </li>
			        <?php
			        $shown++;
		        }
	        ?>
        </ul>
      </div>
		</div>
	</section>

<?php return ob_get_clean(); endif;?>


