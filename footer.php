<?php
/**
 * The footer for the theme.
 */
?>
<footer class="site-footer">
	<div class="container footer-inner">
		<div>
			<p class="footer-title"><?php bloginfo( 'name' ); ?></p>
			<p><?php bloginfo( 'description' ); ?></p>
		</div>
		<p class="copyright">&copy; <span id="year"><?php echo esc_html( date_i18n( 'Y' ) ); ?></span> <?php bloginfo( 'name' ); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
