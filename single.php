<?php
get_header();
?>
<main class="article">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <section class="top top__offer">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
  </section>
  <article class="container article__container">
    <div class="row article__row">
      <div class="col-12">
        <div><?php the_content(); ?></div>
      </div>
    </div>
  </article>
  <?php endwhile; else: ?>
    <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
  <?php endif; ?>
  </main>
<?php
get_footer(); 