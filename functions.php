<?php

require_once get_template_directory(). "/admin/index.php";

function custom_theme_support() {


    register_nav_menus([
        "primary" => __("Primary Menu"),
    ]);

    add_theme_support("title-tag");
    add_theme_support("category-thumbnails");
    add_theme_support("post-thumbnails");
    add_image_size("custom-image-thumb", 120, 120, true);

}

add_action("after_setup_theme", "custom_theme_support");


function custom_styles() {

    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css");
    wp_enqueue_style("bootstrap-icon", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css");
    wp_enqueue_style("slik-slider", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css");
    wp_enqueue_style("slik-slider-2", "https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css");
    wp_enqueue_style("custom-css", "http://localhost/ArchVerse3D/wp-content/themes/css/style.css");
}
add_action("wp_enqueue_scripts", "custom_styles");
