<?php
/**
 * Single post template, styled to match the rest of the site.
 */

get_header();
?>

<main>
	<section class="section">
		<div class="container">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class( 'content-card' ); ?>>
					<div class="news-meta">
						<span><?php echo esc_html( get_the_date( 'Y.m.d' ) ); ?></span>
						<?php
						$sakura_categories = get_the_category();
						if ( ! empty( $sakura_categories ) ) :
							?>
							<span class="tag"><?php echo esc_html( $sakura_categories[0]->name ); ?></span>
						<?php endif; ?>
					</div>
					<h2><?php the_title(); ?></h2>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</article>
			<?php endwhile; ?>
		</div>
	</section>
</main>

<?php
get_footer();
