<?php
/**
* Template Name: Kontakt
* Visar kontaktsidan
**/

get_header();
?>

<section class="header-img map" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
</section>

<main class="main-container flex contact">

<h1 class="contact-title"><?php the_title(); ?></h1>

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
