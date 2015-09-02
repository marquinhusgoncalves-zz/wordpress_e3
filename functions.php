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


	// /*
	//  * Change excerpt text
	//  *
	//  */
	// function custom_excerpt_length( $length ) {
	// return 30;
	// }
	// add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// function new_excerpt_more( $more ) {
	// return ' ... ';
	// }
	// add_filter( 'excerpt_more', 'new_excerpt_more' );

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

	add_action('init', 'project_custom_init');

	// function jptweak_remove_share() {
	//     remove_filter( 'the_content', 'sharing_display',19 );
	//     remove_filter( 'the_excerpt', 'sharing_display',19 );
	//     if ( class_exists( 'Jetpack_Likes' ) ) {
	//         remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
	//     }
	// }
	 
	// add_action( 'loop_start', 'jptweak_remove_share' );