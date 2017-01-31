<?php
// I er tema-mapp (fed16 t.ex.), spara filen som widget-foodlist.php
class SocialMediaLinks extends WP_Widget {

	public function __construct() {
		$id = "socialmedia_widget";
		$name = "Social Media Links";
		$desc = "Länkar till Facebook och Instagram.";

		parent::__construct( $id, $name, $desc );
	}
	// Admin-formuläret under Appearance -> Widgets för denna widget
	public function form( $instance ) {
		//$title = $instance["title"];
		$id = esc_attr( $this->get_field_id( 'title' ) );
		//$name = $this->get_field_name( "title" ); ?>
		<p>
			<label for="<?php echo $id ?>">Facebook url: </label>
			<input type="text"
				id="<?php echo $id; ?>"
				name="<?php echo $name; ?>"
				value="<?php echo $title; ?>">
		</p>
		<p>
			<label for="<?php echo $id ?>">Instagram url: </label>
			<input type="text"
				id="<?php echo $id; ?>"
				name="<?php echo $name; ?>"
				value="<?php echo $title; ?>">
		</p> <?php

	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		if( !empty( $new_instance[ "title" ] ) ) {
			$instance[ "title" ] = $new_instance[ "title" ];
		}
		return $instance;
	}

	// Visa widget i frontend
	public function widget( $args, $instance ) {
		echo $args[ "before_widget"];
		echo $args[ "before_title"];
		echo $instance[ "title"];
		echo $args[ "after_title"];
		echo $args[ "after_widget"];
	}
}

add_action('widgets_init', 'register_socialmediaurl_kulgrej');
function register_socialmediaurl_kulgrej() {
	register_widget('SocialMediaLinks');
}
?>
