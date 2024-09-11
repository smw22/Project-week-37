<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <?php $title = get_the_field('hero-title') ?>



        <div class="hero-image">
            <div class="hero-text">
                <h1><?php echo $title ?></h1>
            </div>
            <img src="https://picsum.photos/1280/720" alt="">
        </div>

    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>