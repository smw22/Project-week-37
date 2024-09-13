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
        <nav>
            <div class="nav-element">
                <a href="<?php echo get_permalink( get_page_by_path('frontpage') ); ?>">
                    <svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 380.99 92.46" class="logo-svg">
                        <defs>
                            <style>
                                .cls-1 {
                                    font-family: PublicSansRoman-Bold, 'Public Sans';
                                    font-size: 32px;
                                    font-variation-settings: 'wght' 700;
                                    font-weight: 700;
                                }

                                .cls-1,
                                .cls-2 {
                                    fill: #fff;
                                }

                                .cls-3 {
                                    letter-spacing: -.02em;
                                }
                            </style>
                        </defs>
                        <g>
                            <path class="cls-2"
                                d="M313.19,49.87c-3.57,6.65-6.68,12.44-9.79,18.23-.71,1.32-1.27,2.91-3.21,2.5-1.74-.36-1.77-1.89-1.97-3.3-1.37-9.57-2.78-19.14-4.18-28.74-1.29.08-1.27,1.21-1.6,1.93-2.05,4.55-4.09,9.1-5.99,13.71-.83,2.02-1.98,2.9-4.25,2.88-9.76-.11-19.51-.05-29.27-.04-1.69,0-3.47-.1-3.47-2.27,0-2.16,1.78-2.3,3.47-2.3,8.86,0,17.72-.06,26.58.05,2.03.03,2.99-.69,3.76-2.52,2.91-6.89,6-13.71,9.01-20.55.61-1.38,1.11-2.94,3.06-2.68,2,.27,2,2.03,2.21,3.45,1.31,8.99,2.54,17.99,3.81,26.98.14.97.36,1.93.67,3.62,3.01-5.58,5.7-10.55,8.38-15.52.43-.79.83-1.59,1.24-2.39.66-1.27,1.35-2.55,3.12-2.21,1.63.31,1.8,1.71,2.02,2.98,1.05,6.1,2.05,12.2,3.1,18.3.95,5.49,1.93,10.98,2.98,16.88,1.56-2.08,1.81-4.18,2.39-6.12,6.97-23.11,13.88-46.24,20.81-69.36.42-1.4.51-3.15,2.44-3.36,2.13-.24,2.5,1.61,3.17,3.01,3.31,6.82,6.6,13.65,9.89,20.48.39.81.76,1.63,1.14,2.44.71,1.51,1.4,3.16-.57,4.13-1.98.97-2.82-.55-3.55-2.1-2.57-5.41-5.17-10.8-7.76-16.19-.42-.87-.87-1.72-1.58-3.11-2.13,7.11-4.11,13.68-6.08,20.26-5.95,19.88-11.89,39.75-17.84,59.63-.17.57-.4,1.13-.55,1.71-.32,1.28-.93,2.22-2.41,2.19-1.66-.03-2.17-1.2-2.4-2.56-.84-5.02-1.64-10.05-2.49-15.07-1.37-8.05-2.77-16.1-4.3-24.96Z" />
                            <path class="cls-2"
                                d="M380.99,47.76c.03,4.18-1.14,6.64-3.17,8.71-3.98,4.04-8.01,8.03-11.95,12.1-1.05,1.08-1.69,1.22-2.82.04-3.92-4.09-7.96-8.07-11.96-12.09-2.56-2.56-3.7-5.63-3.17-9.23.53-3.59,2.31-6.33,5.71-7.81,3.39-1.47,6.23-.31,8.65,2.12,1.34,1.34,2.32,2.14,4.04.31,2.55-2.71,5.71-4.1,9.4-2.27,3.81,1.89,5.15,5.29,5.26,8.12Z" />
                        </g>
                        <text class="cls-1" transform="translate(0 34.47)">
                            <tspan x="0" y="0">GOOD HEALTH </tspan>
                            <tspan x="0" y="38.4">&amp;</tspan>
                            <tspan class="cls-3" x="25.07" y="38.4"> </tspan>
                            <tspan x="31.78" y="38.4">WELL BEING</tspan>
                        </text>
                    </svg>
                </a>
            </div>
            <div class="nav-element">
                <?php pll_the_languages( array( 'dropdown' => 1 ) ); ?>
                <div class="ham-menu">
                    <span class="ham-menu-first-span header-span"></span>
                    <span class="ham-menu-midle-span header-span"></span>
                    <span class="ham-menu-last-span header-span"></span>
                </div>
                
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
            </div>
        </nav>
    </header>