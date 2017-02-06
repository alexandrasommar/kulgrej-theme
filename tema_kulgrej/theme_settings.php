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


		$arr = array(
			"gaid" => $gaid,
			"lat" => $lat,
			"lng" => $lng,
			"address" => $adress,
			"zip" => $zip,
			"city" =>$city
		);

		//var_dump($arr);

		foreach ($arr as $key => $value) {
			if( isset( $_POST["submit"] ) ) {
				echo "Key:".$key . "value: ". $value . "<br>";
				if ( !empty( $_POST['$key'] ) ) {
					$new_value = esc_attr( $_POST[$key] );
					//uppdatera i wp db
					update_option( $key, $new_value ); // unikt namn om man använder många plugins
				}

			} ?>
			<div id="settings-error-settings-updated" class="updated settings-error notice is-dismissable">
			<p><strong><?php _e( "Inställningarna sparades", "fed16" ); ?></strong></p>
			<button type="button" class="notice-dismiss"></button>
		</div> <?php
		}



		//$gaid = get_option( "gaid" );

		//$lat = $this->get_field_name( "lat" );

		 ?>

		<form method="post">
			<h2><?php _e( "Google Analytics Tracking Code", "fed16" ); ?></h2>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="gaid"><?php _e( "GA Tracking ID", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="gaid" id="gaid" value="<?php echo get_option('gaid'); ?>">
						</td>
					</tr>
				</tbody>
			</table>
			<h2><?php _e( "Adressinformation", "fed16" ); ?></h2>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="lat"><?php _e( "Latitud", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="lat" id="lat" value="<?php echo get_option('$lat'); ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="lng"><?php _e( "Longitud", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="lng" id="lng" value="<?php echo $lng; ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="Gatuadress"><?php _e( "Gatuadress", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="adress" id="adress" value="<?php echo $adress; ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="Postnummer"><?php _e( "Postnummer", "fed16" ); ?></label></th>
						<td>
							<input type="number" name="zip" id="zip" value="<?php echo $zip; ?>">
						</td>
					</tr>
					<tr>
						<th scope="row"><label for="Postort"><?php _e( "Postort", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="city" id="city" value="<?php echo $city; ?>">
						</td>
					</tr>
				</tbody>
			</table>
			<p class="submit">
				<input type="submit" name="submit" id="submit" value="<?php _e( "Save changes", "fed16" ); ?>" class="button button-primary">
			</p>
		</form>


	</div>

	<?php
}


 ?>
