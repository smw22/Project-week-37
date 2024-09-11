<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <div class="contact-container">
                <h1>Contact Us</h1>
                <p>Need to get in touch with us? Fill out the form
                    with tour inquirity or find the <a href=""> Department of Psychiatric Help </a> that you will like to contact.
                </p>
                <?php echo do_shortcode('[contact-form-7 id="f850d69" title="Contact form"]') ?>
            </div>
            
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>