<?php
/*
Prodaq Child Functions file.
If you intend to add in additional php functions to your customized version of prodaq, add it below.
See https://developer.wordpress.org/themes/basics/theme-functions/ to learn more about the functions.php file.
--------------------------
*/
function child_theme_enqueue_styles() {

	$parent_style = 'parent-style';

	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/library/css/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style )
	);
}
add_action( 'wp_enqueue_scripts', 'child_theme_enqueue_styles' );


// Template Overides
// Leave commented out unless you plan on changing fields for each post type. This is a work in progress for the child theme mods. It knows where to find WPAlchemy from the parent so we're just redefining the setup with our revised template location in the child.
// Campaigns
// include( 'library/_prodaq/campaigns.php');
// Participants
// include( 'library/_prodaq/participants.php');
// Personas
// include( 'library/_prodaq/personas.php');
