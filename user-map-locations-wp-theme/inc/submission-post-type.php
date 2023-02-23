<?php

/**
 * Register custom post types
 */
function register_submission_post_type()
{

  $labels = array(
    'name'                  => _x('Submissions', 'Post type general name', 'user-map-locations'),
    'singular_name'         => _x('Submission', 'Post type singular name', 'user-map-locations'),
    'menu_name'             => _x('Submissions', 'Admin Menu text', 'user-map-locations'),
    'name_admin_bar'        => _x('Submission', 'Add New on Toolbar', 'user-map-locations'),
    'add_new'               => __('Add New', 'user-map-locations'),
    'add_new_item'          => __('Add New Submission', 'user-map-locations'),
    'new_item'              => __('New Submission', 'user-map-locations'),
    'edit_item'             => __('Edit Submission', 'user-map-locations'),
    'view_item'             => __('View Submission', 'user-map-locations'),
    'all_items'             => __('All Submissions', 'user-map-locations'),
    'search_items'          => __('Search Submissions', 'user-map-locations'),
    'parent_item_colon'     => __('Parent Submissions:', 'user-map-locations'),
    'not_found'             => __('No submissions found.', 'user-map-locations'),
    'not_found_in_trash'    => __('No submissions found in Trash.', 'user-map-locations'),
    'featured_image'        => _x('Submission Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'user-map-locations'),
    'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'user-map-locations'),
    'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'user-map-locations'),
    'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'user-map-locations'),
    'archives'              => _x('Submission archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'user-map-locations'),
    'insert_into_item'      => _x('Insert into submission', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'user-map-locations'),
    'uploaded_to_this_item' => _x('Uploaded to this submission', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'user-map-locations'),
    'filter_items_list'     => _x('Filter submissions list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'user-map-locations'),
    'items_list_navigation' => _x('Submissions list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'user-map-locations'),
    'items_list'            => _x('Submissions list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'user-map-locations'),
  );

  $args = array(
    'labels'             => $labels,
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array('slug' => 'submission'),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => null,
    'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments'),
  );

  register_post_type('submission', $args);
}

add_action('init', 'register_submission_post_type');
