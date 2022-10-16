<?php 

function befit_register_classes() {
	$args = array(
		'public' => true,
		'label'  => __( 'Classes', 'befit' ),
        'supports' => ['title', 'editor', 'thumbnail']
	);
	register_post_type( 'class', $args );
}
add_action( 'init', 'befit_register_classes' );