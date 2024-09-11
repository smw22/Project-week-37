<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <div class="contact-container">
                <h1>Contact Us</h1>
                <form action="" class="contact-form">
                <?php echo do_shortcode('[contact-form-7 id="f850d69" title="Contact form"]') ?>
                </form>
            </div>
            
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>