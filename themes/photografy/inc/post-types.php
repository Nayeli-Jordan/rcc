<?php

// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


add_action('init', function(){

	// Galería
	$labels = array(
		'name'          => 'Galería',
		'singular_name' => 'Galería',
		'add_new'       => 'Nueva galería',
		'add_new_item'  => 'Nueva galería',
		'edit_item'     => 'Editar galería',
		'new_item'      => 'Nueva galería',
		'all_items'     => 'Todo',
		'view_item'     => 'Ver galería',
		'search_items'  => 'Buscar galería',
		'not_found'     => 'No hay galería.',
		'menu_name'     => 'Galería'
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'galeria' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 6,
		'supports'           => array( 'title', 'thumbnail', 'editor' ),
		'menu_icon' 		 => 'dashicons-format-gallery'
	);
	register_post_type( 'galeria', $args );	

});