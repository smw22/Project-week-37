<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

        <?php
        $contact_title = get_field('contact_title');
        $contact_text = get_field('contact_text');
        ?>

            <div class="contact-container">
                <div class="contact-text">
                    <h1><?php echo $contact_title ?></h1>
                    <p><?php echo $contact_text ?>
                    </p>
                </div>
                <?php echo do_shortcode('[contact-form-7 id="f850d69" title="Contact form"]') ?>
            </div>
            
        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>