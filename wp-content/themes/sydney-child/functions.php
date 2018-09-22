<?php
//fonction qui charge la feuille de style du thème parent
function wpm_enqueue_styles(){
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
//exécution de la fonction
add_action( 'wp_enqueue_scripts', 'wpm_enqueue_styles' );

//changement permaliens par défaut EPL Immobilier
define('EPL_PROPERTY_SLUG', 'ventes');
define('EPL_RENTAL_SLUG', 'locations');

//changement labels pages EPL Immobilier
//Property => Ventes
function set_property_labels($labels) {
	$labels = array(
		'name'			=>	__('Nos chalets à la vente', 'epl'),
		'singular_name'		=>	__('Vente', 'epl'),
		'menu_name'		=>	__('Ventes', 'epl'),
		
	);
	return $labels;
}
add_filter('epl_property_labels', 'set_property_labels');

//Rental => Locations
function set_rental_labels($labels) {
	$labels = array(
		'name'			=>	__('Nos chalets à la location', 'epl'),
		'singular_name'		=>	__('Location', 'epl'),
		'menu_name'		=>	__('Locations', 'epl'),
		
	);
	return $labels;
}
add_filter('epl_rental_labels', 'set_rental_labels');

?>


