<?php /*Template Name: Kontakt */

get_header(); ?>

<main class="contact__main">
  <section class="top">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="contact">
    <div class="contact__inner">
      <div class="contact__container container">
        <div class="contact-top__row row">
          <div class="contact__left col-md-6">
            <h3 class="contact__title"><?php the_field("contact-top__title") ?></h3>
            <p class="contact__address-bold"><?php the_field("contact__address") ?>
            <p class="contact__address-normal"><?php the_field("contact__address-normal") ?></p>
            </p>
            <div class="contact__sep">
              <p class="contact__tel"><a href="tel:<?= get_field('contact-tel'); ?>"><?php the_field('contact-tel'); ?></a></p>
              <p class="contact__mail"><a href="mailto:<?= get_field('contact-mail'); ?>"><?php the_field('contact-mail'); ?></a>
              </p>
            </div>
            <div class="contact__num">
              <p class="contact__num-text"><?php the_field('nip') ?></p>
              <p class="contact__num-text"><?php the_field('gln') ?></p>
            </div>
          </div>
          <div class="contact__right col-md-6">
            <div class="map__container">
              <div id="map"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact__container-bg">
        <div class="container">
          <div class="contact-bottom__row row">
            <div class="contact__left col-md-6">
              <h3 class="contact__title"><?php the_field("contact-bottom__title") ?></h3>
              <p class="contact__subtitle"><?php the_field("contact-bottom__subtitle") ?></p>
              <div class="contact__persons">
                <?php if (have_rows('contact__persons')) : ?>
                  <?php while (have_rows('contact__persons')) : the_row(); ?>
                    <p class="contact__name"><?php the_sub_field('name'); ?></p>
                    <p class="contact__tel"><a href="tel:<?= get_sub_field('contact-tel'); ?>"><?php the_sub_field('contact-tel'); ?></a>
                    </p>
                    <p class="contact__mail"><a href="mailto:<?= get_sub_field('contact-mail'); ?>"><?php the_sub_field('contact-mail'); ?></a>
                    </p>
                    <p class="contact__voivod"><?php the_sub_field('voivod'); ?></p>
                  <?php endwhile; ?>
                <?php endif; ?>
              </div>
            </div>
            <div class="contact__form col-md-6">
              <h3 class="contact__title"><?php the_field('contact__form-title') ?></h3>
              <?php if (ICL_LANGUAGE_CODE == "pl") {
             echo do_shortcode('[contact-form-7 id="6" title="Kontakt"]');  
             } else if (ICL_LANGUAGE_CODE == "en") {
                  echo do_shortcode('[contact-form-7 id="3448" title="Kontakt (en)"]');  
                  } else if (ICL_LANGUAGE_CODE == "de") {
                    echo do_shortcode('[contact-form-7 id="6567" title="Kontakt (de)"]');  
                    }?>
            </div>
          </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek-kontact1.png" alt="" class="bg__img">
      </div>
      <div class="contact__container container">
        <div class="contact__last last row">
          <div class="last__left col-md-6">
            <div class="last__first">
              <p class="contact__name"><?php the_field('first-name'); ?></p>
              <p class="contact__tel"><a href="tel:<?= get_field('first-tel'); ?>"><?php the_field('first-tel'); ?></a></p>
              <p class="contact__tel"><a href="tel:<?= get_field('first-tel2'); ?>"><?php the_field('first-tel2'); ?></a></p>
              <p class="contact__mail"><a href="mailto:<?= get_field('first-mail'); ?>"><?php the_field('first-mail'); ?></a>
              </p>
            </div>
            <div class="last__second">
              <p class="contact__name"><?php the_field('second-name'); ?></p>
              <p class="contact__mail"><a href="mailto:<?= get_field('second-mail'); ?>"><?php the_field('second-mail'); ?></a>
              </p>
            </div>
          </div>
          <div class="last__right col-md-6">
            <div class="last__first">
              <p class="contact__name"><?php the_field('biuro-name'); ?></p>
              <p class="contact__tel"><a href="tel:<?= get_field('biuro-tel'); ?>"><?php the_field('biuro-tel'); ?></a></p>
              <p class="contact__mail"><a href="mailto:<?= get_field('biuro-mail'); ?>"><?php the_field('biuro-mail'); ?></a>
              </p>
            </div>
            <div class="last__second">
              <p class="contact__name"><?php the_field('servis-name'); ?></p>
              <p class="contact__tel"><a href="tel:<?= get_field('servis-tel'); ?>"><?php the_field('servis-tel'); ?></a></p>
              <p class="contact__mail"><a href="mailto:<?= get_field('servis-mail'); ?>"><?php the_field('servis-mail'); ?></a>
              </p>
            </div>
          </div>
        </div>
        <div class="contact__additional row">
          <?php if( have_rows('additional') ): ?>
            <?php while( have_rows('additional') ): the_row(); ?>
            <div class="contact__additional-item col-md-6">
               <p class="contact__add-title"><?php the_sub_field('first-name'); ?></p>
                  <?php if( have_rows('additional__item') ): ?>
                    <?php while( have_rows('additional__item') ): the_row(); ?>
                    <p class="contact__name"><a href="tel:<?= get_sub_field('name'); ?>"><?php the_sub_field('name'); ?></a></p>
                    <p class="contact__tel"><a href="tel:<?= get_sub_field('first-tel'); ?>"><?php the_sub_field('first-tel'); ?></a></p>
                    <p class="contact__mail"><a href="mailto:<?= get_sub_field('first-mail'); ?>"><?php the_sub_field('first-mail'); ?></a>
                    <?php endwhile; ?>
                  <?php endif; ?>
                  </div>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek-contact2.png" alt="" class="contact__bottom-img">
    </div>
  </section>
</main>
<?php
get_footer();
