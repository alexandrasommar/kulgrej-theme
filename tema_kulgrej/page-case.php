<?php
/**
* Template Name: Kundcase
* Visar alla inlägg av typen kundcase.
**/

get_header();

 $cases = new WP_Query( array(
    'post_type'       =>  'kundcase_cpt_kulgrej'
    ) );

 if( $cases->have_posts() ) {

 	while( $cases->have_posts() ) {

 		$cases->the_post();

 		the_title();
 	}
 }

get_footer();

?>
