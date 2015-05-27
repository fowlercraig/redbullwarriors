<?php

  add_image_size( 'gallery-xs', 85  , 35,  true );
  add_image_size( 'gallery-sm', 320 , 320, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'gallery-lg', 1280, 720, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_my_menu' );

  // Register Custom Post Type
  function create_social() {

    $labels = array(
      'name'                => _x( 'Social', 'Post Type General Name', 'text_domain' ),
      'singular_name'       => _x( 'Social', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'           => __( 'Social', 'text_domain' ),
      'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
      'all_items'           => __( 'All Items', 'text_domain' ),
      'view_item'           => __( 'View Item', 'text_domain' ),
      'add_new_item'        => __( 'Add New Person', 'text_domain' ),
      'add_new'             => __( 'Add New', 'text_domain' ),
      'edit_item'           => __( 'Edit Item', 'text_domain' ),
      'update_item'         => __( 'Update Item', 'text_domain' ),
      'search_items'        => __( 'Search Item', 'text_domain' ),
      'not_found'           => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
    );
    $args = array(
      'label'               => __( 'social', 'text_domain' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'page',
    );
    register_post_type( 'social', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'create_social', 0 );
