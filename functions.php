<?php
function theme_load_styles_and_scripts()
{
    wp_enqueue_style("theme-style", get_template_directory_uri() . "/style.css");
    wp_enqueue_script("theme-script", get_template_directory_uri() . "/app.js");
}
add_action("wp_enqueue_scripts", "theme_load_styles_and_scripts");

add_theme_support('menus');

add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'secondary-menu' => __('Secondary Menu')
        )
    );
}

function theme_disable_gutenberg(){
    remove_post_type_support("page","editor");
    remove_post_type_support("post","editor");
    remove_post_type_support("infoblock","editor");
    remove_post_type_support("expertblock","editor");
}
add_action("init","theme_disable_gutenberg");


function webshop_register_strings() {
    pll_register_string("Good health & well being", "Programs");
    pll_register_string("Good health & well being", "Best practice Communication");
    pll_register_string("Good health & well being", "Families and caregivers");
    pll_register_string("Good health & well being", "Community");
    pll_register_string("Good health & well being", "Prevention in practice");
    pll_register_string("Good health & well being", "Resources");
    pll_register_string("Good health & well being", "Understanding mental health");
    pll_register_string("Good health & well being", "Promotion approaches");
    pll_register_string("Good health & well being", "About");
    pll_register_string("Good health & well being", "Our Institute");
    pll_register_string("Good health & well being", "Upcoming events");
    pll_register_string("Good health & well being", "Contact");
    pll_register_string("Good health & well being", "Subscribe to our news letter");
    pll_register_string("Good health & well being", "Your email");
    pll_register_string("Good health & well being", "Sign Up");
    pll_register_string("Good health & well being", "All rights reserved");
}

add_action("init", "webshop_register_strings"); 