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
                'menu' => 'primary',
                'container' =>'',
                'theme_location' => 'primary',
                'items_wrap' => '<ul id="" class="">%3$s</ul>'
                )
            );
        ?>
        <h1>Project Hellooo</h1>

    </header>