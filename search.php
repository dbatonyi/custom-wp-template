

    <?php get_header(); ?>
    
    
    <a href="<?php echo site_url('/blog'); ?>">
        <h2 class="page-heading">Keresési eredmények: <?php echo get_search_query() ?></h2>
    </a>

    <?php if(have_posts()){ ?>

    <section>

    <?php 


    while(have_posts()){
        the_post();
    

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
                <div class="card-meta">
                    Írta: <?php the_author(); ?> | <?php the_time('Y, F j'); ?><?php if(get_post_type() == 'post'){ ?> | Kategóriák:
            <a href="#"><?php echo get_the_category_list(', ') ?></a>
            <?php } ?>
                </div>
                <p>
                    <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">Olvass tovább</a>
            </div>
        </div>
    <?php } wp_reset_query(); ?>
    </section>
                    <?php }else{ ?>
                        <div class="no-results">
                            <h2> Nincs találat </h2>
                        </div>
                 <?php   } ?>
    <div class="pagination">
        <?php echo paginate_links(); ?>
    </div>

<?php get_footer(); ?>