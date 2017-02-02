<?php
/**
* Template Name: Kundcitat
* Visar sidan Kundcitat
**/

get_header();

if (has_post_thumbnail()) { ?>
	<section class="header-img fixed" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
		<div class="header-bg">
			<h1 class="header-title"><?php the_title(); ?></h1>
		</div>
	</section> <?php
	} ?>

	<main class="main-container"><?php

		$quotes = new WP_Query( array(
			"post_type"		=> "citat_cpt_kulgrej",
			"post_status"	=> "publish",
			"orderby"		=> "title",
			"order"			=> ASC
			) ); ?>


		<section class="quote-container"><?php

			if( $quotes->have_posts() ) {

				while( $quotes->have_posts() ) { ?>

			<article class="quote"> <?php
				$name = get_post_meta( get_the_ID(), 'name', true );
				$title = get_post_meta( get_the_ID(), 'title', true );
				$company = get_post_meta( get_the_ID(), 'company', true );

				$quotes->the_post();

				the_content();

				echo $name;
				echo $title;
				echo $company;

				} ?>
			</article> <?php


			} else {
				"Det finns inga projekt upplagda";
			} ?>
		</section>


	</main><?php


get_footer();



?>
