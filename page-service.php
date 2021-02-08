<?php /*Template Name: Formularz serwisowy */

 get_header(); ?>

<main class="service__main">
<section class="top top__offer">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="service">
    <div class="service__inner">
      <div class="service__container container">
        <?php echo do_shortcode('[contact-form-7 id="160" title="Formularz serwisowy"]')?>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/pasek_serv.png" alt="" class="contact__bottom-img">
    </div>
  </section>
</main>
<?php
get_footer();