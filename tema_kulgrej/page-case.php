<?php
/**
* Template Name: Kundcase
* Visar alla inlägg av typen kundcase.
**/

get_header(); ?>

<main class="main-container" style="margin-bottom: 450px;">

	<?php
	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();
			the_content();
		}

	}

	//kommentera ut nedan när det finns kundcase inlagt!!
	 // $cases = new WP_Query( array(
	 //    'post_type'       =>  'kundcase_cpt_kulgrej'
	 //    ) );

	 // if( $cases->have_posts() ) {

	 // 	while( $cases->have_posts() ) {

	 // 		$cases->the_post();

	 // 		the_title();
	 // 	}
	 // } ?>

 </main> <?php

get_footer();

?>
