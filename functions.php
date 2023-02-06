<?php
function resume_files() {
  wp_enqueue_style('resume_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'resume_files');