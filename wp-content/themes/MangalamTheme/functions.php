<?php

function my_site_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.css' );
    wp_enqueue_style( 'fonts', get_template_directory_uri() .'/css/fonts.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() .'/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_site_styles' );

function my_site_scripts() {    
    wp_enqueue_script( 'core.min', get_template_directory_uri().'/js/core.min.js' );
    wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js' );    
}
add_action( 'wp_footer', 'my_site_scripts' );

function my_custom_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'my_custom_menu' );


function Mangalam_custom_post() {

    $labels = array(
        'name'                => _x( 'Mangalam Products', 'Post Type General Name'),
        'singular_name'       => _x( 'Managalam Products', 'managalam_products'),
        'menu_name'           => __( 'Mangalam Products'),
        'parent_item_colon'   => __( 'Parent Movie', 'twentytwentyone' ),
        'all_items'           => __( 'All Manglam Products'),
        'view_item'           => __( 'View Manglam Product'),
        'add_new_item'        => __( 'Add New Manglam Product'),
        'add_new'             => __( 'Add New Manglam Product'),
        'edit_item'           => __( 'Edit Manglam Product'),
        'update_item'         => __( 'Update Manglam Product', 'twentytwentyone' ),
        'search_items'        => __( 'Search For Manglam Product'),
        'not_found'           => __( 'Not Found'),
        'not_found_in_trash'  => __( 'Not found in Trash'),
    );      
      
    $args = array(
        'label'               => __( 'Mangalam Products', 'twentytwentyone' ),
        'description'         => __( 'Mangalam Product reviews'),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields' ),
        'taxonomies'          => array( 'genres' ),
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
        'capability_type'     => 'post',
        'show_in_rest' => true,
  
    );
      
    register_post_type( 'managalam_products', $args );
    add_theme_support('post-thumbnails', array('post', 'page','managalam_products'));   
}  
add_action( 'init', 'Mangalam_custom_post');