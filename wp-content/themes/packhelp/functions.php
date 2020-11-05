<?php


// webpack scripts
if (defined('WEBPACK_SERVER')) {
    add_action('wp_enqueue_scripts', function () {
        wp_register_script('main-js', WEBPACK_SERVER . 'bundle.min.js', '', null);
        wp_enqueue_script('main-js');

        wp_register_style('main-css', WEBPACK_SERVER . 'bundle.min.css');
        wp_enqueue_style('main-css');
    });
}

add_action( 'wp_enqueue_scripts', function() {
	wp_register_style('foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation.min.css');
	wp_enqueue_style('foundation');

	wp_register_style('motion-ui', 'https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.css');
	wp_enqueue_style('motion-ui');

	wp_register_style('foundation-prototype', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/css/foundation-prototype.min.css', ['foundation']);
	wp_enqueue_style('foundation-prototype');

	wp_register_style('foundation-icons', 'https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css', ['foundation']);
	wp_enqueue_style('foundation-icons');

	wp_register_script( 'foundation', 'https://cdnjs.cloudflare.com/ajax/libs/foundation/6.4.3/js/foundation.min.js', ['jquery'], '', true );
	wp_add_inline_script( 'foundation', 'jQuery(document).foundation();');
	wp_enqueue_script('foundation');

	wp_register_script( 'motion-ui', 'https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.2.3/motion-ui.min.js', ['jquery'], '', true );
	wp_enqueue_script('motion-ui');

	wp_register_script( 'calculator', get_template_directory_uri() .'/calculator.js', ['jquery'] );
	if(get_post_type() == 'product') {
		wp_enqueue_script('calculator');
	}

});

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', ['width' => 130, 'height' => 38] );
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails', ['post', 'product'] );

add_image_size( 'product-large', 650, 350, true );
add_image_size( 'product-featured', 500, 400, true );
add_image_size( 'product-small', 450, 250, true );

add_action( 'init', function() {
	$args = [
		'label'                 => 'Product',
		'supports'              => ['title', 'editor', 'thumbnail'],
		'taxonomies'            => ['category'],
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
	];

	register_post_type( 'product', $args );

	register_taxonomy( 'sizes', 'product', [
		'label' => 'Sizes',
	] );
} );