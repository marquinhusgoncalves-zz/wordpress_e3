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

	<div class = "container txt-empresa">
		<div style = "padding: 0 0 80px 0">

			<div>
				<a href = "http://toledoferrari.com.br/" target = "_blanck">
					<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente toledo" style = "height: 250px">
						<div style = "display: table-cell; vertical-align: middle">
							<img style = "width: 80%" src = "<?php bloginfo('stylesheet_directory');?>/images/toledo_ferrari_color.png" border = "0" alt = "">
						</div>
					</div>
				</a>
				<a href = "http://dicalconstrutora.com.br/" target = "_blanck">
					<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente dical" style = "height: 250px">
						<div style = "display: table-cell; vertical-align: middle">
							<img style = "width: 80%" src = "<?php bloginfo('stylesheet_directory');?>/images/dical_color.png" border = "0" alt = "">
						</div>
					</div>
				</a>
				<a href = "http://www.viewco.com.br/" target = "_blanck">
					<div class = "col-xs-12 col-sm-4 col-md-3 box-cliente view" style = "height: 250px">
						<div style = "display: table-cell; vertical-align: middle">
							<img style = "width: 80%" src = "<?php bloginfo('stylesheet_directory');?>/images/view_color.png" border = "0" alt = "">
						</div>
					</div>
				</a>
					
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>