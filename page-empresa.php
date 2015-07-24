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

	<div style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/bg_empresa.jpg); background-size: cover; background-position: bottom; height:300px">
		<div class = "container">
			<div class = "titulo-banner caps">
				quem<br />somos
			</div>
		</div>
	</div>

	<div class = "container" style = "padding: 40px 0">
		<div class = "lista col-md-offset-5 col-md-6">
			Somos uma empresa focada no gerenciamento de empreendimentos, oferecemos em nosso portfólio de serviços Gestão de Projetos, Gestão de Orçamentos, Gestão de Obra e Pós Obra.
			<div style = "height: 10px"></div>
			Seja qual for o tipo de obra, executamos o gerenciamento do início ao fim,  minimizando prazos, customizando custos e priorizando todos os prazos.
			<div style = "height: 10px"></div>
			Nossos clientes são incorporadoras, investidores individuais e institucionais, fundos de investimentos nacionais e internacionais e outras empresas do mercado imobiliário.
		</div>
	</div>

	<div style = "background: lightgrey">
		<div class = "container" style = "padding: 40px 0">
			<div class = "t-texto caps" style = "padding: 20px 15px">
				nossa<br />atuação
			</div>

			<div class = "clearfix lista">		
				<div class = "col-sm-6 col-md-4" style = "padding-top: 30px">
					<div class = "clearfix" style = "float: left">
						<img style = "height: 35px" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png" />
					</div>
					<div style = "width: 85%; padding-left: 45px">Gerenciar o desenvolvimento dos projetos e informações correlatas;</div>
				</div>
				<div class = "col-sm-6 col-md-4" style = "padding-top: 30px">
					<div class = "clearfix" style = "float: left">						
						<img style = "height: 35px" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png" />
					</div>
					<div style = "width: 85%; padding-left: 45px">Elaborar Cronograma e gerenciar o andamento fisico da obra;</div>
				</div>
				<div class = "col-sm-6 col-md-4" style = "padding-top: 30px">
					<div class = "clearfix" style = "float: left">
						<img style = "height: 35px" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png" />					
					</div>
					<div style = "width: 85%; padding-left: 45px">Coordenar Estudos de Massa e Quadros Numéricos para viabilizar negócios imobiliários;</div>
				</div>	
				<div class = "col-sm-6 col-md-4" style = "padding-top: 30px">
					<div class = "clearfix" style = "float: left">
						<img style = "height: 35px; display: inline-block" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png" />
					</div>
					<div style = "width: 85%; padding-left: 45px">Analisar o Orçamento da Obra e gerenciar os custos incorridos e contratos fechados no decorrer da obra;</div>
				</div>
				<div class = "col-sm-6 col-md-4" style = "padding-top: 30px">
					<div class = "clearfix" style = "float: left">
						<img style = "height: 35px; display: inline-block" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png" />
					</div>
					<div style = "width: 85%; padding-left: 45px">Agregar excelência ao processo de incorporação imobiliária, gerenciando o desenvolvimento dos projetos e a execução da obra, reduzindo os riscos para o cumprimento dos requisitos de prazo e custo definidos pelo empreendedor.</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>