<?php
/**
 *
 * @package WordPress
 * @since e3_theme
 */
?>

<article id = "post-<?php the_ID(); ?>" style = "padding: 15px 0">

	<header class = "entry-header">

		<h2 class = "entry-title">
			<a href = "<?php the_permalink(); ?>" title = "<?php echo esc_attr( sprintf( __( 'Permalink to %s', ' ' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel = "bookmark">
				<?php the_title(); ?>
			</a>
		</h2>		
	</header><!-- .entry-header -->
	
	<?php if ( is_single() ) : ?>
		
		<div class = "entry-content">
			<?php the_content( __( 'Continue lendo <span class="meta-nav">&rarr;</span>', ' ' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', ' ' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
	
	<?php else : ?>
	
		<div class = "entry-summary">
			
			<?php if ( get_post_format() ) : ?>
		
				<?php the_content( __( 'Continue lendo <span class="meta-nav">&rarr;</span>', ' ' ) ); ?>
		
			<?php else : ?>
		
				<?php the_excerpt(); ?>
			
			<?php endif; // get_post_format() ?>
				
		</div><!-- .entry-summary -->
		
	<?php endif; // is_single() ?>

</article><!-- #post-<?php the_ID(); ?> -->