<?php
/**
 * Fallback template (blog listing).
 * The one-page design lives in front-page.php; this file only renders
 * when a page other than the static front page needs a template (e.g. the blog index).
 */

get_header();
?>

<main>
	<section class="section">
		<div class="container">
			<div class="section-heading">
				<p class="section-label">BLOG</p>
				<h2><?php is_home() && ! is_front_page() ? single_post_title( '', true ) : bloginfo( 'name' ); ?></h2>
			</div>

			<div class="news-list">
				<?php if ( have_posts() ) : ?>
					<?php
					while ( have_posts() ) :
						the_post();
						$sakura_categories = get_the_category();
						$sakura_tag_name   = ! empty( $sakura_categories ) ? $sakura_categories[0]->name : '';
						?>
						<article <?php post_class( 'news-card' ); ?>>
							<div class="news-meta">
								<span><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></span>
								<?php if ( $sakura_tag_name ) : ?>
									<span class="tag"><?php echo esc_html( $sakura_tag_name ); ?></span>
								<?php endif; ?>
							</div>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 40 ) ); ?></p>
						</article>
					<?php endwhile; ?>

					<?php the_posts_pagination(); ?>
				<?php else : ?>
					<p><?php esc_html_e( '記事がまだありません。', 'sakura' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
