<?php


//Menu
 function wpb_theme_setup() {
   //nav menus
   register_nav_menus(array(
     'primary' => __('Primary Menu')
   ));
 }



function theme_option_setup() {
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Menu Navigation');


}


//CUSTOM FONTS
function custom_add_google_fonts() {
     wp_enqueue_style( 'custom-google-fonts', 'https://fonts.googleapis.com/css?family=Rubik&subset=latin-ext', false );
}


add_action('init', 'theme_option_setup');
add_action('wp_enqueue_scripts', 'custom_add_google_fonts');
add_action('after_setup_theme', 'wpb_theme_setup');

 ?>
