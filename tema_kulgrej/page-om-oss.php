<?php

get_header();

if (has_post_thumbnail()) { ?>
	<section class="header-img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
		<div class="header-bg">
			<h1 class="header-title"><?php the_title(); ?></h1>
		</div>
	</section> <?php
} ?>

<main class="main-container">



<?php
if(have_posts()) { ?>
		<article class="about">
			<?php the_field('left'); ?>

		</article>
			<div class="bodytext">
				<?php the_field('right'); ?>
			</div>
		<?php

}

?>

</main> <!-- /main-container -->



<?php

get_footer();


 ?>
