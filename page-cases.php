<?php
/*
Theme name: e3_theme
Theme URI: http://e3gerenciamento.com.br
Description: E3 Theme
Version: 1
Author: Daniel Mota
Author URI: http://behance.net/danielsmota
*/

get_header(); ?>

<div class = "clearfix">

	<!-- <div class = "visible-xs-inline-block">
		<img class = "img-cases img-padrao-xs" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img_xs.png" />
	</div>

	<div class = "hidden-xs img-padrao" style = "top: 115px; left: 10%">
		<img class = "img-cases" style="background-attachment: fixed;" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img.png" />
	</div> -->

	<div style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/bg_case.jpg); background-size: cover; background-position: bottom; height:300px">
		<div class = "container">
			<div class = "t-texto" style = "padding-top: 180px; color: white; font-size: 4em">
				CASES
			</div>
		</div>
	</div>

	<div class = "container txt-empresa">
		<!-- <div class = "col-lg-offset-5 col-sm-offset-4 col-lg-7 col-sm-8" style = "padding: 0 0 60px 0"> -->
			<div class="clearfix postagem-index" style="height: auto">
			 	<?php
			 	if ( have_posts() ) :
			 	?>

					<?php
						$catquery = new WP_Query( 'jetpack-portfolio-tag&tag_ID=9&post_type=jetpack-portfolio' );
						while($catquery->have_posts()) : $catquery->the_post();
					?>
					<?php
						get_template_part( 'content', 'portfolio' );
					?>

			 		<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>		
				<?php endif; ?>

			</div>

		<!-- </div> -->
	</div>

	<div style = "padding: 20px"></div>

</div>

<?php get_footer(); ?>