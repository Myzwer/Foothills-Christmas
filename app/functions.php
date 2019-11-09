<?php


// Main Style Sheet
wp_enqueue_style( 'style', get_stylesheet_uri() );

// Foundation CSS
function load_foundation() {
    wp_enqueue_style( 'foundation.min', get_template_directory_uri() . '/assets/css/foundation.min.css');
}
add_action('wp_enqueue_scripts', 'load_foundation');

//Main stylesheet for general code
function load_main_style() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');
}
add_action('wp_enqueue_scripts', 'load_main_style');


//Font-Awesome Icons
function load_font_awesome() {
    wp_register_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css' );
    wp_enqueue_style('Font_Awesome');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');



//Foudnation JS

wp_enqueue_script( 'jquery' );

function foundation_js_loadin() {
    wp_enqueue_script( 'foundation.min', get_template_directory_uri() . '/assets/js/vendor/foundation.min.js');
}
add_action('wp_enqueue_scripts', 'foundation_js_loadin');

function what_input_loadin() {
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js');
}
add_action('wp_enqueue_scripts', 'what_input_loadin');


//custom loadin
function custom_js_loadin() {
    wp_enqueue_script( 'custom', get_template_directory_uri() . '/assets/js/custom.js');
}
add_action('wp_enqueue_scripts', 'custom_js_loadin');


//Font-Awesome Icons
function icon_css() {
    wp_enqueue_style( 'fontawesome.min', get_template_directory_uri() . '/assets/fonts/fontawesome.min.css');
}
add_action('wp_enqueue_scripts', 'icon_css');

//Font-Awesome Icons
function fc_icon_css() {
    wp_enqueue_style( 'fc_icon', get_template_directory_uri() . '/assets/fonts/fc_icon.css');
}
add_action('wp_enqueue_scripts', 'fc_icon_css');


//Gotham Font
function gotham_font() {
    wp_enqueue_style( 'gothamfont', get_template_directory_uri() . '/assets/fonts/gothamfont.css' );
}
add_action( 'wp_enqueue_scripts', 'gotham_font' );

?>