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
		<h1><?php _e( "Temainställningar: Kulgrej", "fed16" ); ?></h1> <?php

		$inputData = array(
			"name" => $_POST["name"],
			"gaid" => $_POST["gaid"],
			"gmid" => $_POST["gmid"],
			"lat" => $_POST["lat"],
			"lng" => $_POST["lng"],
			"address" => $_POST["address"],
			"postal" => $_POST["postal"]
		);

		foreach ($inputData as $key => $value) {
			if( isset( $_POST["submit"] ) ) {
				if ( !empty( $_POST[$key] ) ) {
					$new_value = esc_attr( $value );
					//update in wp db
					update_option( $key, $new_value ); ?>
					<div id="settings-error-settings-updated" class="updated settings-error notice is-dismissable">
						<p><strong><?php _e( "Inställningarna sparades", "fed16" ); ?></strong></p>
						<button type="button" class="notice-dismiss"></button>
					</div> <?php
				}

			}
		}

		$form = array(
			"name" => "Namn",
			"gaid" => "Google Analytics Tracking ID",
			"gmid" => "Google Maps Tracking ID",
			"lat" => "Latitud",
			"lng" => "Longitud",
			"address" => "Gatuadress",
			"postal" => "Postnummer & postort"
		);
		?>

		<form method="post">
			<h2><?php _e( "Inställnignar för Google Analytics, Google Maps och adress", "fed16" ); ?></h2>
			<table class="form-table">
				<tbody> <?php
					foreach ($form as $key => $value) { ?>
						<tr>
							<th scope="row"><label for="<?php $key; ?>"><?php _e( $value, "fed16" ); ?></label></th>
							<td>
								<input type="text" name="<?php $key; ?>" id="<?php $key; ?>" value="<?php echo get_option('$key'); ?>">
							</td>
						</tr> <?php
					} ?>
				</tbody>
			</table>
			<p class="submit">
				<input type="submit" name="submit" id="submit" value="<?php _e( "Spara ändringarna", "fed16" ); ?>" class="button button-primary">
			</p>
		</form> <?php

		?>


	</div>

	<?php
}


 ?>
