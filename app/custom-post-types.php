<?php

/** @var  \Herbert\Framework\Application $container */
\add_action( 'init', function() {

  $labels = array(
    'name'                => _x('Sponsored Postss', 'Post Type General Name', 'text_domain'),
    'singular_name'       => _x('Sponsored Posts', 'Post Type Singular Name', 'text_domain'),
    'menu_name'           => __('Sponsored Posts', 'text_domain'),
    'parent_item_colon'   => __('Parent Item:', 'text_domain'),
    'all_items'           => __('All Sponsored Postss', 'text_domain'),
    'view_item'           => __('View Sponsored Posts', 'text_domain'),
    'add_new_item'        => __('Add New Sponsored Posts', 'text_domain'),
    'add_new'             => __('Add New', 'text_domain'),
    'edit_item'           => __('Edit Sponsored Posts', 'text_domain'),
    'update_item'         => __('Update Sponsored Posts', 'text_domain'),
    'search_items'        => __('Search Sponsored Postss', 'text_domain'),
    'not_found'           => __('Not found', 'text_domain'),
    'not_found_in_trash'  => __('Not found in Trash', 'text_domain'),
  );

  $args = array(
    'label'               => __('sponsored_posts post', 'text_domain'),
    'description'         => __('Sponsored content creator', 'text_domain'),
    'labels'              => $labels,
    'supports'            => array('title','thumbnail','revisions','author'),
    'taxonomies'          => array('category','post_tag'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'show_in_nav_menus'   => true,
    'show_in_admin_bar'   => true,
    'menu_position'       => 4,
    'menu_icon'           => 'dashicons-awards',
    'can_export'          => true,
    'has_archive'         => false,
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type' => 'sponsored_posts',
    'capabilities' => array(
      'publish_posts' => 'publish_sponsored_posts',
      'edit_posts' => 'edit_sponsored_posts',
      'edit_others_posts' => 'edit_others_sponsored_posts',
      'delete_posts' => 'delete_sponsored_posts',
      'delete_private_posts' => 'delete_private_sponsored_posts',
      'delete_others_posts' => 'delete_others_sponsored_posts',
      'read_private_posts' => 'read_private_sponsored_posts',
      'edit_post' => 'edit_sponsored_posts',
      'delete_post' => 'delete_sponsored_posts',
      'read_post' => 'read_sponsored_posts',
    ),
    'map_meta_cap' => true,
    'rewrite' => false
  );

  \register_post_type('sponsored_posts', $args);
}
,0);
