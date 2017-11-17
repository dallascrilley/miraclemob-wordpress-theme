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
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerMenuLocationOne', 'Footer Location One');
  register_nav_menu('footerMenuLocationTwo', 'Footer Location Two');
  add_theme_support('title-tag');
}

// Hook functions to wp actions
add_action('wp_enqueue_scripts', 'miraclemob_files');
add_action('after_setup_theme', 'miraclemob_features');

function miraclemob_post_types() {

  // Event Post Type
  register_post_type('event', array(
    'supports' => array('title', 'editor', 'excerpt'),
    'rewrite' => array('slug' => 'events'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Events',
      'add_new_item' => 'Add New Event',
      'edit_item' => 'Edit Event',
      'all_items' => 'All Events',
      'singular_name' => 'Event'
    ),
    'menu_icon' => 'dashicons-calendar'
  ));

  // Miracle Post Type
  register_post_type('miracle', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'miracles'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Miracles',
      'add_new_item' => 'Add New Miracle',
      'edit_item' => 'Edit Miracle',
      'all_items' => 'All Miracles',
      'singular_name' => 'Miracle'
    ),
    'menu_icon' => 'dashicons-heart'
  ));

}

add_action('init', 'miraclemob_post_types');

function mm_adjust_queries($query) {
  if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
    $today = date('Ymd');
    $query->set('meta_key', 'event_date');
    $query->set('orderby', 'meta_value_num');
    $query->set('order', 'ASC');
    $query->set('meta_query', array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            ));
  }
}
add_action('pre_get_posts', 'mm_adjust_queries');
