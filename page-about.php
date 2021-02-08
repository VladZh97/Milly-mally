<?php /*Template Name: O Nas */

 get_header(); ?>

<main class="buy-main">
<section class="top">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
</section>

<section class="about">
  <div class="about__inner">
    <div class="about__des1">
      <div class="about__container container">
        <div class="row">
          <div class="col-md-6">
            <p class="about__text"><?php the_field('about__text1')?></p>
          </div>
          <div class="col-md-6">
            <img src="<?php the_field('about__img1')?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="about__des2">
      <div class="about__container container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php the_field('about__img2')?>" alt="">
          </div>
          <div class="col-md-6">
            <p class="about__text"><?php the_field('about__text2')?></p>
          </div>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek_o_nas.png" alt="" class="bg-about__img">
    </div>

    <div class="about__des3">
      <div class="about__container container">
        <div class="row">
          <div class="col-md-6">
            <div class="about__text"><?php the_field('about__text3')?></div>
          </div>
          <div class="col-md-6">
            <img src="<?php the_field('about__img3')?>" alt="">
          </div>
        </div>
      </div>
    </div>

    <div class="about__des4">
      <div class="about__container container">
        <div class="row">
          <div class="col-md-6">
            <h3 class="about__title"><?php the_field('about__title4')?></h3>
            <p class="about__text"><?php the_field('about__text4')?></p>
          </div>
          <div class="col-md-6">
            <img src="<?php the_field('about__img4')?>" alt="">
          </div>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek_about.png" alt="" class="bg__img">
    </div>

    <div class="about__des5">
      <div class="about__container container">
        <div class="row">
          <div class="col-md-6">
            <img src="<?php the_field('about__img5')?>" alt="">
          </div>
          <div class="col-md-6">
            <h3 class="about__title"><?php the_field('about__title5')?></h3>
            <p class="about__text"><?php the_field('about__text5')?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- REVIEWS -->
  <section class="reviews">
    <div class="reviews__inner">
      <div class="reviews__container container">
        <div class="reviews__row row">
          <div class="col-md-6">
            <div class="reviews__des">
              <p class="reviews__title"><?php the_field('reviews__title', 9)?></p>
              <p class="reviews__des-text"><?php the_field('reviews__des', 9)?></p>
            </div>
          </div>
          <div class="col-md-6 reviews__slider">
            <div class="reviews__slider-container">
              <?php if( have_rows('reviews__main', 9) ): ?>
                <ul class="reviews__list owl-carousel">
                  <?php while( have_rows('reviews__main', 9) ): the_row(); ?>
                    <li class="reviews__item">
                      <p class="reviews__item-text"><?php the_sub_field('reviews__item-text')?></p>
                      <p class="reviews__item-autor"><?php the_sub_field('reviews__item-autor')?></p>
                    </li>
                  <?php endwhile; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reviews.png" alt="" class="bg-reviews__img">
    </div>
  </section>
</main>
<?php
get_footer();