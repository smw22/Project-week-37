<?php
function theme_load_styles_and_scripts() {
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css");
}
add_action("wp_enqueue_scripts", "theme_load_styles_and_scripts");

add_theme_support( 'menus' );

add_action( 'init', 'register_my_menus' );

function register_my_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'secondary-menu' => __( 'Secondary Menu' )
        )
    );
}

 function theme_disable_gutenberg() {
     remove_post_type_support("page", "editor");
     remove_post_type_support("post", "editor");
 }

 add_action("init", "theme_disable_gutenberg");









?>