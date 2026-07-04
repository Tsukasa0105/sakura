<?php
/**
 * Default page template, styled to match the rest of the site.
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
