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
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt officiis sequi fugiat numquam fugit
                        nostrum corrupti, reprehenderit nam sit repellendus ab ipsam debitis possimus sint unde exercitationem
                        sunt modi amet.</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt officiis sequi fugiat numquam fugit
                        nostrum corrupti, reprehenderit nam sit repellendus ab ipsam debitis possimus sint unde exercitationem
                        sunt modi amet.</p>
                </div>
            </div>
        </div>

    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>