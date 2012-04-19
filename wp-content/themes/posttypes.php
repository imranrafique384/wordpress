<?php

add_action( 'init', 'create_Recipes_type' );
function create_Recipes_type() {
	register_post_type( 'acme_Recipes',
		array(
			'labels' => array(
				'name' => __( 'Recipes' ),
				'singular_name' => __( 'Recipe' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

add_action( 'init', 'create_Photos_type' );
function create_Photos_type() {
	register_post_type( 'acme_Photos',
		array(
			'labels' => array(
				'name' => __( 'Photos' ),
				'singular_name' => __( 'Photo' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}

add_action( 'init', 'create_videos_type' );
function create_videos_type() {
	register_post_type( 'acme_videos',
		array(
			'labels' => array(
				'name' => __( 'videos' ),
				'singular_name' => __( 'video' )
			),
		'public' => true,
		'has_archive' => true,
		)
	);
}
?>