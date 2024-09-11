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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo, sit voluptatem, eum consequuntur id
                        doloribus repellendus maiores architecto voluptatibus culpa minima? Blanditiis omnis enim voluptatibus
                        facere perferendis illo placeat fugit in. Porro hic, sunt fuga voluptatum culpa nisi voluptatibus
                        necessitatibus cumque laborum, unde odio libero deleniti dolore et minus debitis magnam quos ut?
                        Sapiente incidunt praesentium natus cum unde dignissimos, inventore in. At, doloremque, modi officiis
                        repellendus neque quas aspernatur architecto delectus recusandae, vel qui.</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus illum, recusandae ratione labore
                        laborum quidem velit voluptatem eveniet nam sed culpa similique nostrum amet iste veniam, dicta sapiente
                        alias reprehenderit quae autem quia molestiae praesentium. Nemo, provident ipsa tenetur eum est hic!
                        Nulla quibusdam in fuga rerum ad? Omnis iusto quo, ipsam sit perspiciatis nobis! Ex magnam a
                        necessitatibus natus nobis non ducimus veritatis optio culpa ipsa labore error officiis recusandae sed
                        aperiam, sint deserunt.</p>
                </div>
            </div>
        </div>

    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>