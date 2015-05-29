<?php get_header(); ?>

	<div class = "clearfix">
		<div id = "carousel-example-generic" class = "carousel slide" data-ride = "carousel">

			<!-- Wrapper for slides -->
			<div class = "carousel-inner" role = "listbox">
			    	<div class = "item active">
					<div class = "container">
					<div class = "carousel-text">PRA<br/>ZO</div>
					</div>
					<img src = "<?php bloginfo('stylesheet_directory');?>/images/banners/01.jpg" alt = "">
			    	</div>
			    	<div class = "item">
					<div class = "container">
				    	<div class = "carousel-text">CUS<br/>TOS</div>
					</div>
					<img src = "<?php bloginfo('stylesheet_directory');?>/images/banners/02.jpg" alt = "">
			    	</div>
			    	<div class = "item">
			    		<div class = "container">
			    		<div class = "carousel-text">QUALI<br/>DADE</div>	
			    		</div>
					<img src = "<?php bloginfo('stylesheet_directory');?>/images/banners/03.jpg" alt = "">
					</div>
				</div> 

			<!-- Controls -->
			<a class = "left carousel-control" href = "#carousel-example-generic" role = "button" data-slide = "prev">
			  <span class = "glyphicon glyphicon-chevron-left" aria-hidden = "true"></span>
			  <span class = "sr-only">Previous</span>
			</a>
			<a class = "right carousel-control" href = "#carousel-example-generic" role = "button" data-slide = "next">
			  <span class = "glyphicon glyphicon-chevron-right" aria-hidden = "true"></span>
			  <span class = "sr-only">Next</span>	
			</a>

		</div>
	</div>

	<!-- Texto o que fazemos -->
	<div class = "container" style = "height: 250px; display: table; padding: 5% 0;">
		<div class = "img-oqf col-xs-12 col-sm-5" style = "padding-bottom: 30px">
			<img src = "<?php bloginfo('stylesheet_directory');?>/images/icon_prazo.png">
			<img src = "<?php bloginfo('stylesheet_directory');?>/images/icon_execucao.png">
			<img src = "<?php bloginfo('stylesheet_directory');?>/images/icon_custo.png">
		</div>

		<div class = "col-xs-12 col-sm-5" style = "display: table-cell; vertical-align: middle; margin-bottom: 5px;">
			<div class = "oqf">Garantia do Custo<br>Prazo e Qualidade<br>Gerenciamento de Projetos<br>Orçamento de Obra</div>
		</div>

	</div>

	<!-- Texto com paralax fundo -->
	<div class = "paralax clearfix">
		<div class = "container" style = "display: table; padding: 100px 0">
			<div class = "texto">
				Seu empreendimento gerenciado do início ao fim
			</div>
		</div>
	</div>
	

<?php get_footer(); ?>