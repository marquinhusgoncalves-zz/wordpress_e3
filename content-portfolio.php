<div class = "row" style = "padding: 20px 0">
	<article id = "post-<?php the_ID(); ?>">
		
		<div class = "col-xs-5 col-md-3" style = "padding: 0">
			<div style = "background: white">
				<div class = "img-category">
					<div style = "display: table-cell; vertical-align: middle; text-align: center">
						<?php the_post_thumbnail(); ?>
					</div>
				</div>
			</div>
		</div>

		<div class = "col-xs-7 col-md-3" style = "padding: 0">
			<div class = "blog-img" style = "background: url(<?php echo catch_that_image() ?>)"></div>
		</div>

		<div class = "col-xs-12 col-md-6 case-text" style = "padding: 0 20px">
			<?php echo strip_tags(get_the_content(), '<p><a><h2><blockquote><code><ul><li><i><em><strong>'); ?>
		</div>

	</article><!-- #post-## -->
</div>