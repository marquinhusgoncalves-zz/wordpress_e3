	<article class = "col-sm-6" id = "post-<?php the_ID(); ?>" style = "margin-top: 40px" >

		<div class = "post-inner-content">
				<?php if ( 'post' == get_post_type() ) : ?>

				<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
				<div class = "img-thumb" style = "background:url('<?php echo $url; ?>') no-repeat"></div>

				<h1 class = "entry-header"><a href = "<?php the_permalink(); ?>" rel = "bookmark"><?php echo wp_trim_words( get_the_title(), 15 ); ?></a></h1>

				<?php endif; ?>

				<p class = "entry-content"><?php echo wp_trim_words( get_the_excerpt(), 27 ); ?></p>

				<a class = "leia mais btn btn-success" href = "<?php the_permalink(); ?>" title = "<?php the_title_attribute(); ?>"><?php _e( 'Leia mais' ); ?></a>
		</div>

	</article><!-- #post-## -->