<?php

get_header();

if (has_post_thumbnail()) { ?>
	<section class="header-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
		<div>
			<h1 class="header-title"><?php the_title(); ?></h1>
		</div>
	</section> <?php
} ?>

<main class="main-container">



<?php
if(have_posts()) {
	while(have_posts()) { ?>
		<article class="about">
			<?php the_post(); ?>
		</article>
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
