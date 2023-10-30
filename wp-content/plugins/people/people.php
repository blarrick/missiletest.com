<?php

/*
* Plugin Name: People Taxonomy
* Description: A short example showing how to add a taxonomy called Course.
* Version: 1.1
* Author: Bryan Larrick
*/

function wporg_register_taxonomy_people() {
	 $labels = array(
		 'name'              => _x( 'Some of Those Responsible', 'taxonomy general name' ),
		 'singular_name'     => _x( 'People', 'taxonomy singular name' ),
		 'search_items'      => __( 'Search People' ),
		 'all_items'         => __( 'All People' ),
		 'parent_item'       => __( 'Parent People' ),
		 'parent_item_colon' => __( 'Parent People:' ),
		 'edit_item'         => __( 'Edit People' ),
		 'update_item'       => __( 'Update People' ),
		 'add_new_item'      => __( 'Add New Person' ),
		 'new_item_name'     => __( 'New Person Name' ),
		 'menu_name'         => __( 'People' ),
	 );
	 $args   = array(
		 'hierarchical'      => false, // make it hierarchical (like categories)
		 'labels'            => $labels,
		 'show_ui'           => true,
		 'show_admin_column' => true,
		 'query_var'         => true,
		 'rewrite'           => [ 'slug' => 'people' ],
	 );
	 register_taxonomy( 'people', [ 'post' ], $args );
}
add_action( 'init', 'wporg_register_taxonomy_people' );

?>