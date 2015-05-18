<?php
/*
Template Name: Contato
Theme name: e3_theme
Theme URI: http://e3gerenciamento.com.br
Description: E3 Theme
Version: 1
Author: Daniel Mota
Author URI: http://behance.net/danielsmota
*/

$ph_name = "Qual o seu nome?";
$ph_email = "E o seu Email?";
$ph_subject = "Sobre o que seria o contato?";
$ph_message = "Escreva aqui...";

if($_POST[sent]){
 $error = "";
 if(!trim($_POST[your_name])){
 $ph_name = "Por favor, coloque seu nome";
 }
 if(!filter_var(trim($_POST[your_email]),FILTER_VALIDATE_EMAIL)){
 $ph_email = "Coloque um e-mail válido";
 }
 if(!trim($_POST[your_message])){
 $ph_message = "Falta sua mensagem";
 }
 if(!trim($_POST[your_subject])){
 $ph_subject = "Seria bom saber o assunto";
 }
 if(!$error){
 $email = wp_mail(get_option("admin_email"),trim($_POST[your_name])." enviou uma mensagem do site ".get_option("blogname"),stripslashes(trim($_POST[your_message])),"From: ".trim($_POST[your_name])." <".trim($_POST[your_email]).">\r\nReply-To:".trim($_POST[your_email]));
 }
}
get_header(); ?>

<div class = "clearfix contato">

	<!-- <div class = "visible-xs-inline-block">
		<img class = "img-contato img-padrao-xs" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img_xs.png" />
	</div>

	<div class = "hidden-xs img-padrao" style = "top: 115px">
		<img class = "img-contato" style="background-attachment: fixed;" src = "<?php bloginfo('stylesheet_directory');?>/images/padrao_img.png" />
	</div> -->

	<div class = "container txt-empresa" style = "min-height: 580px">
		<div class = "col-lg-offset-5 col-sm-offset-4 col-lg-7 col-sm-8" style = "padding: 0 0 60px 0">
			<div class = "t-texto" style = "padding-bottom: 20px; color: white">
				ENTRE EM<br>CONTATO
			</div>

			<div class = "lista">


				<?php if($email){ ?>
					<div class = "alert alert-success" role = "alert" data-dismiss = "alert">
						<a href = "#" class = "alert-link">Muito obrigado! Seu e-mail foi enviado com sucesso.</a>
					</div>
				<?php } else { if($error) { ?>
					<div class = "alert alert-warning" role = "alert" data-dismiss = "alert">
						<a href = "#" class = "alert-link">Precisa preencher por completo.</a>
					</div>
				<?php echo $error; ?>
				
				<?php } else { the_content(); } ?>

				<?php if( $post_response ) : ?>
					<div class = "alert alert-<?php echo $post_response->status ?>">
						<?php echo $post_response->message ?>
					</div>
				<?php endif ?>
					<form action = "<?php the_permalink(); ?>" id = "contact_me" method = "post">
					<input type = "hidden" name = "sent" id = "sent" value = "1" />
						<div class = "form-group">
							<div id = "input-field"><input class = "form-control input-lg" type = "text" name = "your_name" id = "your_name" value = "<?php echo $_POST[your_name];?>" placeholder = "<?php echo $ph_name; ?>" /></div>
						</div>
						<div class = "form-group">
							<div id="input-field"><input class = "form-control input-lg" type = "text" name = "your_email" id = "your_email" value = "<?php echo $_POST[your_email];?>" placeholder = "<?php echo $ph_email; ?>" /></div>
						</div>
						<div class = "form-group">
							<div id="input-field"><input class = "form-control input-lg" type = "text" name = "your_subject" id = "your_subject" value = "<?php echo $_POST[your_subject];?>" placeholder = "<?php echo $ph_subject; ?>" /></div>
						</div>
						<div class = "form-group">
							<div id="input-field"><textarea class = "form-control input-lg" rows = "5" name = "your_message" id = "your_message" placeholder = "<?php echo $ph_message; ?>"><?php echo stripslashes($_POST[your_message]); ?></textarea></div>
						</div>

						<button type = "submit" name = "send" class = "btn btn-success btn-lg">Enviar</button>
					</form>
					
				<?php } ?>

			</div>
		</div>
	</div>

</div>

<div id = "map-canvas"></div>

<?php get_footer(); ?>