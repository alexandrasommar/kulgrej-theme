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
		<h1><?php _e( "Theme settings", "fed16" ); ?></h1>

		<?php
		$gaid = "";
		if( isset($_POST["submit"] ) ) {
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

		$gaid = get_option( "gaid" );
		 ?>

		<form method="post">
			<h2><?php _e( "Google Analytics Tracking Code", "fed16" ); ?>Google Analytics</h2>
			<table class="form-table">
				<tbody>
					<tr>
						<th scope="row"><label for="gaid"><?php _e( "GA Tracking ID", "fed16" ); ?></label></th>
						<td>
							<input type="text" name="gaid" id="gaid" value="<?php echo $gaid; ?>">
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
