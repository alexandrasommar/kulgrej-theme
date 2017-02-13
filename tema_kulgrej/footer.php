</div><!-- /wrapper, header.php -->
<div id="cookie-notification" class="cookie-notificaton" >
	<?php echo get_option('cookie'); ?>
	<button id="hide-notification"><?php echo get_option('cookie-btn'); ?></button>
</div>
<footer>


<?php
dynamic_sidebar( 'footer1' );
dynamic_sidebar( 'footer2' );
dynamic_sidebar( 'footer3' );





?>
<?php wp_footer(); ?>

</footer>
</body>
</html>
