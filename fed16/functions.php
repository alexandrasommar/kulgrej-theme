<?php

// hooks
add_action( 'after_setup_theme', 'fed16_blog_setup' );

function fed16_blog_setup () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' ); //1.0 gör att css:en inte cachas

	wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto' ); // god praxis är att bara göra slash slash för att ladda in scripts

	register_nav_menu( 'mainmenu', 'Website main navigation' );

	add_theme_support( 'post-thumbnails', array( 'post', 'fed16_cpt_portfolio' ) );
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
		"name"			=> __( "Footer", "fed16" ),
		"id"			=> "footer1",
		"description"	=> __( "Column 1 in footer", "fed16" ),
		"before_widget"	=> "<div class='footer footer-col-1'>",
		"after_widget"	=> "</div>",
		));
}

?>
