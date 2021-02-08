<?php /*Template Name: Współpraca */

get_header(); ?>

<main class="cooperation-main">
<section class="top">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
</section>
<section class="cooperation">
  <div class="cooperation__inner">
    <div class="cooperation__container container">
    <div class="cooperation__row row">
      <div class="cooperation__text col-md-7">
        <div class="cooperation__content"><?php echo the_content('')?></div>
      </div>
        <div class="cooperation__contact col-md-5">
          <h2 class="contact__title cooperation__contact-title"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "Formularz kontaktowy";  
             } elseif (ICL_LANGUAGE_CODE == "en") {
                  echo "Contact form";  
                  } elseif (ICL_LANGUAGE_CODE == "de") {
                    echo "Kontakt-Formular";  
                    } ?></h2>

          <?php if (ICL_LANGUAGE_CODE == "pl") {
             echo do_shortcode('[contact-form-7 id="1850" title="Współpraca"]');  
             } else if (ICL_LANGUAGE_CODE == "en") {
                  echo do_shortcode('[contact-form-7 id="3449" title="Współpraca (en)"]');  
                  } else if (ICL_LANGUAGE_CODE == "de") {
                    echo do_shortcode('[contact-form-7 id="6568" title="Współpraca (de)"]');  
                    }?>


          
        </div> 
    </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek-contact2.png" alt="" class="contact__bottom-img">
  </div>
</section>
</main>
<?php
get_footer();