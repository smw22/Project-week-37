<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <?php
        $title = get_field('hero-title');
        ?>

        <div class="hero-image">
            <div class="hero-text">
                <h1><?php echo $title; ?></h1>
            </div>
            <img src="https://picsum.photos/1280/720" alt="">
        </div>


        <div class="container">

            <?php
            // Custom query for infoblock post type
            $infoblock_query = new WP_Query(array(
                'post_type' => 'infoblocks',
                'posts_per_page' => -1
            ));

            if ($infoblock_query->have_posts()):
                while ($infoblock_query->have_posts()):
                    $infoblock_query->the_post();
                    $info_title = get_field('infoblock-title');
                    $info_img = get_field('infoblock-image');
                    $info_content = get_field('infoblock-content');
                    ?>

                    <div class="item">
                        <div class="item-img">
                            <img src="<?php echo $info_img["url"] ?>" alt="">
                        </div>
                        <div class="item-text">
                            <h2><?php echo $info_title; ?></h2>
                            <p><?php echo $info_content ?></p>
                        </div>
                    </div>
                    <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>


        </div>

        <div class="container2">
            <div class="expert">
                <img src="https://picsum.photos/1280/720" alt="">
                <h1>NAVN EFTERNAVN</h1>
                <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas iste asperiores eum
                    inventore fugit
                    delectus ipsa optio? Magni incidunt molestias, velit aspernatur tempora vel iste itaque asperiores suscipit
                    odio!"</p>
            </div>

            <div class="expert">
                <img src="https://picsum.photos/1280/720" alt="">
                <h1>NAVN EFTERNAVN</h1>
                <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas iste asperiores eum
                    inventore fugit
                    delectus ipsa optio? Magni incidunt molestias, velit aspernatur tempora vel iste itaque asperiores suscipit
                    odio!"</p>
            </div>

            <div class="expert">
                <img src="https://picsum.photos/1280/720" alt="">
                <h1>NAVN EFTERNAVN</h1>
                <p>"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas iste asperiores eum
                    inventore fugit
                    delectus ipsa optio? Magni incidunt molestias, velit aspernatur tempora vel iste itaque asperiores suscipit
                    odio!"</p>
            </div>
        </div>



    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>