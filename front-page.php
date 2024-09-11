<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <?php $title = get_field('hero-title'); ?>



        <div class="hero-image">
            <div class="hero-text">
                <h1><?php echo $title; ?></h1>
            </div>
            <img src="https://picsum.photos/1280/720" alt="">
        </div>


        <div class="container">

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio similique eius adipisci voluptate quo?
                        Eligendi magni enim, sed velit sint voluptas ut cupiditate aspernatur similique sit. Aperiam ipsam
                        delectus nobis voluptas harum doloribus cumque atque corrupti quaerat omnis, fugiat vel distinctio
                        incidunt ut natus laborum molestias quidem aut quia. Accusantium ad atque quam nemo similique ipsam
                        excepturi id. Harum rerum cum temporibus, atque inventore in quaerat quasi. Consequatur mollitia sequi
                        officia libero quam at fuga perspiciatis, corrupti, nisi velit voluptate!</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat voluptas distinctio voluptates dolores
                        mollitia! Est, mollitia nesciunt unde possimus nihil, optio amet deserunt officia autem nostrum eos.
                        Magni adipisci itaque odit, repellendus iure nobis minima ipsam eius perferendis natus quisquam omnis
                        dicta saepe ea asperiores numquam distinctio repellat. Quas sint amet obcaecati omnis aliquid eius!
                        Quibusdam impedit eius fuga sed placeat modi earum ipsa mollitia consequuntur molestiae eaque vero iste,
                        enim numquam, quis quos quaerat qui delectus ipsum. Voluptatibus, sunt!</p>
                </div>
            </div>
        </div>

    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>