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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum incidunt non nisi, eveniet inventore
                        nesciunt officia enim iusto quis corporis? Sit ipsa exercitationem alias. A ea, veritatis harum
                        aspernatur aut accusamus eos, minima dolorem rem quae fugit error, nobis reiciendis consectetur sit
                        eaque reprehenderit quo porro perferendis. Sapiente consequatur consectetur porro! Aspernatur iste
                        mollitia illo blanditiis repudiandae, quos numquam labore ipsa quis pariatur corrupti porro dignissimos
                        obcaecati praesentium qui in perspiciatis saepe, ex natus quo omnis, dolorem neque id. Quidem ad sunt
                        modi doloribus ut magni dolore corporis nam sint aspernatur dignissimos ullam, illum quam asperiores
                        voluptatibus eveniet assumenda magnam!</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut magnam, provident consectetur quas odit
                        maxime exercitationem corporis? Odio deserunt minima recusandae laboriosam aut minus impedit reiciendis
                        cum et voluptas sit ullam praesentium ratione iure molestiae at corrupti tempore iste, tenetur
                        obcaecati? Quos harum ducimus, mollitia modi facilis porro rerum in ea officiis dolorum eum nihil
                        eligendi repellendus molestiae animi hic commodi, suscipit provident ipsum possimus totam! Pariatur
                        voluptatibus magni quibusdam aperiam, laboriosam soluta maiores debitis nihil minus vitae provident
                        blanditiis eius iure repellendus eveniet optio incidunt, dicta voluptatem repellat, quos ipsam non
                        facilis excepturi sint! Perferendis nemo error ipsa?</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut magnam, provident consectetur quas odit
                        maxime exercitationem corporis? Odio deserunt minima recusandae laboriosam aut minus impedit reiciendis
                        cum et voluptas sit ullam praesentium ratione iure molestiae at corrupti tempore iste, tenetur
                        obcaecati? Quos harum ducimus, mollitia modi facilis porro rerum in ea officiis dolorum eum nihil
                        eligendi repellendus molestiae animi hic commodi, suscipit provident ipsum possimus totam! Pariatur
                        voluptatibus magni quibusdam aperiam, laboriosam soluta maiores debitis nihil minus vitae provident
                        blanditiis eius iure repellendus eveniet optio incidunt, dicta voluptatem repellat, quos ipsam non
                        facilis excepturi sint! Perferendis nemo error ipsa?</p>
                </div>
            </div>

            <div class="item">
                <div class="item-img">
                    <img src="https://picsum.photos/1280/720" alt="">
                </div>
                <div class="item-text">
                    <H2>HEADLINE</H2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa ut magnam, provident consectetur quas odit
                        maxime exercitationem corporis? Odio deserunt minima recusandae laboriosam aut minus impedit reiciendis
                        cum et voluptas sit ullam praesentium ratione iure molestiae at corrupti tempore iste, tenetur
                        obcaecati? Quos harum ducimus, mollitia modi facilis porro rerum in ea officiis dolorum eum nihil
                        eligendi repellendus molestiae animi hic commodi, suscipit provident ipsum possimus totam! Pariatur
                        voluptatibus magni quibusdam aperiam, laboriosam soluta maiores debitis nihil minus vitae provident
                        blanditiis eius iure repellendus eveniet optio incidunt, dicta voluptatem repellat, quos ipsam non
                        facilis excepturi sint! Perferendis nemo error ipsa?</p>
                </div>
            </div>

        </div>

        <div class="container2">
            <div class="expert">
                <img src="https://picsum.photos/1280/720" alt="">
                <h1>NAVN EFTERNAVN</h1>
                <p><span>"</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas iste asperiores eum inventore fugit
                    delectus ipsa optio? Magni incidunt molestias, velit aspernatur tempora vel iste itaque asperiores suscipit
                    odio!<span>"</span></p>
            </div>

            <div class="expert">
                <img src="https://picsum.photos/1280/720" alt="">
                <h1>NAVN EFTERNAVN</h1>
                <p><span>"</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas iste asperiores eum inventore fugit
                    delectus ipsa optio? Magni incidunt molestias, velit aspernatur tempora vel iste itaque asperiores suscipit
                    odio!<span>"</span></p>
            </div>

            <div class="expert">
                <img src="https://picsum.photos/1280/720" alt="">
                <h1>NAVN EFTERNAVN</h1>
                <p><span>"</span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur quas iste asperiores eum inventore fugit
                    delectus ipsa optio? Magni incidunt molestias, velit aspernatur tempora vel iste itaque asperiores suscipit
                    odio!<span>"</span></p>
            </div>
        </div>



    <?php endwhile ?>
<?php endif ?>




<? get_footer(); ?>