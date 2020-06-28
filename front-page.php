

    <?php get_header(); ?>
    
    <div id="banner">
        <h1>&lt; Mayera blog &gt;</h1>
        
    </div>

    <main>
        <section>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">Legfrissebb bejegyzések</h2>
        </a>
        </section>
        <section>

        <?php 

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
        );

        $blogposts = new WP_Query($args);

        while($blogposts->have_posts()){
            $blogposts->the_post();
        

        ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img class="image" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php echo the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Olvass tovább</a>
                </div>
            </div>
        <?php } wp_reset_query(); ?>
        </section>

        
    <?php get_footer(); ?>