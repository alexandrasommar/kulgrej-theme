<?php get_header();

if (has_post_thumbnail()) { ?>
	<section class="header-img fixed" style="background-image:url(<?php
		if( wp_is_mobile() ) {
			echo the_post_thumbnail_url('large');
		} else {
			echo the_post_thumbnail_url();
		} ?>);">
		<div class="header-bg">
			<h1 class="header-title"><?php the_title(); ?></h1>
		</div>
	</section><?php
	}
?>
<main class="main-container"><?php
	if(have_posts()) {
		while(have_posts()) {
			the_post(); ?>
			<h3><?php the_title(); ?></h3><?php
			the_content();
		}
	}
	?>

</main><?php

get_footer();

?>
