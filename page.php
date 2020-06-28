<?php get_header();

while(have_posts()){
    the_post();


?>

<div id="post-container">
  
      <section id="blogpost">
        <div class="card">
        <h2 class="page-heading"><?php the_title(); ?></h2>
        <?php if(has_post_thumbnail()) { ?>
          <div class="card-image">
            <img class="image-about" src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
          </div>
        <?php } ?>
          <div class="card-description">
            <?php the_content(); ?>
          </div>
        </div>

      </section>

    <?php } ?>

    <aside id="sidebar">
        <?php dynamic_sidebar('main_sidebar'); ?>
      </aside>
</div>

   <?php get_footer(); ?>
