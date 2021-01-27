<?php

function wp-ebbin_theme_support(){
  add_theme_support('title-tag');
}

add_action('after_setup_theme','wp-ebbin_theme_support');

function wp-ebbin_register_styles(){
  $version = wp_get_theme()->get('Version');
  wp_enqueue_style('wp-ebbin-style', get_template_directory_uri() . '/style.css', array('wp-ebbin-fa'), $version, 'all');
  wp_enqueue_style('wp-ebbin-fa', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css", array(), '5.15.2', 'all');
}

add_action('wp_enqueue_scripts', 'wp-ebbin_register_styles');

function wp-ebbin_register_scripts(){

  wp_enqueue_script('wp-ebbin-actiontag', 'http://d1aqhv4sn5kxtx.cloudfront.net/actiontag/at.js', array(),true);
  wp_enqueue_script('wp-ebbin-custom', get_template_directory_uri() . '/assets/js/script.js', array(),true);
  wp_enqueue_script('wp-ebbin-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '3.5.1',true);

}

add_action('wp_enqueue_scripts', 'wp-ebbin_register_scripts');

?>
