<?php 

function post_type_casino() {
    $labels = array(
        'name'               => _x( 'Casino', 'post type general name' ),
        'singular_name'      => _x( 'Casino', 'post type singular name' ),
        'add_new'            => _x( 'Add New', 'Casino' ),
        'add_new_item'       => __( 'Add New Casino' ),
        'edit_item'          => __( 'Edit Casino' ),
        'new_item'           => __( 'New Casino' ),
        'all_items'          => __( 'All Casinos' ),
        'view_item'          => __( 'View Casino' ),
        'search_items'       => __( 'Search Casinos' ),
        'not_found'          => __( 'No casinos found' ),
        'not_found_in_trash' => __( 'No casinos found in the Trash' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Casino'
    );
    $args = array(
        'labels'        => $labels,
        'public'        => true,
        'menu_position' => 23,
        'supports'      => array( 'title', 'thumbnail', 'editor'),
        'has_archive'   => false,
        'menu_icon'     => 'dashicons-groups',
        'show_in_rest'  => true
    );
    register_post_type( 'casino', $args );
}
add_action( 'init', 'post_type_casino' );
