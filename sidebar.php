<?php
/**
 * The Sidebar Primary containing the main widget areas.
 *
 * @package WordPress
 * @since e3_theme
 */
?>

<div id = "secondary" class = "widget-area col-lg-4 col-md-4 col-sm-12" role = "complementary">
	
	<?php do_action( 'before_sidebar' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
	
		<aside id = "search" class = "widget widget_search">
			<?php get_search_form(); ?>
		</aside>
	
		<aside id = "archives" class = "widget widget_archive">
			<h3 class = "widget-title"><?php _e( 'Archives', '' ); ?></h3>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside>
	
		<aside id = "meta" class = "widget widget_meta" style = "width: 48%; float: right">
			<h3 class = "widget-title"><?php _e( 'Meta', '' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside>
	
	
	<?php endif; // end sidebar widget area ?>

</div><!-- #secondary .widget-area -->