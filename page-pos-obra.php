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

	<div style = "background: url(<?php bloginfo('stylesheet_directory');?>/images/bg_pos-obra.jpg); background-size: cover; background-position: bottom; height:300px">
		<div class = "container">
			<div class = "t-texto" style = "padding-top: 140px; color: white; font-size: 4em">
				Pós Obra
			</div>
		</div>
	</div>

	<a id = "anchor-name" name = "vistoria"></a>
	<div style = "background: lightgrey">
		<div class = "container" style = "padding: 40px 0">
			<div class = "align-mobile">
				<h1 class = "caps col-md-4">vistoria para entrega da obra</h1>
				<div style = "text-align: center"><img class = "col-md-1 seta" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png"></div>
			</div>

			<div class = "col-md-7">
				<div style = "margin-bottom: 20px; background: white; padding: 20px">
					<h1 class = "caps">unidades provativas</h1>
					<p>Recebimento das unidades privativas executadas pela Construtora, fazendo um Check List de verificação da qualidade de execução. Caso a unidade for aprovada, ela sera liberada para vistoria do Cliente. O mesmo processo ocorre nas unidades em estoque, sendo que a Incorporadora irá recebe-las na posição de Cliente.</p>
				</div>

				<div style = "background: white; padding: 20px">
					<h1 class = "caps">areas comuns e areas técnicas</h1>
					<p>Recebimento das areas comuns e areas tecnicas, elaborando um Laudo Fotográfico com todas as pendências que deverão ser sanadas no período Pos Obra pela Construtora. Esse Laudo deverá ser entregue a Incorporadora e ao Síndico, caracterizando a entrega da Area Comum na Assembléia para Instituição do Condominio.</p>
				</div>
			</div>
		</div>
	</div>

	<a id = "anchor-name" name = "assistencia"></a>
	<div>
		<div class = "container" style = "padding: 40px 0">
			<div class = "align-mobile">
				<h1 class = "caps col-md-4">gerenciamento do Pós - Assistência Técnica</h1>
				<img class = "col-md-1 seta" style = "" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png">
			</div>

			<div class = "col-md-7">
				<div style = "margin-bottom: 20px; background: white; padding: 20px">
					<h1 class = "caps">Gestão do Prazo</h1>
					<ol>
						<li>Acompanhar o atendimento dos prazos estabelecidos nos chamados provindos do SAC Incorporador;</li>
						<li>Realizar junto a equipe de Manutenção reuniões periódicas para análise do desempenho dos serviço e para definição das ações necessárias para recuperação de eventuais atrasos;</li>
						<li>Emitir semanalmente relatório de andamento das vistorias, e mensalmente relatório consolidado dos atendimentos efetuados.</li>
					</ol>
				</div>

				<div style = "margin-bottom: 20px; background: white; padding: 20px">
					<h1 class = "caps">Gestão do Custo</h1>
					<ol>
						<li>Analisar os custos dos serviços realizados nessa fase da obra e sua adequação a verba prevista em Contrato de Construção para a Manutenção Tecnica;</li>
						<li>Acompanhar e solicitar mensalmente junto à Incorporadora os aportes necessários para cobrir os custos decorrentes do pos-obra, conforme consta no Contrato de Construção, devidamente justificados e aprovando a reprogramação do saldo a receber.</li>
					</ol>
				</div>

				<div style = "background: white; padding: 20px">
					<h1 class = "caps">Gestão da Qualidade</h1>
					<ol>
						<li>Solicitar à construtora os alvarás e licenças (como pasta do sindico, Auto de Vistoria do Corpo de Bombeiros, manuais do proprietário, certificados de aprovação dos órgãos públicos ou concessionárias de serviços) necessárias para a execução dos serviços propostos;</li>
						<li>Acompanhar e analisar as vistorias técnicas, gerando o Laudo de Vistoria Técnica que deverá elucidar o problema aferido e orientar as próximas atividades com seus respectivos responsáveis;</li>
						<li>Obter junto a Construtora a formalização do Aceite por parte do Proprietário (ou representante) dos serviços efetuados em sua unidade.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<a id = "anchor-name" name = "estoque"></a>
	<div style = "background: lightgrey">
		<div class = "container" style = "padding: 40px 0">
			<div class = "align-mobile">
				<h1 class = "caps col-md-4">Gerenciamento do Pós - Unidades em Estoque</h1>
				<img class = "col-md-1 seta" src = "<?php bloginfo('stylesheet_directory');?>/images/seta.png">
			</div>

			<div class = "col-md-7">
				<div style = "margin-bottom: 20px; background: white; padding: 20px">
					<h1 class = "caps">Gestão do Estoque</h1>
					<ol>
						<li>Realizar junto a equipe de Manutenção vistorias periódicas para análise das condições que se encontram as unidades em estoque e definir ações necessárias para sanar eventuais problemas;</li>
						<li>Emitir mensalmente relatório consolidado dos serviços efetuados, bem como seus respectivos custos;</li>
						<li>Gerenciar junto com a Incorporadora o espelho de vendas desse estoque.</li>
					</ol>
				</div>
			</div>
		</div>
	</div>

	<div class = "col-xs-12" style = "text-align: center">
		<img style = "width: 100%; max-width: 880px; padding: 40px 0" src = "<?php bloginfo('stylesheet_directory');?>/images/fluxograma.png">
	</div>
</div>

<?php get_footer(); ?>