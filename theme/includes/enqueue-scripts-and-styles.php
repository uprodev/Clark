<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
function clark_styles()
{
  wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('font', get_template_directory_uri() . '/css/font.css');
  wp_enqueue_style('fancybox', get_template_directory_uri() . '/css/jquery.fancybox.min.css');
  wp_enqueue_style('nice-selec', get_template_directory_uri() . '/css/nice-select.css');
  wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css', array(), time());
  wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), time());
}

add_action('wp_enqueue_scripts', 'clark_styles');

function clark_script()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), null, true);
  wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), null, true);
  wp_enqueue_script('sticky', get_template_directory_uri() . '/js/jquery.sticky.js', array(), null, true);
  wp_enqueue_script('rellax', get_template_directory_uri() . '/js/rellax.min.js', array(), null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array(), time(), true);
}

add_action('wp_enqueue_scripts', 'clark_script');
