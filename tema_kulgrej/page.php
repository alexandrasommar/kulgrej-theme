<?php get_header(); ?>

<main class="main-container">
	<div> <?php
		if( have_posts() ) {
			while( have_posts() ) { ?>
			<section> <?php
				the_post();
				the_content();

				} ?>
			</section> <?php
		} ?>
	</div>
</main> <!-- /main-container -->
<?php
get_footer(); ?>
