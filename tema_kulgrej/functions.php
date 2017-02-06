<?php

require "widget_social.php";
require "theme_settings.php"; // lektionsgrejs

add_action( "wp_dashboard_setup", "fed16_remove_dashboard_boxes" );
function fed16_remove_dashboard_boxes() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes["dashboard"]["side"]["core"]["dashboard_quick_press"] );
	unset($wp_meta_boxes["dashboard"]["normal"]["core"]["dashboard_right_now"] ); // tar bort i "i korthet"
	unset($wp_meta_boxes["dashboard"]["side"]["core"]["dashboard_primary"] ); // tar bort nyheter från wp

	wp_add_dashboard_widget( "kulgrejdashboard", "Support", "kulgrej_dashwidget" );
}

function kulgrej_dashwidget() {
	?>
	Har du ett problem?<br>
	Ring 070 123 456 78
	<?php
}

remove_action( "wp_head", "print_emoji_detection_script", 7 );
remove_action( "wp_print_styles", "print_emoji_styles" );
remove_action( "wp_head", "feed_links", 2);

add_action( 'wp_enqueue_scripts', 'setup_fed16_styles' );

function setup_fed16_styles () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' ); //1.0 gör att css:en inte cachas

	wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Josefin+Sans:300,400,700' ); // god praxis är att bara göra slash slash för att ladda in scripts
	wp_enqueue_script( 'font-awesome_js', '//use.fontawesome.com/af24f8bf7a.js' );

}


// hooks
add_action( 'init', 'fed16_blog_setup' );

function fed16_blog_setup () {

	register_nav_menu( 'mainmenu', 'Website main navigation' );

	add_theme_support( 'post-thumbnails', array( 'post', 'kundcase_cpt_kulgrej', 'citat_cpt_kulgrej', 'page' ) );
	add_image_size( 'blooper', 500, 500, array( 'left', 'top' ) );
	//the_post_thumbnail('blooper');

	// Custom logo
	add_theme_support( 'custom-logo', array(
		'width'			=> 300,
		'height'		=> 150,
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
