<?php
/**
 * Custom post type for this theme
 *
 *
 * @package portfolio-me
 */

 function portfolio_custom_post_type() {

    $labels = array(
        'name'                  => _x( 'Portfolio', 'Post Type General Name', 'portfolio-me' ),
        'singular_name'         => _x( 'Portfolio Item', 'Post Type Singular Name', 'portfolio-me' ),
        'menu_name'             => __( 'Portfolio', 'portfolio-me' ),
        'all_items'             => __( 'All Portfolio Items', 'portfolio-me' ),
        'add_new'               => __( 'Add New', 'portfolio-me' ),
        'add_new_item'          => __( 'Add New Portfolio Item', 'portfolio-me' ),
        'edit_item'             => __( 'Edit Portfolio Item', 'portfolio-me' ),
        'new_item'              => __( 'New Portfolio Item', 'portfolio-me' ),
        'view_item'             => __( 'View Portfolio Item', 'portfolio-me' ),
        'search_items'          => __( 'Search Portfolio Items', 'portfolio-me' ),
        'not_found'             => __( 'No Portfolio Items found', 'portfolio-me' ),
        'not_found_in_trash'    => __( 'No Portfolio Items found in Trash', 'portfolio-me' ),
        'parent_item_colon'     => '',
    );

    $args = array(
        'label'                 => __( 'Portfolio', 'portfolio-me' ),
        'description'           => __( 'Portfolio Items', 'portfolio-me' ),
        'labels'                => $labels,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'query_var'             => true,
        'rewrite'               => array( 'slug' => 'portfolio' ),
        'capability_type'       => 'post',
        'has_archive'           => true,
        'hierarchical'          => false,
        'menu_position'         => 5,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'menu_icon'             => 'dashicons-portfolio',
    );

    register_post_type( 'portfolio', $args );

}

add_action( 'init', 'portfolio_custom_post_type', 0 );

?>