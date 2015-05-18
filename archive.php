<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @since e3_theme
 */

get_header(); ?>

	<div style = "text-align: center">
		<?php
		// if we're in a category
		if(is_category()):
		// get the name of the category
		$category = single_cat_title('', false);
		?>
		<!-- get the image with the same name as the category and display -->
		<img style = "width: 100%; max-width: 1140px" src = "<?php bloginfo('stylesheet_directory');?>/images/<?php echo($category); ?>.jpg" />
			
		<?php endif; ?>
	</div>


	<div class = "container" style = "padding: 20px 0">

		<div id = "primary" class = "col-lg-8 col-md-8 col-sm-12">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

		</div><!-- #primary .content-area -->

	<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>