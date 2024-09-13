<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <div class="about-container">

            <?php 

            $about_headline = get_field("about_headline");
            $about_introtext = get_field("about_introtext");
            $about_subheadline = get_field("about_headline");
            $about_section = get_field("about_section");
            $about_section2 = get_field("about_section_2");
            $about_section3 = get_field("about_section_3");
            $about_section4 = get_field("about_section_4");

            ?>

                <div class="about-introduction">
                    <h1>About Us</h1>
                    <p>Welcome to Good Health & Well Being, where our mission is to champion mental health and well-being as a core pillar of a thriving future.</p>       
                </div>
                <div class="about-section">
                    <div class="about-description">
                        <h2 class="about-description-title"><?php echo $about_subheadline ?></h2>
                        <p class="about-description-text"><?php echo $about_section ?></p>
                        <p class="about-description-text"><?php echo $about_section2 ?></p>
                        <p class="about-description-text"><?php echo $about_section3 ?></p>
                        <p class="about-description-text"><?php echo $about_section4 ?></p>
                    </div>
                    <div class="about-image-box">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/about-image.png" alt="" class="about-image">
                    </div>
                </div>

            </div>


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>