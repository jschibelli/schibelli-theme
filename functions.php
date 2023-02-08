<?php
function resume_files() {

  // Javascript
  wp_enqueue_script('main-theme-js', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', true);

  // Custom Fonts
  wp_enqueue_style('custom-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');

  // Styles
  wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('resume_main_styles', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('resume_extra_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'resume_files');

// Theme Support
function theme_features() {
  add_theme_support('title-tag'); // Sets the page title in the broswer tab.
}

add_action('after_setup_theme', 'theme_features');