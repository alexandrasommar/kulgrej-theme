<!DOCTYPE html>
<html>
<head>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
	<nav>
		<div class="left">
hej
		</div>
		<div class="right">
			<?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?>
		</div>
	</nav>
</header>

<div class="wrapper">
