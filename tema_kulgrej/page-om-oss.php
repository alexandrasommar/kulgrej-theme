<?php

get_header();

if (has_post_thumbnail()) { ?>
	<section class="header-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
		<h2 class="header-title">Om oss</h2>
	</section> <?php
} ?>

<main class="main-container">



<?php
if(have_posts()) {
	while(have_posts()) {
		the_post();

		?>
		<div class="bodytext">
			<?php the_content(); ?>
		</div>
		<?php
	}
}

?>

</main> <!-- /main-container -->



<?php

get_footer();


 ?>
