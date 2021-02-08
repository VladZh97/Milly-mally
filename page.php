<?php
get_header();
?>
<main>
<section class="top top__offer">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
</section>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article>
    <div class="single__main">
      <div class="single__container container">
        <h1 class="single__title"><?php the_title(); ?></h1>
        <div class="single__text"><?php the_content(); ?></div>
      </div>
    </div>
  </article>
  <?php endwhile; else: ?>
    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
  <?php endif; ?>
  </main>
<?php
get_footer();
