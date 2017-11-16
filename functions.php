<?php

// Enqueue function for global scripts and styles
function miraclemob_files() {
  wp_enqueue_script('main-miraclemob-javascript', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);
  wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
  wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('miraclemob_main_styles', get_stylesheet_uri());
}

// Add title tag to pages by default
function miraclemob_features() {
  add_theme_support('title-tag');
}

// Hook functions to wp actions
add_action('wp_enqueue_scripts', 'miraclemob_files');
add_action('after_setup_theme', 'miraclemob_features');

?>
