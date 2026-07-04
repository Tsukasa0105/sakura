<?php
/**
 * 404 error template.
 */

get_header();
?>

<main>
	<section class="section">
		<div class="container">
			<div class="section-heading">
				<p class="section-label">404</p>
				<h2><?php esc_html_e( 'ページが見つかりませんでした', 'sakura' ); ?></h2>
				<p>
					<?php esc_html_e( 'お探しのページは移動または削除された可能性があります。', 'sakura' ); ?>
				</p>
				<p>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">
						<?php esc_html_e( 'トップページへ戻る', 'sakura' ); ?>
					</a>
				</p>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
