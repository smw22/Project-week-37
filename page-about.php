<?php get_header() ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>

            <div class="about-container">
                <div class="about-introduction">
                    <h1>About Us</h1>
                    <p>Welcome to Good Health & Well Being, where our mission is to champion mental health and well-being as a core pillar of a thriving future.</p>       
                </div>
                <div class="about-section">
                    <div class="about-description">
                        <h2>Welcome to Good Health & Well Being—where your mental health journey begins.</h2>
                        <p>At Good Health & Well Being, we are dedicated to addressing the mental health challenges faced by Generation Z and Generation Alpha. These young generations hold the promise of shaping a brighter world, and we believe that ensuring their mental well-being is crucial for this vision to become a reality.</p>
                        <p>Our platform is more than just a resource; it’s a movement towards a more informed and empathetic society. We provide valuable insights, practical tools, and a supportive community designed to empower young people in their journey towards mental wellness.</p>
                        <p>Rooted in the United Nations Sustainable Development Goal 3, our focus is on creating a space where mental health is prioritized and destigmatized. Through engaging content, expert advice, and interactive features, we aim to spark conversations, offer support, and drive positive change.</p>
                        <p>Together, we can build a future where mental health is valued, understood, and actively supported. Join us in making a difference for the generations to come.</p>
                    </div>
                    <div class="about-image">

                    </div>
                </div>

            </div>


        <?php endwhile ?>
    <?php endif ?>
<?php get_footer() ?>