<?php


// TAXONOMIES ////////////////////////////////////////////////////////////////////////
add_action( 'init', 'custom_taxonomies_callback', 0 );
function custom_taxonomies_callback(){

	// Sección galería
	if( ! taxonomy_exists('seccion')){

		$labels = array(
			'name'              => 'Sección galería',
			'singular_name'     => 'Sección galería',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar sección',
			'update_item'       => 'Actualizar sección',
			'add_new_item'      => 'Nueva sección',
			'menu_name'         => 'Seccióngalería'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'seccion' ),
		);

		register_taxonomy( 'seccion', 'galeria', $args );
	}	

	// Columnas imagen galería
	if( ! taxonomy_exists('columnas')){

		$labels = array(
			'name'              => 'Columnas galería',
			'singular_name'     => 'Columnas galería',
			'search_items'      => 'Buscar',
			'all_items'         => 'Todos',
			'edit_item'         => 'Editar columnas',
			'update_item'       => 'Actualizar columnas',
			'add_new_item'      => 'Nueva columnas',
			'menu_name'         => 'Columnas galería'
		);
		$args = array(
			'hierarchical'      => true,
			'labels'            => $labels,
			'show_ui'           => true,
			'show_admin_column' => true,
			'show_in_nav_menus' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'columnas' ),
		);

		register_taxonomy( 'columnas', 'galeria', $args );
	}	

}