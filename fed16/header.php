<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav>
	<?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?>
</nav>

<div class="wrapper">