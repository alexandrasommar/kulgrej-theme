<?php get_header(); ?>

<main class="main-container">
	<section><?php
		if( have_posts() ) {
			while( have_posts() ) { ?>
			<article> <?php
				the_post();
				the_content();

				} ?>
			</article> <?php

		}	?>

	</section>
</main> <!-- /main-container -->
<?php
get_footer(); ?>
