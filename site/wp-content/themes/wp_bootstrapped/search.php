<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WP Bootstrapped
 * @since WP Bootstrapped 0.1
 */

get_header(); ?>

		<section id="primary">
			<div id="content" role="main">
			<?php
			if ( have_posts() ) { 
			?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'wp_bootstrapped' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php 
				wp_bootstrapped_content_nav( 'nav-above' );
				/* Start the Loop */
				while ( have_posts() ) { the_post();
					get_template_part( 'content', 'search' );
				} //endwhile; 
				wp_bootstrapped_content_nav( 'nav-below' );
			} else { 
				?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'wp_bootstrapped' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wp_bootstrapped' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

				<?php 
			} //endif;
			?>

			</div><!-- #content -->
		</section><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>