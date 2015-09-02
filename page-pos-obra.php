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

	<div class = "visible-xs-inline-block visible-sm-inline-block">
		<img class = "img-posobra img-padrao-xs" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img_xs.png" />
	</div>

	<div class = "hidden-xs hidden-sm img-padrao" style = "top: 115px">
		<img class = "img-posobra" style = "background-attachment: fixed;" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img.png" />
	</div>

	<div class = "container txt-empresa">
		<div class = "col-lg-offset-4 col-md-offset-3 col-lg-8 col-md-9" style = "padding: 0 0 60px 0">

			<div class = "lista">
				<a id = "anchor-name" name = "vistoria"></a>
				<div style = "display: table;">
					<div class = "col-xs-12 col-sm-2">
						<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/iconeposobra_vistoria.svg" />
					</div>
					<div class = "col-xs-12 col-sm-10">
						<h1 style = "padding-top: 20px; margin-bottom: 50px" class = "caps">vistoria para entrega da obra</h1>

						<div style = "margin-bottom: 30px">
							<h1 class = "caps">unidades privativas</h1>
							<p>Recebimento das unidades privativas executadas pela Construtora, fazendo um Check List de verificação da qualidade de execução. Caso a unidade for aprovada, ela sera liberada para vistoria do Cliente. O mesmo processo ocorre nas unidades em estoque, sendo que a Incorporadora irá recebe-las na posição de Cliente.</p>
						</div>

						<div style = "margin-bottom: 30px">
							<h1 class = "caps">areas comuns e areas técnicas</h1>
							<p>Recebimento das areas comuns e areas tecnicas, elaborando um Laudo Fotográfico com todas as pendências que deverão ser sanadas no período Pos Obra pela Construtora. Esse Laudo deverá ser entregue a Incorporadora e ao Síndico, caracterizando a entrega da Area Comum na Assembléia para Instituição do Condominio.</p>
						</div>
					</div>
				</div>

				<hr />

				<a id = "anchor-name" name = "assistencia"></a>
				<div style = "display: table;">
					<div class = "col-xs-12 col-sm-2">
						<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/iconeposobra_assistencia.svg" />
					</div>
					<div class = "col-xs-12 col-sm-10">
						<h1 style = "padding-top: 5px; margin-bottom: 50px" class = "caps">gerenciamento do Pós Obra<br/>Assistência Técnica</h1>

						<div style = "padding-top: 20px; margin-bottom: 50px">
							<h1 class = "caps">Gestão do Prazo</h1>
							<ol>
								<li>Acompanhar o atendimento dos prazos estabelecidos nos chamados provindos do SAC Incorporador;</li>
								<li>Realizar junto a equipe de Manutenção reuniões periódicas para análise do desempenho dos serviço e para definição das ações necessárias para recuperação de eventuais atrasos;</li>
								<li>Emitir semanalmente relatório de andamento das vistorias, e mensalmente relatório consolidado dos atendimentos efetuados.</li>
							</ol>
						</div>
						<div style = "margin-bottom: 30px">
							<h1 class = "caps">Gestão do Custo</h1>
							<ol>
								<li>Analisar os custos dos serviços realizados nessa fase da obra e sua adequação a verba prevista em Contrato de Construção para a Manutenção Tecnica;</li>
								<li>Acompanhar e solicitar mensalmente junto à Incorporadora os aportes necessários para cobrir os custos decorrentes do pos-obra, conforme consta no Contrato de Construção, devidamente justificados e aprovando a reprogramação do saldo a receber.</li>
							</ol>
						</div>

						<div style = "margin-bottom: 30px">
							<h1 class = "caps">Gestão da Qualidade</h1>
							<ol>
								<li>Solicitar à construtora os alvarás e licenças (como pasta do sindico, Auto de Vistoria do Corpo de Bombeiros, manuais do proprietário, certificados de aprovação dos órgãos públicos ou concessionárias de serviços) necessárias para a execução dos serviços propostos;</li>
								<li>Acompanhar e analisar as vistorias técnicas, gerando o Laudo de Vistoria Técnica que deverá elucidar o problema aferido e orientar as próximas atividades com seus respectivos responsáveis;</li>
								<li>Obter junto a Construtora a formalização do Aceite por parte do Proprietário (ou representante) dos serviços efetuados em sua unidade.</li>
							</ol>
						</div>
					</div>
					<img style = "width: 100%; max-width: 880px; padding: 40px 0" src = "<?php bloginfo('stylesheet_directory');?>/images/fluxograma.png">
				</div>

				<hr />

				<a id = "anchor-name" name = "estoque"></a>
				<div style = "display: table;">
					<div class = "col-xs-12 col-sm-2">
						<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/iconeposobra_estoque.svg" />
					</div>
					<div class = "col-xs-12 col-sm-10">
						<div class = "align-mobile">
							<h1 style = "padding-top: 5px; margin-bottom: 50px" class = "caps">Gerenciamento do Pós Obra<br/>Unidades em Estoque</h1>
						</div>

						<div style = "margin-bottom: 30px">
							<h1 class = "caps">Gestão do Estoque</h1>
							<ol>
								<li>Realizar junto a equipe de Manutenção vistorias periódicas para análise das condições que se encontram as unidades em estoque e definir ações necessárias para sanar eventuais problemas;</li>
								<li>Emitir mensalmente relatório consolidado dos serviços efetuados, bem como seus respectivos custos;</li>
								<li>Gerenciar junto com a Incorporadora o espelho de vendas desse estoque.</li>
							</ol>
						</div>
					</div>
				</div>

			</div> <!-- .lista -->

		</div>
	</div> <!-- .container -->

</div>

<?php get_footer(); ?>