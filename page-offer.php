<?php /*Template Name: Oferta */

 get_header(); ?>

<main class="offer-main">
<section class="top top__offer">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="offer">
    <div class="offer__container container">
      <a href="<?php the_field('offer__link1')?>" class="offer__link">
        <img src="<?php the_field('offer__img1')?>" alt="" class="offer__img">
      </a>
      <a href="<?php the_field('offer__link2')?>" class="offer__link">
        <img src="<?php the_field('offer__img2')?>" alt="" class="offer__img">
      </a>
      <a href="<?php the_field('offer__link3')?>" class="offer__link">
        <img src="<?php the_field('offer__img3')?>" alt="" class="offer__img">
      </a>
    </div>
  </section>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek_oferta.png" alt="" class="offer__bottom-img">
</main>
<?php
get_footer();