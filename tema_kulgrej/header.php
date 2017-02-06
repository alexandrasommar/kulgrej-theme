<!DOCTYPE html>
<html lang="sv">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<header>
	<nav class="navbar1">
		<div class="left"> <?php
			if ( function_exists( 'the_custom_logo' ) ) {
			    the_custom_logo();
			} ?>
		</div>
		<div class="right">
			<?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?>
		</div>
	</nav>
</header>

<div class="wrapper">
