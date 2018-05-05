<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////

add_action('init', function(){

	// Galery
	if( ! get_page_by_path('gallery') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Galería',
			'post_name'   => 'gallery',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// talleres
	if( ! get_page_by_path('talleres') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Talleres',
			'post_name'   => 'talleres',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// bio
	if( ! get_page_by_path('bio') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Bio',
			'post_name'   => 'bio',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// tienda
	if( ! get_page_by_path('tienda') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Tienda',
			'post_name'   => 'tienda',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}

	// blog
	if( ! get_page_by_path('blog') ){
		$page = array(
			'post_author' => 1,
			'post_status' => 'publish',
			'post_title'  => 'Blog',
			'post_name'   => 'blog',
			'post_type'   => 'page'
		);
		wp_insert_post( $page, true );
	}


});