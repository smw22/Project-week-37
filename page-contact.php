<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <h1>Helloooo contact</h1>
            <?php echo do_shortcode('[contact-form-7 id="f850d69" title="Contact form"]') ?>


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>