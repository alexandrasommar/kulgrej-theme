<?php

add_action( "admin_menu", "setup_theme_admin_menus" );

// en sån här fil följer alltid med (överlappar lite med advanced custom posttyoes), men den behöver alltid installeras eller skrivas en funktion för att det ska följa med

// __ skriver ej ut texten
// _e skriver ut texten
// _x WP bestämmer själv om det ska skrivas ut utifrån kontexten

function setup_theme_admin_menus() {
	$menu_name = _x( "Settings", "fed16" );
	$page_title = _x( "Theme settings", "fed16" );

	add_menu_page( $page_title, $menu_name, "manage_options", "fed16_settings", "fed16_settings_page" ); // sparar i var för att det blir tydligare i funktionen

}

function fed16_settings_page() { ?>

	<div class="wrap">
		<h1><?php _e( "Temainställningar: Kulgrej", "fed16" ); ?></h1>

		<?php
		//$gaid = "";
		/*if( isset($_POST["submit"] ) ) {
			$new_gaid = esc_attr( $_POST["gaid"] );
			//uppdatera i wp db
			update_option( "gaid", $new_gaid ); // unikt namn om man använder många plugins
			?>
			<div id="settings-error-settings-updated" class="updated settings-error notice is-dismissable">
				<p><strong><?php _e( "Settings saved.", "fed16" ); ?></strong></p>
				<button type="button" class="notice-dismiss"></button>
			</div>
			<?php
		}
		echo $gaid;
*/
		//$gaid = get_option( "gaid" );

		//$lat = $this->get_field_name( "lat" );

		$arr = array(
			"name" => $_POST["name"],
			"gaid" => $_POST["gaid"],
			"gmid" => $_POST["gmid"],
			"lat" => $_POST["lat"],
			"lng" => $_POST["lng"],
			"address" => $_POST["address"],
			"postal" => $_POST["postal"]
		);

		var_dump($arr);

		foreach ($arr as $key => $value) {
			if( isset( $_POST["submit"] ) ) {
				echo "Key:".$key . "value: ". $value . "<br>";
				if ( !empty( $_POST[$key] ) ) {
					$new_value = esc_attr( $value );
					//uppdatera i wp db
					update_option( $key, $new_value ); // unikt namn om man använder många plugins ?>
					<div id="settings-error-settings-updated" class="updated settings-error notice is-dismissable">
						<p><strong><?php _e( "Inställningarna sparades", "fed16" ); ?></strong></p>
						<button type="button" class="notice-dismiss"></button>
					</div> <?php
				}

			}
		}

		 ?>

		<form method="post">
			<h2><?php _e( "Inställnignar för Google Analytics, Google Maps och adress", "fed16" ); ?></h2>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="name"><?php _e( "Namn", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="name" id="name" value="<?php echo get_option('name'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="gaid"><?php _e( "Google Analytics Tracking ID", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="gaid" id="gaid" value="<?php echo get_option('gaid'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="gmid"><?php _e( "Google Maps Tracking ID", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="gmid" id="gmid" value="<?php echo get_option('gmid'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="lat"><?php _e( "Latitud", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="lat" id="lat" value="<?php echo get_option('lat'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="lng"><?php _e( "Longitud", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="lng" id="lng" value="<?php echo get_option('lng'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="address"><?php _e( "Gatuadress", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="address" id="address" value="<?php echo get_option('address'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="postal"><?php _e( "Postnummer & postort", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="postal" id="postal" value="<?php echo get_option('postal'); ?>">
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<input type="submit" name="submit" id="submit" value="<?php _e( "Save changes", "fed16" ); ?>" class="button button-primary">
			</p>
		</form> <?php

		?>


	</div>

	<?php
}


 ?>
