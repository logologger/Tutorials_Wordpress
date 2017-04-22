<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 21/4/17
 * Time: 10:22 PM
 */
function recipe_init(){

    $labels = array(
        'name'                  => _x( 'recipe', 'Post type general name', 'recipe' ),
        'singular_name'         => _x( 'Recipe', 'Post type singular name', 'recipe' ),
        'menu_name'             => _x( 'recipe', 'Admin Menu text', 'recipe' ),
        'name_admin_bar'        => _x( 'recipe', 'Add New on Toolbar', 'recipe' ),
        'add_new'               => __( 'Add New', 'recipe' ),
        'add_new_item'          => __( 'Add New recipe', 'recipe' ),
        'new_item'              => __( 'New recipe', 'recipe' ),
        'edit_item'             => __( 'Edit recipe', 'recipe' ),
        'view_item'             => __( 'View recipe', 'recipe' ),
        'all_items'             => __( 'All recipe', 'recipe' ),
        'search_items'          => __( 'Search recipe', 'recipe' ),
        'parent_item_colon'     => __( 'Parent recipe:', 'recipe' ),
        'not_found'             => __( 'No recipe found.', 'recipe' ),
        'not_found_in_trash'    => __( 'No recipes found in Trash.', 'recipe' ),
//        'featured_image'        => _x( 'Book Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'textdomain' ),
//        'archives'              => _x( 'Book archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'textdomain' ),
//        'insert_into_item'      => _x( 'Insert into book', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'textdomain' ),
//        'uploaded_to_this_item' => _x( 'Uploaded to this book', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'textdomain' ),
//        'filter_items_list'     => _x( 'Filter books list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'textdomain' ),
//        'items_list_navigation' => _x( 'Books list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'textdomain' ),
//        'items_list'            => _x( 'Books list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'textdomain' ),

    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'recipe' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );


    register_post_type('recipe',$args);

    flush_rewrite_rules();//So that Custom Post Type can be properly displayed under Custom Templates created by the user



    //Created for Custom Post types here

    //DEfine the arguments for the custom post types
}