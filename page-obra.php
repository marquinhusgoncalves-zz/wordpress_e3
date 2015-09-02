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
		<img class = "img-servico img-padrao-xs" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img_xs.png" />
	</div>

	<div class = "hidden-xs hidden-sm img-padrao" style = "top: 115px">
		<img class = "img-servico" style = "background-attachment: fixed;" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img.png" />
	</div>

	<div class = "container txt-empresa">
		<div class = "col-lg-offset-5 col-md-offset-4 col-lg-7 col-md-8" style = "padding: 0 0 60px 0">
			<div class = "t-texto" style = "padding-bottom: 80px">
				Detalhamento dos<br>
				Serviços por fase do<br>
				empreendimento
			</div>

			<div class = "lista">
				<div>

					<div style = "display: table;">
						<div class = "col-xs-12 col-sm-2">
							<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_viabilidade.png" />
						</div>
						<div class = "col-xs-12 col-sm-10">
							<h1 class = "caps">Fase Viabilidade</h1>
							Elaboração do Estudo de Custo referente a Obra em questão, e fornecimento de parâmetros – como prazo de obra, custos agregados a aprovações e desenvolvimento de projetos, riscos envolvidos – para alimentar a Viabilidade de Aquisição do Negocio.	
						</div>		
					</div>

						<hr />

					<div style = "display: table;">
						<div class = "col-xs-12 col-sm-2">
							<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_planejamento.png" />
						</div>
						<div class = "col-xs-12 col-sm-10">
							<h1 class = "caps">Fase planejamento</h1>
							Contratação e coordenação da equipe de projetos, incluindo a gestão dos custos e prazos planejados para o desenvolvimento desses projeto;<br>
							Elaboração do Orçamento Preliminar de Obra, Curva ABC e Cronograma Fisico-Financeiro;<br>
							Gestão do processo de Licitação para escolha da Construtora (caso já tenha uma Construtora definida para o empreendimento, será realizada a validação do orçamento, bem como do cronograma físico – financeiro)
						</div>
					</div>
						<hr />

					<div style = "display: table;">
						<div class = "col-xs-12 col-sm-2">
							<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_prazo.png" />
						</div>
						<div class = "col-xs-12 col-sm-10">
							<h1 class = "caps">Fase Execução - Gestão dos Prazos</h1>
							Elaboração do Planejamento Inicial em MS Project (Baseline);<br>
							Supervisionar o desenvolvimento e atualização do cronograma físico de execução e cronograma de contratação dos principais insumos e subempreiteiros, controlando contratos e assegurando a observância dos prazos;<br>
							Acompanhar o atendimento dos prazos estabelecidos no cronograma, revendo o caminho crítico e propondo medidas corretivas imediatamente após a verificação de desvios;<br>
							Analisar e/ou acompanhar medições físicas realizadas pelo Banco financiador do empreendimento (se existir);<br>
							Solicitar à construtora os alvarás e licenças necessárias para a execução do empreendimento e acompanhar os procedimentos de obra necessários para obtenção de Habite‐se, Auto de Vistoria do Corpo de Bombeiros, manuais do proprietário, certificados de aprovação dos órgãos públicos ou concessionárias de serviços;<br>
							Elaboração do relatório fotográfico da obra, para a identificação da evolução dos serviços;<br>
							Realizar no canteiro reuniões periódicas para análise do desempenho da obra em termos globais e por serviço e para definição das ações necessárias para recuperação de atrasos.
						</div>
					</div>
						<hr />

					<div style = "display: table;">
						<div class = "col-xs-12 col-sm-2">
							<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_custo.png" />
						</div>
						<div class = "col-xs-12 col-sm-10">
							<h1 class = "caps">Fase Execução - Gestão dos Custos</h1>
							Analisar a relação das notas fiscais emitidas dos principais serviços da obra e sua adequação ao centro de custos (plano de contas) previamente definido, liberando o pagamento das mesmas, o que poderá ser realizado através do sistema gerencial eletrônico da CONTRATANTE (UAU, Mega, SAP, etc.), de maneira a se evitar distorções da apuração dos custos de cada item global de controle;<br>
							Analisar mapas de cotação e concorrência dos principais contratos do empreendimento (os itens serão definidos previamente e coincidem com os estabelecidos no cronograma de suprimentos), validando os mesmo com base em critérios pré‐definidos pela CONTRATANTE e verificando o impacto no custo previsto ao término;<br>
							Exigir da construtora a formalização pertinente das contratações, analisando a adequação dos contratos de prestação de serviço em relação aos mapas de cotação aprovados/validados anteriormente;<br>
							Analisar mensalmente através do sistema gerencial eletrônico ou de relatórios gerenciais enviados pela construtora contratada, as despesas totais e pagamentos efetivos da construção, solicitando esclarecimentos e/ou ajustes, quando necessário e transmitindo tais informações à CONTRATANTE;<br>
							Acompanhar a evolução das despesas das obras (histórico) através da comparação dos lançamentos e controles internos realizados pela construtora com o orçamento (sempre reajustado através de índices previamente definidos, como INCC ou CUB);<br>
							Acompanhar e solicitar mensalmente junto à construtora os fluxos de caixa futuros da obra (custos e taxas) e a necessidade de aportes, devidamente justificados e aprovando a reprogramação do saldo a gastar.
						</div>
					</div>
						<hr />
			
					<div style = "display: table;">
						<div class = "col-xs-12 col-sm-2">
							<img style = "width: 100%; max-width: 80px" src = "<?php bloginfo('stylesheet_directory');?>/images/icon_entrega.png" />
						</div>
						<div class = "col-xs-12 col-sm-10">
							<h1 class = "caps">Fase Entrega</h1>
							Gerenciar o processo de inspeção final de todas as unidades comercializadas e liberação para a entrega ao cliente.
						</div>
					</div>

				</div>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>