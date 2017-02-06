<?php
/**
* Template Name: Aktuellt
* Visar aktuellt-sidan
**/

get_header(); ?>
<main class="main-container"> <?php
if( have_posts() ) {
	while( have_posts() ) {
		the_post();
		the_content();

	}
}


?>


	<div class="wdi_feed_main_container">
		<div class="wdi_photo_wrap_inner" style="background-color: white">
			<div class="wdi_feed_wrapper wdi_col_2" wdi-res="wdi_col_2">
				<img src="http://kulgrej.se/wordpress/wp-content/uploads/2017/02/insta.jpg" style="padding: 50px">
				<img src="http://kulgrej.se/wordpress/wp-content/uploads/2017/02/insta.jpg" style="padding: 50px">
				<img src="http://kulgrej.se/wordpress/wp-content/uploads/2017/02/insta.jpg" style="padding: 50px">
				<img src="http://kulgrej.se/wordpress/wp-content/uploads/2017/02/insta.jpg" style="padding: 50px">
			</div>
		</div>
	</div>
</main>

<?php
get_footer();


?>
