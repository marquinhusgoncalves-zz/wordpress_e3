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

<div class = "clearfix" style = "min-height: 570px">

	<div class = "visible-xs-inline-block">
		<img class = "img-clientes img-padrao-xs" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img_xs.png" />
	</div>

	<div class = "hidden-xs img-padrao" style = "top: 115px">
		<img class = "img-clientes" style="background-attachment: fixed;" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img.png" />
	</div>

	<div class = "container txt-empresa">
		<div class = "col-lg-offset-5 col-sm-offset-4 col-lg-7 col-sm-8" style = "padding: 0 0 80px 0">
			<div class = "t-texto" style = "padding-bottom: 20px">
				NOSSOS<br>CLIENTES
			</div>

			<div>
				<div class = "col-xs-12 col-sm-6 box-cliente toledo" style = "height: 250px">
					<div style = "display: table-cell; vertical-align: middle">
						<a href = "http://toledoferrari.com.br/" target = "_blanck">
							<img style = "width: 80%" src = "<?php bloginfo('stylesheet_directory');?>/images/toledo_ferrari_color.png" onmouseover = "this.src='<?php bloginfo('stylesheet_directory');?>/images/toledo_ferrari_grey.png'" onmouseout = "this.src='<?php bloginfo('stylesheet_directory');?>/images/toledo_ferrari_color.png'" border = "0" alt = "">
						</a>
					</div>
				</div>
				<div class = "col-xs-12 col-sm-6 box-cliente dical" style = "height: 250px">
					<div style = "display: table-cell; vertical-align: middle">
						<a href = "http://dicalconstrutora.com.br/" target = "_blanck">
							<img style = "width: 80%" src = "<?php bloginfo('stylesheet_directory');?>/images/dical_color.png" onmouseover = "this.src='<?php bloginfo('stylesheet_directory');?>/images/dical_grey.png'" onmouseout = "this.src='<?php bloginfo('stylesheet_directory');?>/images/dical_color.png'" border = "0" alt = "">
						</a>
					</div>
				</div>
					
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>