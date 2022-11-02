<?php

/**
 * Property
 */
function custom_post_type_projects() {

  $name = 'Projects';
  $plural = 'Projects';
  $singular = 'Project';

  $labels = array(
    'name'                  => _x( $name, 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( $singular, 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( $name, 'text_domain' ),
    'name_admin_bar'        => __( $name, 'text_domain' ),
    'archives'              => __( $singular . ' Archives', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent ' . $singular .  ':', 'text_domain' ),
    'all_items'             => __( 'All ' . $plural, 'text_domain' ),
    'add_new_item'          => __( 'Add New ' . $singular, 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New ' . $singular, 'text_domain' ),
    'edit_item'             => __( 'Edit ' . $singular, 'text_domain' ),
    'update_item'           => __( 'Update ' . $singular, 'text_domain' ),
    'view_item'             => __( 'View ' . $singular, 'text_domain' ),
    'search_items'          => __( 'Search ' .$singular, 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this ' . $singular, 'text_domain' ),
    'items_list'            => __( $plural . ' list', 'text_domain' ),
    'items_list_navigation' => __( $plural . ' list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter ' . $plural . ' list', 'text_domain' ),
  );

  $args = array(
    'label'                 => __( $name, 'text_domain' ),
    'description'           => __( '', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'page-attributes' ),
    'taxonomies'            => array( '' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 4,
    'menu_icon'             => 'dashicons-images-alt',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'show_in_rest'          => true,
    'rewrite'               => array( 'slug' => 'project', 'with_front' => false ),
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
    'show_in_graphql'       => true,
    'graphql_single_name'   => 'project',
    'graphql_plural_name'   => 'projects'
 );

  register_post_type( 'project', $args );

}

add_action( 'init', 'custom_post_type_projects', 0 );


/**
* Displain Taxonomies
*/
function category_taxonomies() {

  $name = 'Category';
  $plural = 'Categories';
  $singular = 'Category';

  $labels = array(
      'name'              => _x($name, 'taxonomy general name', 'textdomain'),
      'singular_name'     => _x($name, 'taxonomy singular name', 'textdomain'),
      'menu_name'         => __($name, 'text_domain' ),
      'name_admin_bar'    => __($name, 'text_domain' ),

      'search_items'      => __('Search' . $plural, 'textdomain'),
      'all_items'         => __('All' . $plural, 'textdomain'),
      'parent_item'       => __('Parent' . $singular, 'textdomain'),
      'parent_item_colon' => __('Parent' . $singular, 'textdomain'),
      'edit_item'         => __('Edit' . $singular, 'textdomain'),
      'update_item'       => __('Update' . $singular, 'textdomain'),
      'add_new_item'      => __('Add New ' . $singular, 'textdomain'),
      'new_item_name'     => __('New ' . $singular . 'Name', 'textdomain'),
  );

  $args = array(
      'hierarchical'      => true,
      'labels'            => $labels,
      'show_ui'           => true,
      'show_admin_column' => true,
      'query_var'         => true,
      'public'             => true,
      'publicly_queryable' => true,
      'rewrite'           => array('slug' => 'category'),
      'show_in_graphql' => true,
      'graphql_single_name' => 'category',
      'graphql_plural_name' => 'Categories',
  );

  register_taxonomy('category', array('project'), $args);

}

add_action( 'init', 'category_taxonomies', 0 );