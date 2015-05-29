<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @since e3_theme
 */

get_header(); ?>

	<div class = "container" style = "padding: 20px 0">

		<div id = "primary" class = "content-area col-sm-12 col-md-8">
			<div class = "site-content" role = "main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', get_post_format() ); ?>

			<?php endwhile; // end of the loop. ?>

			</div><!-- #content .site-content -->
		</div><!-- #primary .content-area -->

	<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>