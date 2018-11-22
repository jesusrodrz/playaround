<?php
$post_types['golf_courses'] = array(
  'name'=>'golf_courses',
  'post_id' =>'golf_courses',
  'custom-fields' => array(
    $custom_fields['text']
  ) ,
  'args' =>  array(
    'labels' => array(
      'name' => __( 'Golf Courses', 'sky-tulum' ),
      'singular_name' => __( 'Course', 'sky-tulum' ),
      'add_new_item' => __( 'Add new course', 'sky-tulum' ),
      'edit_item' => __( 'Edit course', 'sky-tulum' ),
      'new_item' => __( 'New course', 'sky-tulum' ),
      'view_item' => __( 'View', 'sky-tulum' ),
      'search_items' => __( 'Search course', 'sky-tulum' ),
      'not_found' => __( 'Not found', 'sky-tulum' ),
      'not_found_in_trash' => __( 'Not found in trash', 'sky-tulum' ),
    ),
    'supports' => array(
      'title',
      'thumbnail',
      'editor'
    ),
    'supports_reg_tax' => array(
      'category' => '',
      'post_tag' => '',
    ),
    'capability_type' => 'post',
    'map_meta_cap' => true,
    'description' => 'View new signals',
    'menu_position' => 5,
    'public' => true,
    'exclude_from_search' => true,
    'show_in_admin_bar'   => false,
    'show_in_nav_menus'   => false,
    'publicly_queryable'  => false,
    'query_var'           => false,
    'hierarchical' => false,
    'has_archive' => false,
    'rewrite' => array(
      'with_front' => true,
      'feeds' => false,
      'pages' => true,
      'ep_mask' => 0,
      'slug'=>__( 'golf-courses', 'sky-tulum' )
    ),
    'query_var' => true,
    'can_export' => true,
    'show_in_rest' => true,
    'rest_base' => 'golf-courses',
    'capabilities' => array(
      'create_posts'
    ),
    'menu_icon' => 'dashicons-list-view',
  )
);
// $post_types['specs'] = array(
//   'name'=>'specs',
//   'post_id' =>'specs',
//   'custom-fields' => array(
//     $custom_fields['level'],
//   ) ,
//   'args' =>  array(
//     'labels' => array(
//       'name' => __( 'Niveles', 'sky-tulum' ),
//       'singular_name' => __( 'Nivel', 'sky-tulum' ),
//       'add_new_item' => __( 'Agregar nuevo nivvel', 'sky-tulum' ),
//       'edit_item' => __( 'Editar nivel', 'sky-tulum' ),
//       'new_item' => __( 'Nuevo nivel', 'sky-tulum' ),
//       'view_item' => __( 'Ver nivel', 'sky-tulum' ),
//       'search_items' => __( 'Buscar nivel', 'sky-tulum' ),
//       'not_found' => __( 'nivel no encontrado', 'sky-tulum' ),
//       'not_found_in_trash' => __( 'nivel no encontrado en la papelera', 'sky-tulum' ),
//     ),
//     'supports' => array(
//       'title',
//       'thumbnail'
//     ),
//     'supports_reg_tax' => array(
//       'category' => '',
//       'post_tag' => '',
//     ),
//     'capability_type' => 'post',
//     'map_meta_cap' => true,
//     'description' => 'View new signals',
//     'menu_position' => 5,
//     'public' => true,
//     'exclude_from_search' => true,
//     'show_in_admin_bar'   => false,
//     'show_in_nav_menus'   => false,
//     'publicly_queryable'  => false,
//     'query_var'           => false,
//     'hierarchical' => false,
//     'has_archive' => false,
//     'rewrite' => array(
//       'with_front' => true,
//       'feeds' => false,
//       'pages' => true,
//       'ep_mask' => 0,
//       'slug'=>__( 'pisos', 'sky-tulum' )
//     ),
//     'query_var' => true,
//     'can_export' => true,
//     'show_in_rest' => true,
//     'rest_base' => 'specs',
//     'capabilities' => array(
//       'create_posts'
//     ),
//     'menu_icon' => 'dashicons-admin-multisite',
//   )
// );