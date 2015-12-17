<!DOCTYPE html>
<html <?php language_attributes(); ?> class = "no-js">
<head>
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name = "keywords" content = "gerenciamento, projetos, oraamentos, obras, construcao civil, mercado imobiliario">
	<meta charset = "<?php bloginfo( 'charset' ); ?>">
	<meta name = "viewport" content = "width=device-width">
	<meta name = "format-detection" content = "telephone=no">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">

	<?php wp_head(); ?>
</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<div id = "stage">
	<div style = "background: white">

		<header id = "masthead" class = "site-header container">

			<div class = "col-xs-6 col-sm-4 col-md-5" style = "margin: 10px 0; padding: 0">
				<a href = "<?php echo esc_url( home_url( '/' ) ); ?>" title = '<?php bloginfo( 'name' ); ?>' rel = "home">
					<img src = "<?php bloginfo('stylesheet_directory');?>/images/logo_h.svg" style = "height: 80px" alt = "e3 gerenciamento" />
				</a>
			</div>
			<div class = "social col-xs-4 visible-xs-inline-block" style = "margin-top: 29px; padding: 0; display: none">
				<div style="position: absolute; right: 0">
					<a href="https://www.facebook.com/e3gerenciamento" target = "_blank"><i class="fa fa-facebook"></i></a>
					<a href="https://www.linkedin.com/company/9458205" target = "_blank"><i class="fa fa-linkedin"></i></a>	
				</div>
			</div>

			<nav class = "nav navbar-default">	
				<div class = "container" style = "background: white">
				  <div class = "navbar-header"> 
				    <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = ".navbar-ex-collapse"> 
				      <span class = "sr-only">Toggle navigation</span> 
				      <span class = "icon-bar"></span> 
				      <span class = "icon-bar"></span> 
				      <span class = "icon-bar"></span> 
				    </button> 
				  </div> 
				  
				  <div class = "collapse navbar-collapse navbar-ex-collapse">
				    <?php /* Primary navigation */
					wp_nav_menu( array(
					  'menu' => 'top_menu',
					  'depth' => 2,
					  'container' => false,
					  'menu_class' => 'nav navbar-nav',
					  'walker' => new wp_bootstrap_navwalker())
					);
					?>
					<div class="social hidden-xs">
						<a href="https://www.facebook.com/e3gerenciamento" target = "_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://www.linkedin.com/company/9458205" target = "_blank"><i class="fa fa-linkedin"></i></a>
					</div>
				  </div>
				</div>
			</nav>

		</header>
		</div>
	<div class = "site-main">