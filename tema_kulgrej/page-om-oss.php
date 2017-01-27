<?php

get_header();

if (has_post_thumbnail()) { ?>
	<section class="header-img fixed" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
		<div class="header-bg">
			<h1 class="header-title"><?php the_title(); ?></h1>
		</div>
	</section> <?php
} ?>

<main class="main-container flex">

<section class="about-us">
	<?php
	if( have_posts() ) {
		while( have_posts() ) {
			the_post();
			the_content();
		} ?>
</section>


<section class="contact-info">
	<article class="about">
		<?php the_field('left'); ?>
	</article>
	<article class="about">
		<?php the_field('right'); ?>
	</article>
</section> <?php

} ?>

</main> <!-- /main-container -->



<?php get_footer();


 ?>
