<?php

// Define our Custom Post Type
function sqd_register_post_type() {
    //Add a filter to our $singular variable.
    $singular = apply_filters( 'sqd_label_single', 'Bio' );
    //Add a filter to our $plural variable.
    $plural = apply_filters( 'sqd_label_plural', 'Bios' );

    $labels = array(
        'name'          => $plural,
        'singular_name'     => $singular,
        'add_new'       => 'Add New',
        'add_new_item'      => 'Add New ' . $singular,
        'edit'              => 'Edit',
        'edit_item'         => 'Edit ' . $singular,
        'new_item'          => 'New ' . $singular,
        'view'          => 'View ' . $singular,
        'view_item'         => 'View ' . $singular,
        'search_term'       => 'Search ' . $plural,
        'parent'        => 'Parent ' . $singular,
        'not_found'         => 'No ' . $plural .' found',
        'not_found_in_trash'    => 'No ' . $plural .' in Trash'
    );
    //Add a filter to our cpt's $args variable.
    $args = apply_filters( 'sqd_post_type_args',array(
        'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'menu_icon' => plugins_url( '../images/bio.png', __FILE__ ),
            'query_var'          => true,
            'rewrite'            => array( 'slug' => $plural ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 10,
            'supports'           => array( 'title', 'editor', 'author', 'custom-fields' )
    ) );
    register_post_type( $singular, $args );
}

add_action( 'init', 'sqd_register_post_type' );


