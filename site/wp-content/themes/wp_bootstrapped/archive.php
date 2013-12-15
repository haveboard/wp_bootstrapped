<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP Bootstrapped
 * @since WP Bootstrapped 0.1
 */

get_header(); ?>

		<div id="primary" class="col-md-8">


			<?php if ( have_posts() ) { ?>

				<header class="page-header">
					<h1 class="page-title">
						<?php
							if ( is_day() ) {
								printf( __( 'Daily Archives: %s', 'wp_bootstrapped' ), '<span>' . get_the_date() . '</span>' );
							} elseif ( is_month() ) {
								printf( __( 'Monthly Archives: %s', 'wp_bootstrapped' ), '<span>' . get_the_date( 'F Y' ) . '</span>' );
							} elseif ( is_year() ) {
								printf( __( 'Yearly Archives: %s', 'wp_bootstrapped' ), '<span>' . get_the_date( 'Y' ) . '</span>' );
							} else {
								_e( 'Archives', 'wp_bootstrapped' );
							} //endif;
						?>
					</h1>
				</header>

				<?php rewind_posts(); ?>

				<?php wp_bootstrapped_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) { the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to overload this in a child theme then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php } //endwhile; ?>

				<?php wp_bootstrapped_content_nav( 'nav-below' ); ?>

			<?php } else { ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'wp_bootstrapped' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wp_bootstrapped' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php } //endif; ?>

		</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>