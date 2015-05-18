<html <?php language_attributes(); ?>>
<head>
	<meta charset = "<?php bloginfo( 'charset' ); ?>">
	<meta name = "viewport" content = "width=device-width">
	<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
	<link href = "<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
	<meta name = "format-detection" content = "telephone=no">
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	
	    <script src = "https://maps.googleapis.com/maps/api/js?v=3.exp"></script>	
	    <script type = "text/javascript">
	
	        function initialize() {
	            var myLatlng = new google.maps.LatLng(-23.589981,-46.824496,17);
	            var mapOptions = {
	                zoom: 16,
	                center: myLatlng,
	                disableDefaultUI: false,
	                scrollwheel: false,
	                draggable: false
	            }
	            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	
	            var marker = new google.maps.Marker({
	                position: myLatlng,
	                map: map,
	                title: 'E3 Gerenciamento de Empreendimento'
	            });
	
	            var styles = [
	                {
	                    stylers: [
	                        { hue: "#FF8600" },
	                        { saturation: -20 }
	                    ]
	                },{
	                    featureType: "road",
	                    elementType: "geometry",
	                    stylers: [
	                        { lightness: 100 },
	                        { visibility: "simplified" }
	                    ]
	                },{
	                    featureType: "road.local",
	                    elementType: "labels",
	                }
	            ];
	
	            map.setOptions({styles: styles});
	        }
	
	        google.maps.event.addDomListener(window, 'load', initialize);
	
	    </script>

	<?php wp_head(); ?>
</head>

<body>

	<div id = "stage">
	<div style = "background: #003331">
		<!-- <div class = "ext-navbar hidden-xs col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-6"></div> -->

		<header id = "masthead" class = "site-header container">

			<div class = "col-xs-1 col-sm-4 col-md-5" style = "margin: 10px 0; padding: 0">
				<a href = "<?php echo esc_url( home_url( '/' ) ); ?>" title = '<?php bloginfo( 'name' ); ?>' rel = "home">
					<img src = "<?php bloginfo('stylesheet_directory');?>/images/logo_h_pos.svg" style = "height: 80px" />
				</a>
			</div>

			<nav class = "nav navbar-default" role = "navigation">	
				<div class = "container" style = "background: #003331">
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
				  </div>
				</div>
			</nav>

		</header>
		</div>
	<div class = "site-main">