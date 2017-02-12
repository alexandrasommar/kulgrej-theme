<?php

require "widget_social.php";
require "widget_copyright.php";
require "theme_settings.php"; // lektionsgrejs

add_action( "wp_dashboard_setup", "tema_kulgrej_remove_dashboard_boxes" );
function tema_kulgrej_remove_dashboard_boxes() {
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

//Theme settings page

//function setup_theme_admin_menus() {
//    add_submenu_page("themes.php", "Front page settings", "Front page", "Manage options", "Front page elements", "theme_front_page_settings");
//}
//add_action("admin_menu", "setup_theme_admin_menus");

function theme_front_page_settings() {
    echo "Hello, world!";
	// Check that the user is allowed to update options
	if (!current_user_can('manage_options')) {
	    wp_die('You do not have sufficient permissions to access this page.');
	}
}



remove_action( "wp_head", "print_emoji_detection_script", 7 );
remove_action( "wp_print_styles", "print_emoji_styles" );
remove_action( "wp_head", "feed_links", 2);

add_action( 'wp_enqueue_scripts', 'setup_tema_kulgrej_styles' );

function setup_tema_kulgrej_styles () {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', null, '1.0', 'all' ); //1.0 gör att css:en inte cachas

	wp_enqueue_style( 'Fonts', '//fonts.googleapis.com/css?family=Catamaran:300,400%7cJosefin+Sans:300,400'); // god praxis är att bara göra slash slash för att ladda in scripts
	wp_enqueue_script( 'font-awesome_js', '//use.fontawesome.com/af24f8bf7a.js' );

}



function tema_kulgrej_blog_setup () {

	register_nav_menu( 'mainmenu', 'Website main navigation' );

	add_theme_support( 'post-thumbnails', array( 'post', 'kundcase_cpt_kulgrej', 'citat_cpt_kulgrej', 'page' ) );
	add_image_size( 'cases', 300, 300, array( 'left', 'top' ) );
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
		"name"			=> __( "Footer kolumn 1", "kulgrej" ),
		"id"			=> "footer1",
		"description"	=> __( "Kolumn 1 i footern", "kulgrej" ),
		"before_widget"	=> "<div class='footer-col-1'>",
		"after_widget"	=> "</div>",
	) );

	register_sidebar( array(
		"name"			=> __( "Footer kolumn 2", "kulgrej" ),
		"id"			=> "footer2",
		"description"	=> __( "Kolumn 2 i footern", "kulgrej" ),
		"before_widget"	=> "<div class='footer-col-2'>",
		"after_widget"	=> "</div>",
	) );

	register_sidebar( array(
		"name"			=> __( "Footer kolumn 3", "kulgrej" ),
		"id"			=> "footer3",
		"description"	=> __( "Kolumn 3 i footern", "kulgrej" ),
		"before_widget"	=> "<div class='footer-col-3'>",
		"after_widget"	=> "</div>",
	) );
}

// hooks
add_action( 'init', 'tema_kulgrej_blog_setup' );
?>
