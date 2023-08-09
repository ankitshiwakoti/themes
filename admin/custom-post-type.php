<?php



function create_Hero_slider_post_type() {

    $labels = array(
        'name' => __( 'Hero_slider' ),
        'singular_name' => __( 'Hero_slider' ),
        'all_items'           => __( 'All Hero_slider' ),
        'view_item'           => __( 'View Hero_slider' ),
        'add_new_item'        => __( 'Add New Hero_slider' ),
        'add_new'             => __( 'Add New Hero_slider' ),
        'edit_item'           => __( 'Edit Hero_slider' ),
        'update_item'         => __( 'Update Hero_slider' ),
        'search_items'        => __( 'Search Hero_slider' ),
        'search_items' => __('Hero_slider')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Hero_slider contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'products'),
        'menu_icon'=>'dashicons-format-image',
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Hero_slider', $args);

}
add_action( 'init', 'create_Hero_slider_post_type' );




function create_Portfolios_post_type() {

    $labels = array(
        'name' => __( 'Portfolios' ),
        'singular_name' => __( 'Portfolios' ),
        'all_items'           => __( 'All Portfolios' ),
        'view_item'           => __( 'View Portfolios' ),
        'add_new_item'        => __( 'Add New Portfolios' ),
        'add_new'             => __( 'Add New Portfolios' ),
        'edit_item'           => __( 'Edit Portfolios' ),
        'update_item'         => __( 'Update Portfolios' ),
        'search_items'        => __( 'SearchPortfolios' ),
        'search_items' => __('Portfolios')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Portfolios contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'Portfolios'),
        'menu_icon'=>'dashicons-format-image',
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Portfolio', $args);

}
add_action( 'init', 'create_Portfolios_post_type' );



function create_Services_post_type() {

    $labels = array(
        'name' => __( 'Services' ),
        'singular_name' => __( 'Services' ),
        'all_items'           => __( 'All Services' ),
        'view_item'           => __( 'View Services' ),
        'add_new_item'        => __( 'Add New Services' ),
        'add_new'             => __( 'Add New Services' ),
        'edit_item'           => __( 'Edit Services' ),
        'update_item'         => __( 'Update Services' ),
        'search_items'        => __( 'Search Services' ),
        'search_items' => __('Services')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Services contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'Services'),
        'menu_icon'=>'dashicons-format-image',
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Services', $args);

}
add_action( 'init', 'create_Services_post_type' );


function create_Projects_post_type() {

    $labels = array(
        'name' => __( 'Projects' ),
        'singular_name' => __( 'Projects' ),
        'all_items'           => __( 'All Projects' ),
        'view_item'           => __( 'View Projects' ),
        'add_new_item'        => __( 'Add New Projects' ),
        'add_new'             => __( 'Add New Projects' ),
        'edit_item'           => __( 'Edit Projects' ),
        'update_item'         => __( 'Update Projects' ),
        'search_items'        => __( 'Search Projects' ),
        'search_items' => __('Projects')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Projects contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'Projects'),
        'menu_icon'=>'dashicons-format-image',
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Projects', $args);

}
add_action( 'init', 'create_Projects_post_type' );

function create_Trusted_by_post_type() {

    $labels = array(
        'name' => __( 'Trusted_by' ),
        'singular_name' => __( 'Trusted_by' ),
        'all_items'           => __( 'All Trusted_by' ),
        'view_item'           => __( 'View Trusted_by' ),
        'add_new_item'        => __( 'Add New Trusted_by' ),
        'add_new'             => __( 'Add New Trusted_by' ),
        'edit_item'           => __( 'Edit Trusted_by' ),
        'update_item'         => __( 'Update Trusted_by' ),
        'search_items'        => __( 'Search Trusted_by' ),
        'search_items' => __('Trusted_by')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Trusted_by contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'Trusted_by'),
        'menu_icon'=>'dashicons-format-image',
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Trusted_by', $args);

}
add_action( 'init', 'create_Trusted_by_post_type' );


function create_Testi_post_type() {

    $labels = array(
        'name' => __( 'Testi' ),
        'singular_name' => __( 'Testi' ),
        'all_items'           => __( 'All Testi' ),
        'view_item'           => __( 'View Testi' ),
        'add_new_item'        => __( 'Add New Testi' ),
        'add_new'             => __( 'Add New Testi' ),
        'edit_item'           => __( 'Edit Testi' ),
        'update_item'         => __( 'Update Testi' ),
        'search_items'        => __( 'Search Testi' ),
        'search_items' => __('Testi')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Testi contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'Testi'),
        'menu_icon'=>'dashicons-format-image',
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Testi', $args);

}
add_action( 'init', 'create_Testi_post_type' );

function create_Bloge_post_type() {

    $labels = array(
        'name' => __( 'Bloge' ),
        'singular_name' => __( 'Bloge' ),
        'all_items'           => __( 'All Blogs' ),
        'view_item'           => __( 'View Blogs' ),
        'add_new_item'        => __( 'Add New Blogs' ),
        'add_new'             => __( 'Add New Blogs' ),
        'edit_item'           => __( 'Edit Blogs' ),
        'update_item'         => __( 'Update Blogs' ),
        'search_items'        => __( 'Search Blogs' ),
        'search_items' => __('Blogs')
    );

    $args = array(
        'labels' => $labels,
        'description' => 'Add New Bloge contents',
        'menu_position' => 27,
        'public' => true,
        'has_archive' => true,
        'map_meta_cap' => true,
        'capability_type' => 'post',
        'rewrite' => true,
        'hierarchical' => true,
        'rewrite' => array('slug' => 'Bloge'),
        'menu_icon'=>'dashicons-format-image',
        
        'supports' => array(
            'title',
            'thumbnail','editor','excerpt'
        ),
    );
    register_post_type( 'Bloge', $args);

}
add_action( 'init', 'create_Bloge_post_type' );






function create_triptype_hierarchical_taxonomy() {

    $labels = array(
        'name' => _x( 'Trip Type', 'taxonomy general name' ),
        'singular_name' => _x( 'Trip Type', 'taxonomy singular name' ),
        'search_items' =>  __( 'Search Trip Type' ),
        'all_items' => __( 'All Trip Type' ),
        'parent_item' => __( 'Parent Trip Type' ),
        'parent_item_colon' => __( 'Parent Trip Type:' ),
        'edit_item' => __( 'Edit Trip Type' ),
        'update_item' => __( 'Update Trip Type' ),
        'add_new_item' => __( 'Add New Trip Type' ),
        'new_item_name' => __( 'New Trip Type Name' ),
        'menu_name' => __( 'Trip Type' ),
    );
    register_taxonomy('trip_type',array('trips'), array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'public' => true,
        'rewrite' => array( 'slug' => 'trip-types' ),
    ));

}
add_action( 'init', 'create_triptype_hierarchical_taxonomy', 2 );