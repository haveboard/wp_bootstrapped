<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WP Bootstrapped
 * @since WP Bootstrapped 0.1
 */

get_header(); ?>

		<div id="primary" class="col-md-8">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php //comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>