<?php

  add_image_size( 'gallery-xs', 85  , 35,  true );
  add_image_size( 'gallery-sm', 320 , 320, true );
  add_image_size( 'gallery-lg', 1280, 720, true );
  add_image_size( 'gallery-lg', 1280, 720, true );

  function register_my_menu() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
  }
  add_action( 'init', 'register_my_menu' );
  add_theme_support( 'post-thumbnails' );

  function create_social() {

    $labels = array(
      'name'                => _x( 'Social Posts', 'Post Type General Name', 'social' ),
      'singular_name'       => _x( 'Social Post', 'Post Type Singular Name', 'social' ),
      'menu_name'           => __( 'Social', 'social' ),
      'name_admin_bar'      => __( 'Socaial', 'social' ),
      'parent_item_colon'   => __( 'Parent Item:', 'social' ),
      'all_items'           => __( 'All Items', 'social' ),
      'add_new_item'        => __( 'Add New Item', 'social' ),
      'add_new'             => __( 'Add New', 'social' ),
      'new_item'            => __( 'New Item', 'social' ),
      'edit_item'           => __( 'Edit Item', 'social' ),
      'update_item'         => __( 'Update Item', 'social' ),
      'view_item'           => __( 'View Item', 'social' ),
      'search_items'        => __( 'Search Item', 'social' ),
      'not_found'           => __( 'Not found', 'social' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'social' ),
    );
    $rewrite = array(
      'slug'                => 'social',
      'with_front'          => true,
      'pages'               => true,
      'feeds'               => true,
    );
    $args = array(
      'label'               => __( 'social', 'social' ),
      'description'         => __( 'Social Content', 'social' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'thumbnail', 'post-formats', ),
      'taxonomies'          => array( 'category', 'post_tag' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'menu_position'       => 5,
      'show_in_admin_bar'   => true,
      'show_in_nav_menus'   => true,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'rewrite'             => $rewrite,
      'capability_type'     => 'page',
    );
    register_post_type( 'social', $args );

  }

  // Hook into the 'init' action
  add_action( 'init', 'create_social', 0 );