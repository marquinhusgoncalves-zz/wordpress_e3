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

	<div style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/bg_clientes.jpg); background-size: cover; background-position: bottom; height:300px">
		<div class = "container">
			<div class = "titulo-banner caps">
				clientes
			</div>
		</div>
	</div>

	<div class = "container txt-empresa" style = "margin-bottom: 60px">
		<a href = "http://toledoferrari.com.br/" target = "_blanck">
			<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente toledo" style = "height: 250px">
				<div style = "display: table-cell; vertical-align: middle">
					<img style = "width: 80%; max-width: 300px" src = "<?php bloginfo('stylesheet_directory');?>/images/_clientes/toledo_ferrari_color.png" border = "0" alt = "">
				</div>
			</div>
		</a>
		<a href = "http://dicalconstrutora.com.br/" target = "_blanck">
			<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente dical" style = "height: 250px">
				<div style = "display: table-cell; vertical-align: middle">
					<img style = "width: 80%; max-width: 300px" src = "<?php bloginfo('stylesheet_directory');?>/images/_clientes/dical_color.png" border = "0" alt = "">
				</div>
			</div>
		</a>
		<a href = "http://www.viewco.com.br/" target = "_blanck">
			<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente view" style = "height: 250px">
				<div style = "display: table-cell; vertical-align: middle">
					<img style = "width: 80%; max-width: 300px" src = "<?php bloginfo('stylesheet_directory');?>/images/_clientes/view_color.png" border = "0" alt = "">
				</div>
			</div>
		</a>
		<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente generico" style = "height: 250px">
			<div style = "display: table-cell; vertical-align: middle">
				<img style = "width: 90%; max-width: 300px" src = "<?php bloginfo('stylesheet_directory');?>/images/_clientes/romaniluiz.png" border = "0" alt = "">
			</div>
		</div>
		<a href = "http://www.moroco.com.br/" target = "_blanck">
			<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente moroco" style = "height: 250px">
				<div style = "display: table-cell; vertical-align: middle">
					<img style = "height: 60%; max-width: 300px" src = "<?php bloginfo('stylesheet_directory');?>/images/_clientes/logo_moroco.png" border = "0" alt = "">
				</div>
			</div>
		</a>
	</div>

</div>

<?php get_footer(); ?>