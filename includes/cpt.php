<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly
}

add_action('init', 'register_post_types');
function register_post_types()
{
  register_post_type('cases', array(
    'labels' => array(
      'name' => __('Cases', 'clark'),
      'singular_name' => __('Cases', 'clark'),
      'add_new' => __('Add Case', 'clark'),
      'add_new_item' => __('Add Case', 'clark'),
      'edit_item' => __('Edit Case', 'clark'),
      'new_item' => __('New Case', 'clark'),
      'view_item' => __('View Cases', 'clark'),
      'search_items' => __('Find Case', 'clark'),
      'not_found' => __('Cases not found', 'clark'),
      'not_found_in_trash' => __('No Cases in trash', 'clark'),
      'parent_item' => __('Parent Cases', 'clark'),
      'parent_item_colon' => __('Parent Case:', 'clark'),
      'menu_name' => __('Cases', 'clark'),
      'back_to_items' => __('Go to Cases', 'clark'),
    ),
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_rest' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'cases', 'with_front' => false, 'pages' => true, 'feeds' => false, 'feed' => false),
    'capability_type' => 'post',
    'has_archive' => false,
    'hierarchical' => true,
    'menu_position' => null,
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'page-attributes', 'revisions')
  ));
}
