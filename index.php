<?php
/**
* Plugin Name: Kundcase
* Description: Custom Post Types for Kulgrejs kundcase
* Author: Jessica Niemi & Alexandra Sommar
* Author URI:
* Version: 1.0
* Plugin URI:
**/

//Säkerhetsgrej
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

/*
require "namnet_pa_fil.php";
// i filen säger vi att det finns en funktion somheter init_cpt_prtfolio();
*/

// När pluginet aktiveras så hookar man på denna funktion, som körs.
add_action( 'init', 'kundcase_setup_plugin' ); // sista ska vara unikt

function kundcase_setup_plugin() {
    // om koden ligger i en annan fil, anropa bara funktionen init_cpt_portfolio();

//rubriker för knappar och
    $labels = array(
        "name"                  => "Kundcases",
        "singular_name"         => "Kundcase",
        "add_new"               => "Lägg till",
        "add_new_item"          => "Lägg till nytt kundcase",
        "edit_item"             => "Redigera",
        "new_item"              => "Lägg till nytt",
        "all_items"             => "Alla kundcases",
        "view_items"            => "Visa kundcases",
        "search_items"          => "Sök kundcase",
        "not_found"             => "Kunde inte hitta något kundcase",
        "not_found_in_trash"    => "Kunde inte hitta något kundcase i skräpkorgen",
        "menu_name"             => "Kundcase"
    );

// andra inställningar för CPT:n
    $args = array(
        "labels"        => $labels,
        "description"   => "Kundcase",
        "public"        => true,
        "menu_position" => 5, //säger var den hamnar i wp vänstermenyn
        "menu_icon"     => "dashicons-hammer", //man kan lägga in länk till ikon
        "supports"      => array( // Vilket stöd man vill ha, man kanske inte vill ha alla delar på sin custom post type
                            "title",
                            "editor",
                            "thumbnail",
                            "author",
                            "excerpt",
                            "page_attributes"
                        ),
        "has_archive"   => true,
        "rewrite"       => array(
                                "slug"          => "kundcase", //
                                "width_front"   =>true
                            )
    );

// Få CPT:n att synas i menyn (samt registrera den)
//OBS skriv itne för långa namn, då funker det inte
register_post_type( "kundcase_cpt_kulgrej", $args );


// Förfarande:  1. Labels 2. Inställningar 3. Registrera taxonomin

$labels = array(
			"name"				=> "Projekttyp",
			"singular_name"		=> "Projekttyp",
			"search_items" 		=> "Projekttyp",
			"all_items"			=> "All project types",
			"parent_item"		=> "Huvudtyp",
			"parent_item_colon"	=> "Huvudtyp:",
			"edit_item"			=> "Edit project type",
			"update_item"		=> "Update project type",
			"add_new_item"		=> "Add New project type",
			"new_item_name"		=> "New project type",
			"menu_name"			=> "Project types"
);

$args = array(
			"labels"		=> $labels,
			"hierarchical"	=> true // false=taggar true=type
);

//aktivera taxonomin
register_taxonomy("kundcase_projecttype", "kundcase_cpt_kulgrej", $args);

}





 ?>
