<?php
get_header();

if (has_post_thumbnail()) { ?>
	<section class="index-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
		<div class="header-bg">
			<h1 class="index-title"> <?php
				$custom_logo_id = get_theme_mod( 'custom_logo' );
				$logo = wp_get_attachment_image_src( $custom_logo_id , 'medium' );

				if ( has_custom_logo() ) {
				    echo '<img src="'. esc_url( $logo[0] ) .'">';
				} else {
				    echo '<h1>'. esc_attr( get_bloginfo( 'name' ) ) .'</h1>';
				} ?>
			</h1>
		</div>
		<div class="turning-words">
			<h2 class="sentence">Vi gör <br>
			    <div class="tw">
					<span>montrar</span>
					<span>speciallösningar</span>
					<span>event</span>
					<span>scenografi</span>
					<span>kickoffer</span>
					<span>specialsnickerier</span>
					<span>popup store</span>
					<span>produktlanseringar</span>
					<span>upplevelser</span>
			    </div>
	  		</h2>
  		</div>
	</section> <?php
} ?>


 <?php
get_footer(); ?>
