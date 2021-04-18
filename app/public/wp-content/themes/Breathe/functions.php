<?php

function gursikhi_files() {
  wp_enqueue_style('gursikhi_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'gursikhi_files');

function gursikhi_features () {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
  register_nav_menu('footerLocationOne', 'Footer Location One');

  add_theme_support('title-tag');
}

add_action('after_setup_theme','gursikhi_features');


function google_fonts() {
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300&display=swap" rel="stylesheet', false );
}
add_action( 'wp_enqueue_scripts', 'google_fonts' );