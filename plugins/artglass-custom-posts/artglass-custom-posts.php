<?php
   /*
   Plugin Name: ARtGlass Group Custom Post Types
   Plugin URI: https://knownagency.com
   description: Provides support for custom post types on ARtGlass Group's website
   Version: 1.0
   Author: KNOWN
   Author URI: https://knownagency.com
   License: GPL2
   */

  function custom_post_work() {
    $labels = array(
      'name'               => _x( 'Our Work', 'post type general name' ),
      'singular_name'      => _x( 'Our Work', 'post type singular name' ),
      'add_new'            => _x( 'Add New Work', 'work' ),
      'add_new_item'       => __( 'Add New Work Item' ),
      'edit_item'          => __( 'Edit Work' ),
      'new_item'           => __( 'New Work' ),
      'all_items'          => __( 'All Work' ),
      'view_item'          => __( 'View Work' ),
      'search_items'       => __( 'Search Work' ),
      'not_found'          => __( 'No items found' ),
      'not_found_in_trash' => __( 'No items found in the Trash' ), 
      'menu_name'          => 'Our Work'
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 5,
      'has_archive'   => true,
    );
    register_post_type( 'work', $args ); 
    remove_post_type_support( 'work', 'editor');

  }
  add_action( 'init', 'custom_post_work' );

  function custom_post_team() {
    $labels = array(
      'name'               => _x( 'Team Members', 'post type general name' ),
      'singular_name'      => _x( 'Team Member', 'post type singular name' ),
      'add_new'            => _x( 'Add New Team Member', 'work' ),
      'add_new_item'       => __( 'Add New Team Member' ),
      'edit_item'          => __( 'Edit Team Member' ),
      'new_item'           => __( 'New Team Member' ),
      'all_items'          => __( 'All Team Members' ),
      'view_item'          => __( 'View Team Member' ),
      'search_items'       => __( 'Search Team Members' ),
      'not_found'          => __( 'No items found' ),
      'not_found_in_trash' => __( 'No items found in the Trash' ), 
      'menu_name'          => 'Team'
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 6,
      'has_archive'   => true,
    );
    register_post_type( 'team', $args ); 
    remove_post_type_support( 'team', 'editor');
  }
  add_action( 'init', 'custom_post_team' );

  function custom_post_press() {
    $labels = array(
      'name'               => _x( 'Press', 'post type general name' ),
      'singular_name'      => _x( 'Press', 'post type singular name' ),
      'add_new'            => _x( 'Add New Press', 'work' ),
      'add_new_item'       => __( 'Add New Press' ),
      'edit_item'          => __( 'Edit Press' ),
      'new_item'           => __( 'New Press' ),
      'all_items'          => __( 'All Press' ),
      'view_item'          => __( 'View Press' ),
      'search_items'       => __( 'Search Press' ),
      'not_found'          => __( 'No items found' ),
      'not_found_in_trash' => __( 'No items found in the Trash' ), 
      'menu_name'          => 'Press'
    );
    $args = array(
      'labels'        => $labels,
      'public'        => true,
      'menu_position' => 8,
      'has_archive'   => false,
    );
    register_post_type( 'press', $args ); 
    remove_post_type_support( 'press', 'editor');
  }
  add_action( 'init', 'custom_post_press' );


  function taxonomy_press() {
    $labels = array(
      'name'              => _x( 'Press Categories', 'taxonomy general name' ),
      'singular_name'     => _x( 'Press Category', 'taxonomy singular name' ),
      'search_items'      => __( 'Search Press Categories' ),
      'all_items'         => __( 'All Press Categories' ),
      'parent_item'       => __( 'Parent Press Category' ),
      'parent_item_colon' => __( 'Parent Press Category:' ),
      'edit_item'         => __( 'Edit Press Category' ), 
      'update_item'       => __( 'Update Press Category' ),
      'add_new_item'      => __( 'Add New Press Category' ),
      'new_item_name'     => __( 'New Press Category' ),
      'menu_name'         => __( 'Press Categories' ),
    );
    $args = array(
      'labels' => $labels,
      'hierarchical' => false,
    );
    register_taxonomy( 'press_category', 'press', $args );
  }
  add_action( 'init', 'taxonomy_press', 0 );









?>