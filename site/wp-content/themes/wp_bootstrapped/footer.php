<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WP Bootstrapped
 * @since WP Bootstrapped 0.1
 */
?>

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="site-generator">
			<?php do_action( 'wp_bootstrapped_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'wp_bootstrapped' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'wp_bootstrapped' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wp_bootstrapped' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'wp_bootstrapped' ), 'WP Bootstrapped', '<a href="http://automattic.com/" rel="designer">Automattic</a>' ); ?>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>