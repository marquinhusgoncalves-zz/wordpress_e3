<?php get_header(); ?>

	<div class = "clearfix">
		<div id = "carousel-example-generic" class = "carousel slide" data-ride = "carousel">

			<!-- Wrapper for slides -->
			<div class = "carousel-inner" role = "listbox">
<!--  				<div class = "item active" style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/banners/01.jpg) no-repeat center">
					<div class = "container">
						<div class = "carousel-text">PRA<br/>ZO</div>
					</div>
				</div>
				<div class = "item" style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/banners/02.jpg) no-repeat center">
					<div class = "container">
						<div class = "carousel-text">CUS<br/>TOS</div>
					</div>
				</div> -->
				
				<div class = "item active" onClick = "javascript:window.location.href='pos-obra/#vistoria'" style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/banners/04.jpg) no-repeat center">
					<img class = "banner-texto" src = "<?php bloginfo('stylesheet_directory');?>/images/banners/04.png" alt = "pós obra vistoria">
				</div>

				<div class = "item" onClick = "javascript:window.location.href='pos-obra/#assistencia'" style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/banners/05.jpg) no-repeat center">
					<img class = "banner-texto" src = "<?php bloginfo('stylesheet_directory');?>/images/banners/05.png" alt = "pós obra assistência">
				</div>

				<div class = "item" onClick = "javascript:window.location.href='pos-obra/#estoque'" style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/banners/06.jpg) no-repeat center">
					<img class = "banner-texto" src = "<?php bloginfo('stylesheet_directory');?>/images/banners/06.png" alt = "pós obra estoque">
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

	<div class = "clearfix" style = "background-color: white !important; height: auto">
		<div class = "container">
		<?php if (have_posts()) :
				  $aRecentPosts = new WP_Query( "showposts=2" );
				  while($aRecentPosts->have_posts()) : $aRecentPosts->the_post();
					?>
					<?php
						get_template_part( 'content', 'index' );
					?>
				<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>
		</div>
	</div>

	<!-- Texto o que fazemos -->
	<div class = "container" style = "display: table; padding: 5% 0;">
		<div class = "col-xs-12" style = "text-align: center">
			<img style ="max-width: 120px; width: 26%; margin: 0 3%" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_custo.png" alt = "custo">
			<img style ="max-width: 120px; width: 26%; margin: 0 3%" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_prazo.png" alt = "prazo">
			<img style ="max-width: 120px; width: 26%; margin: 0 3%" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_execucao.png" alt = "execução">
		</div>

		<div class = "col-xs-12 oqf" style = "display: table-cell; vertical-align: middle; margin-top: 25px; white-space: normal; text-align: center">
			<p >Garantia do Custo</p>
			<p >Gerenciamento de Projetos</p>
			<p >Prazo e Qualidade</p>
			<p >Orçamento de Obra</p>
		</div>

	</div>

	<!-- Texto com paralax fundo -->
	<div class = "paralax clearfix">
		<div class = "container" style = "display: table; padding: 100px 0; text-align: center">
			<div class = "texto">
				Seu empreendimento gerenciado do início ao fim
			</div>
		</div>
	</div>


<?php get_footer(); ?>