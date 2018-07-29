<?php
/**
 * Created by PhpStorm.
 * User: Ilnicki
 * Date: 25/07/2018
 * Time: 18:59
 */
// custom post type baby function
function baby_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Baby',
        'singular_name' => 'Baby',
        'add_new' => 'Dodaj informacje',
        'edit_item' => 'Edytuj',
        'all_items' => 'Wszystko',
        'menu_name' => 'Baby',
        'parent_item_colon' => ''
    );
    //register post type
    register_post_type( 'baby', array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'map_meta_cap'    => true,
            'rewrite' => array( 'slug' => 'baby' ),
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-megaphone'
        )
    );
}

add_action( 'init', 'baby_post_type' );
function dorosli_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Dorośli',
        'singular_name' => 'Dorośli',
        'add_new' => 'Dodaj informacje',
        'edit_item' => 'Edytuj',
        'all_items' => 'Wszystko',
        'menu_name' => 'Dorośli',
        'parent_item_colon' => ''
    );
    //register post type
    register_post_type( 'dorosli', array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'dorosli' ),
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-megaphone'
        )
    );
}
add_action( 'init', 'dorosli_post_type' );
function kids_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Kids',
        'singular_name' => 'Kids',
        'add_new' => 'Dodaj informacje',
        'edit_item' => 'Edytuj',
        'all_items' => 'Wszystko',
        'menu_name' => 'Kids',
        'parent_item_colon' => ''
    );
    //register post type
    register_post_type( 'kids', array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'thumbnail' ),
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'kids' ),
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-megaphone'
        )
    );
}
add_action( 'init', 'kids_post_type' );
function prices_post_type() {
    // set up labels
    $labels = array(
        'name' => 'Prices',
        'singular_name' => 'Cennik i Grafik',
        'add_new' => 'Dodaj Cennik i Grafik',
        'edit_item' => 'Edytuj',
        'all_items' => 'Wszystkie Cenniki',
        'menu_name' => 'Cennik i Grafik',
        'parent_item_colon' => '',
    );
    //register post type
    register_post_type( 'prices', array(
            'labels' => $labels,
            'has_archive' => true,
            'public' => true,
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
            'exclude_from_search' => false,
            'capability_type' => 'post',
            'rewrite' => array( 'slug' => 'prices' ),
            'taxonomies'          => array( 'category' ),
            'menu_position' => 5,
            'menu_icon'   => 'dashicons-calendar-alt'
        )
    );
}
add_action( 'init', 'prices_post_type' );

function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Czytaj</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

//show only 20 chars in post
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );


function post_remove (){
    remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');
