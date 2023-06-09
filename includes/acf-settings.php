<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

add_filter('acf/settings/save_json', 'clark_acf_json_save_point');
function clark_acf_json_save_point($path)
{
  // update path
  $path = get_stylesheet_directory() . '/acf-json';
  // return
  return $path;
}

/* ACF option pages*/
if (function_exists('acf_add_options_page')) {
  acf_add_options_page(array(
    'page_title' => 'Theme Settings',
    'menu_slug' => 'theme-settings',
    'icon_url' => 'dashicons-admin-generic',
    'redirect' => false
  ));
}
