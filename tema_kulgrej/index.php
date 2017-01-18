<?php get_header(); ?>

index.php
<?php

if(have_posts()) {
	while(have_posts()) {
		the_post(); //glöm inte denna!! annars fastnar en i en evighetsloop
		echo "<h1>";
		the_title(); 
		echo "</h1>";
		the_excerpt();
		?>
		<a href="<?php the_permalink(); ?>">Läs mer</a>
		<?php
	}
}


get_footer(); ?>