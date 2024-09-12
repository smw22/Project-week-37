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

// function theme_disable_gutenberg() {
//     remove_post_type_support("page", "editor");
//     remove_post_type_support("post", "editor");
// }

// add_action("init", "theme_disable_gutenberg");

function theme_disable_gutenberg($current_status, $post_type) {
    // Disable for all post types except for specific types (like if you want to keep Gutenberg on some)
    if ( ! in_array( $post_type, array( 'acf-field', 'acf-field-group' ), true ) ) {
        return false;
    }
    return $current_status;
}
add_action("init", theme_disable_gutenberg())







?>