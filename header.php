<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <?php 
            wp_nav_menu(
                array(
                    'menu' => 'primary',                 // Refers to the name or slug of the menu you want to display. In this case, it's 'primary'.
                    'container' => '',                   // Removes the default <div> container that WordPress usually wraps around the menu. By setting this to an empty string, no extra container is added.
                    'theme_location' => 'primary',       // Refers to a specific location in the theme where the menu should appear. 'primary' refers to the registered location, often set in 'functions.php'.
                    'items_wrap' => '<ul id="" class="">%3$s</ul>' // Defines how the menu items should be wrapped. In this case, an <ul> without an ID or class is used to wrap the menu items.
                )
            );
        ?>
        <h1>Project Hellooo</h1>

    </header>