<?php
/**
 * Template Name: Full-width, no sidebar
 * Description: A full-width template with no sidebar
 *
 * @package WP Bootstrapped
 * @since WP Bootstrapped 0.1
 */

get_header(); ?>

		<div id="primary" class="col-md-12">

				<?php
				while ( have_posts() ) { the_post(); 
					get_template_part( 'content', 'page' );
					comments_template( '', true );
				} //endwhile; // end of the loop. 
				?>

		</div><!-- #primary -->

<?php get_footer(); ?>