<?php
/*
*
* Template Name: Strona glowna
*
*/
?>

<?php get_header(); ?>
<main class="front__main">

  <!-- HERO -->
  <section class="hero">
    <div class="hero__inner">
      <div class="hero__container container">
        <div class="hero__row row">
          <div class="hero__left col-md-6">
            <h2 class="hero__title"><?php the_field('hero__title1')?></h2>
            <h2 class="hero__title"><?php the_field('hero__title2')?></h2>
            <div class="owl-theme">
              <div class="owl-controls">
                <div id="customNav" class="owl-nav"></div>
              </div>
              <div class="owl-controls">
                <div id="customDots"></div>
              </div>
            </div>
          </div>
          <?php if( have_rows('hero__main') ): ?>
            <ul class="hero__list owl-carousel col-md-6">
              <?php while( have_rows('hero__main') ): the_row(); ?>
                <li class="hero__item">
                  <img src="<?php the_sub_field('hero__product')?>" alt="" class="hero__product">
                </li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/top-main.png" alt="" class="bg-main__img">
  </section>



  <!-- QUALITY -->
  <section class="quality">
    <div class="quality__inner">
      <div class="quality__container container">
        <div class="quality__row row">
          <div class="col-md-4">
            <div class="quality__first quality__item">
              <div class="quality__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/orygin.jpg" alt="" class="quality__img">
              </div>
              <div class="quality__text">
                <h3 class="quality__title"><?php the_field('quality__title-first')?></h3>
                <p class="quality__des"><?php the_field('quality__des-first')?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="quality__second quality__item">
              <div class="quality__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bezp.jpg" alt="" class="quality__img">
              </div>
              <div class="quality__text">
                <h3 class="quality__title"><?php the_field('quality__title-second')?></h3>
                <p class="quality__des"><?php the_field('quality__des-second')?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="quality__third quality__item">
              <div class="quality__image">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/szczeg.jpg" alt="" class="quality__img">
              </div>
              <div class="quality__text">
                <h3 class="quality__title"><?php the_field('quality__title-third')?></h3>
                <p class="quality__des"><?php the_field('quality__des-third')?></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


    <!-- popular -->
    <section class="popular">
    <div class="popular__inner">
      <div class="popular__container">

        <div class="popular__row">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <h3 class="popular__title"><?php the_field('popular__title')?></h3>
              </div>
              <div class="col-md-6">
                  <p class="popular__text"><?php the_field('popular__text')?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="popular__product">
          <div class="container">
          <?php echo do_shortcode('[featured_products limit="16" class="featured"]'); ?>

          <?php// echo do_shortcode('[woo_product_slider id="8790"]'); ?>
            <div class="popular__product-more">
              <a href="<?php the_permalink( 1555 ); ?>" class="popular__product-link"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "zobacz całą ofertę";  
             } else if (ICL_LANGUAGE_CODE == "en") {
                  echo "see entire offer";  
                  } else if (ICL_LANGUAGE_CODE == "de") {
                    echo "siehe gesamtes Angebot";
                  } ?></a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </section>

  <!-- DESCRIPTION -->
  
  <section class="desc desc__first">
    <div class="desc__inner">
      <div class="desc__container container">
        <div class="desc__row row">
          <div class="desc__left col-md-6">
            <h3 class="desc__title"><?php the_field('desc__left-title')?></h3>
            <p class="desc__text"><?php the_field('desc__left-text')?></p>
          </div>
          <div class="desc__right col-md-6">
            <div class="desc__right-image">
              <img src="<?php the_field('desc__right-img')?>" alt="" class="desc__right-img">
            </div>
          </div>
        </div>
      </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek2.png" alt="" class="bg-des__img">
  </section>
  
  <section class="desc desc__second">
    <div class="desc__inner">
      <div class="desc__container container">
        <div class="desc__row row">
          <div class="desc__left col-md-6">
            <div class="desc__right-image">
              <img src="<?php the_field('desc__right-img2')?>" alt="" class="desc__right-img">
            </div>
          </div>
          <div class="desc__right col-md-6">
            <h3 class="desc__title"><?php the_field('desc__left-title2')?></h3>
            <p class="desc__text"><?php the_field('desc__left-text2')?></p>
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
              <p class="reviews__title"><?php the_field('reviews__title')?></p>
              <p class="reviews__des-text"><?php the_field('reviews__des')?></p>
            </div>
          </div>
          <div class="col-md-6 reviews__slider">
            <div class="reviews__slider-container">
              <?php if( have_rows('reviews__main') ): ?>
                <ul class="reviews__list owl-carousel">
                  <?php while( have_rows('reviews__main') ): the_row(); ?>
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