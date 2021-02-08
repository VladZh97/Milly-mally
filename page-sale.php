<?php /*Template Name: Gdzie kupić */

 get_header(); ?>

<main class="buy-main">
<section class="top">
    <div class="top__inner">
      <div class="top__container container">
        <h1 class="top__title"><?= the_title(); ?></h1>
      </div>
    </div>
</section>
<section class="buy">
  <div class="buy__inner">
    <div class="container">
      <?= do_shortcode(' [ASL_STORELOCATOR cat_sort="order"]')?>  
    </div>
  </div>
</section>

</main>
<?php
get_footer();