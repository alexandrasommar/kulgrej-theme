<?php
/**
* Template Name: Portfolio
* Visar alla inlägg av typen portfolio.
**/

get_header();

echo "page-portfolio.php";
?>
<h1>Alla mina projekt</h1>
<?php

$portfolio = new WP_Query( array(
	"post_type"		=> "fed16_cpt_portfolio",
	"post_status"	=> "publish",
	"orderby"		=> "title",
	"order"			=> ASC
	) );
if( $portfolio->have_posts() ) {

	while( $portfolio->have_posts() ) {

		$portfolio->the_post();

		echo "<h2>";
		the_title(); echo "</h2>";
		$bild_url = the_post_thumbnail_url();
		echo $bild_url;

		the_post_thumbnail( 'blooper' );
		$terms = wp_get_post_terms( get_the_ID(), 'fed16_projekttyp' );

		foreach( $terms as $term ) {
			echo $term->name . "<br>";
		}

		//var_dump($terms);

	}


} else {
	"Det finns inga projekt upplagda";
}

get_footer();

?>
