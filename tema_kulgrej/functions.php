<?php

require "widget-foodlist.php";

// hooks
add_action( 'after_setup_theme', 'fed16_blog_setup' );

function fed16_blog_setup () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' ); //1.0 gör att css:en inte cachas

	wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,700' ); // god praxis är att bara göra slash slash för att ladda in scripts
	wp_enqueue_script( 'font-awesome_js', '//use.fontawesome.com/af24f8bf7a.js' );

	register_nav_menu( 'mainmenu', 'Website main navigation' );

	add_theme_support( 'post-thumbnails', array( 'post', 'fed16_cpt_portfolio', 'page' ) );
	add_image_size( 'blooper', 500, 500, array( 'left', 'top' ) );
	//the_post_thumbnail('blooper');

	// Custom logo
	add_theme_support( 'custom-logo', array(
		'width'			=> 600,
		'height'		=> 85,
		'flex-width'	=> true,
		'flex-height'	=> true
		) );

	// Register sidebar
	register_sidebar( array(
		"name"			=> __( "Footer", "kulgrej" ),
		"id"			=> "footer1",
		"description"	=> __( "Column 1 in footer", "kulgrej" ),
		"before_widget"	=> "<div class='footer-col-1'>",
		"after_widget"	=> "</div>",
	) );

	register_sidebar( array(
		"name"			=> __( "Footer", "kulgrej" ),
		"id"			=> "footer2",
		"description"	=> __( "Column 2 in footer", "kulgrej" ),
		"before_widget"	=> "<div class='footer-col-2'>",
		"after_widget"	=> "</div>",
	) );

	register_sidebar( array(
		"name"			=> __( "Footer", "kulgrej" ),
		"id"			=> "footer3",
		"description"	=> __( "Column 3 in footer", "kulgrej" ),
		"before_widget"	=> "<div class='footer-col-3'>",
		"after_widget"	=> "</div>",
	) );
}

?>
