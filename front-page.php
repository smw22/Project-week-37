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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad neque deleniti molestias temporibus error
                        alias ratione beatae reprehenderit! Quo nam repudiandae quos tenetur, repellendus, eaque perspiciatis
                        harum aperiam ipsum doloremque deleniti exercitationem in ipsa, dolor soluta sint consequuntur ducimus?
                        Quidem facere quae laboriosam saepe iste dolorum, et natus reprehenderit, perspiciatis ex, sed
                        assumenda? Expedita quasi molestiae voluptatem explicabo, nihil repellendus omnis laborum iste similique
                        velit laboriosam repudiandae quos placeat a ipsam natus, maxime accusantium commodi repellat tempore
                        laudantium! Adipisci natus ipsam eius, ducimus architecto est quaerat, rerum beatae praesentium tempore
                        consequuntur, numquam quo suscipit maiores tenetur! Beatae corporis dignissimos aut?</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse soluta nostrum rem sunt quidem animi fugiat
                        odit qui laboriosam molestiae eos temporibus, atque architecto sapiente aliquid doloribus numquam nemo
                        enim repellendus dolore deleniti nesciunt. Voluptatum architecto, necessitatibus reprehenderit error
                        iste aperiam explicabo soluta maxime nobis a ducimus, dicta dolor quod magni. Doloribus, est accusantium
                        ea perferendis explicabo commodi eaque cumque, ut earum quis placeat sunt alias repudiandae maiores
                        facilis ducimus deserunt qui minima dolores recusandae saepe sapiente, fugit consequuntur tempore. Qui,
                        officia adipisci hic, porro sit esse repellendus voluptate recusandae in alias aspernatur dicta eos
                        aliquam repellat, voluptatum reprehenderit rerum!</p>
                </div>
            </div>
        </div>

    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>