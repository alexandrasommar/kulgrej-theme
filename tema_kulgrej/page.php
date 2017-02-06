<?php get_header(); ?>

<main class="main-container" style="margin-bottom: 450px;">
	<?php
	if(have_posts()) {
		while(have_posts()) {
			the_post();

			if (has_post_thumbnail() ) {
				the_post_thumbnail('medium');
			}
			the_title();
			the_content();
		}
	}
	?>
</main>
<?php
get_footer(); ?>
