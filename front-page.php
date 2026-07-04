<?php
/**
 * The static front page template.
 * Each section of the one-page layout lives in its own template-parts/section-*.php file.
 */

get_header();
?>

<main>
	<?php
	get_template_part( 'template-parts/section', 'hero' );
	get_template_part( 'template-parts/section', 'intro' );
	get_template_part( 'template-parts/section', 'news' );
	get_template_part( 'template-parts/section', 'teacher' );
	get_template_part( 'template-parts/section', 'course' );
	get_template_part( 'template-parts/section', 'access' );
	?>
</main>

<?php
get_footer();
