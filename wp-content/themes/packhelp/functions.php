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
});