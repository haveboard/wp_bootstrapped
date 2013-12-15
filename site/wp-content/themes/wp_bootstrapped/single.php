<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WP Bootstrapped
 * @since WP Bootstrapped 0.1
 */

get_header(); ?>

		<div id="primary" class="cmd-md-8">

			<?php 
			while ( have_posts() ) { the_post();
				wp_bootstrapped_content_nav( 'nav-above' );
				get_template_part( 'content', 'single' );
				wp_bootstrapped_content_nav( 'nav-below' );
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template( '', true );
			} //endwhile; // end of the loop.
			?>
		</div><!-- #primary -->
<?php
get_sidebar();
get_footer();
?>