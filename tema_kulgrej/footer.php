</div><!-- /wrapper, header.php -->

<footer>

<?php
dynamic_sidebar( 'footer1' );
echo "&copy;" . date('o') . dynamic_sidebar( 'footer2' );
dynamic_sidebar( 'footer3' );





?>
<?php wp_footer(); ?>

</footer>
</body>
</html>
