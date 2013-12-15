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

				<?php 
				while ( have_posts() ) { the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<h1 class="entry-title"><?php the_title(); ?></h1>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php
							the_content();
							wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'wp_bootstrapped' ), 'after' => '</div>' ) );
							edit_post_link( __( 'Edit', 'wp_bootstrapped' ), '<span class="edit-link">', '</span>' );
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-<?php the_ID(); ?> -->

					<?php 
					comments_template( '', true );
					} //endwhile; // end of the loop. 
					?>
		</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>