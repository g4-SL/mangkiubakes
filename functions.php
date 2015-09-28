<?php

	function theme_enqueue_styles() {

	    $parent_style = 'parent-style';

	    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-style',
	        get_stylesheet_directory_uri() . '/style.css',
	        array( $parent_style )
	    );
	    
		wp_enqueue_style( 'skeleton', get_stylesheet_directory_uri() . '/skeleton.css' );
	}

	function add_jquery() {
		wp_enqueue_script( 'jquery' );
		wp_register_script('jsscript', get_stylesheet_directory_uri() . '/js/script.js', array('jquery'));
		wp_enqueue_script('jsscript');
	}

	function wp_infinitepaginate(){ 
	    $loopFile        = $_POST['loop_file'];
	    $paged           = $_POST['page_no'];
	    $slug			 = $_POST['slug'];
	    $posts_per_page  = get_option('posts_per_page');

	    # Load the posts
	    query_posts(array('paged' => $paged, 'category_name' => $slug )); 
	    get_template_part( $loopFile );

	    exit;
	}

	remove_filter( 'HEADER_IMAGE_WIDTH', 'twentyeleven_header_image_width' );
	remove_filter( 'HEADER_IMAGE_HEIGHT', 'twentyeleven_header_image_height' );
	define( 'HEADER_IMAGE_WIDTH', apply_filters( 'child_header_image_width', 1500 ) );
	define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'child_header_image_height', 600 ) );
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	add_action( 'wp_enqueue_scripts', 'add_jquery' );
	add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate');           // for logged in user
	add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate');    
?>