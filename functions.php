<?php
	/*
	Theme setup
	*/
	add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;


	add_action("login_head", "my_login_head");
	function my_login_head() {
		echo "
		<style>
		body.login #login h1 a {
			background: url('".get_bloginfo('template_url')."/images/logo_h.png') no-repeat scroll center top transparent;
			background-size: cover;
			height: 140px;
			width: 290px;
		}
		</style>
		";
	}

	// Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');


	/*
	 * Change excerpt text
	 *
	 */
	function custom_excerpt_length( $length ) {
		return 30;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	function new_excerpt_more( $more ) {
	return ' ... <br><a class="leia-mais" href="'. get_permalink( get_the_ID() ) . '">' . __('Leia mais', ' ') . '</a>';
	}
	add_filter( 'excerpt_more', 'new_excerpt_more' );


	/*
	 * Bootstrap
	 *
	 */
	add_filter('show_admin_bar', '__return_false');

	function wpt_register_js() {
	    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
	    wp_enqueue_script('jquery.bootstrap.min');
	}
	add_action( 'init', 'wpt_register_js' );
	function wpt_register_css() {
	    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
	    wp_enqueue_style( 'bootstrap.min' );
	}
	
	add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

	/**
	 * Theme setup
	 *
	 */
	if ( ! function_exists( 'e3_setup' ) ) :

	function e3_setup() {
		
		// Enable support for Post Thumbnail
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 600, 9999 ); //600 pixels wide (and unlimited height)
		
		// Enable support for Post Formats
		add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
	}
	endif;
	add_action( 'after_setup_theme', 'e3_setup' );



	/**
	 * Register widgetized area and update sidebar with default widgets
	 *
	 */
	function e3_widgets_init() {
		register_sidebar( array(
			'name' => __( 'Sidebar Primary', 'e3_widgets_init' ),
			'id' => 'sidebar-1',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',	
		) );
		register_sidebar( array(
			'name' => __( 'Footer', 'e3_widgets_init' ),
			'id' => 'sidebar-2',
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		) );
		
	}
	add_action( 'widgets_init', 'e3_widgets_init' );

	// Catch the second image
	function catch_that_image() {
		global $post, $posts;
		$first_img = 'post_type=jetpack-portfolio';
		ob_start();
		ob_end_clean();
		$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
		$first_img = $matches[1][0];

		if(empty($first_img)) {
		  $first_img = "/path/to/default.png";
		}
	    return $first_img;
	}

	/**
	* Add theme support for Portfolio Custom Post Type.
	*/
	add_action( 'after_setup_theme', slug_jetpack_portfolio_cpt );
	function slug_jetpack_portfolio_cpt() {
	add_theme_support( 'jetpack-portfolio' );
	}

 ?>