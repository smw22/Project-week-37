<?php get_header(); ?>
<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <div class="hero-box">
                <img src="https://picsum.photos/1280/720" alt="">
            </div>

        <?php endwhile ?>
    <?php endif ?>




<? get_footer(); ?>