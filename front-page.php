<?php get_header(); ?>
<?php if (have_posts()): ?>
    <?php while (have_posts()):
        the_post() ?>

        <?php 
        $title = get_field('hero-title'); 
        $infoTitle = get_field('infoblock-title');
        $infoImg = get_field('infoblock-image');
        $infoContent = get_field('infoblock-content');
        ?>
        



        <div class="hero-image">
            <div class="hero-text">
                <h1><?php echo $title; ?></h1>
            </div>
            <img src="https://picsum.photos/1280/720" alt="">
        </div>


        <div class="container">

            <div class="item">
                <div class="item-img">
                    <img src="<?php echo $infoImg ?>" alt="">
                </div>
                <div class="item-text">
                    <h2><?php echo $infoTitle; ?></h2>
                    <p><?php echo $infoContent ?></p>
                </div>
            </div>

            

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