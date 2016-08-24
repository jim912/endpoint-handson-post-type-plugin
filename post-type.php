<?php
/*
Plugin Name: Shop post type
Description: Register Shop post type
*/

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "お店",
		"singular_name" => "お店",
		"menu_name" => "お店",
	);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "shop", "with_front" => true, 'ep_mask' => 8192 ),
		"query_var" => true,
		"supports" => array( "title", "editor", "custom-fields", "thumbnail", "author" ),		
	);
	register_post_type( "shop", $args );
	// End of cptui_register_my_cpts()
}

