<?php
/**
* Template Name: Kontakt
* Visar kontaktsidan
**/

get_header();


if (has_post_thumbnail()) { ?>
	<section class="header-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
	</section> <?php
} ?>

<main class="main-container flex">

<h1><?php the_title(); ?></h1>

<?php
if ( have_posts() ) {

	while ( have_posts() ) {
		the_post();
		the_content();
	}

} ?>



</main> <!-- /main-container -->

<?php
get_footer();
?>
