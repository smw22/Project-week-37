<?php
function theme_load_styles_and_scripts() {
    wp_enqueue_style("theme_styles", get_template_directory_uri(). "/style.css");
}
add_action("wp_enqueue_scripts","faq_theme_load_styles_and_scripts");