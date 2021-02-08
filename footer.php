<section class="footer-contact">
  <div class="footer-contact__inner">
    <div class="footer-contact__container container">
      <div class="footer-contact__row row">
        <div class="footer-contact__categories col-md-4">
        <p class="footer-contact__title"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "Kategorie produktów";
             } elseif (ICL_LANGUAGE_CODE == "en") {
                echo "Product categories";
             } else if (ICL_LANGUAGE_CODE == "de") {
				echo "Produkt-Kategorien";
			  }?></p>
         <?php 
         $orderby = 'name';
         $order = 'asc';
         $hide_empty = false ;
         $cat_args = array(
             'orderby'    => $orderby,
             'order'      => $order,
             'hide_empty' => $hide_empty,
         );
          
         $product_categories = get_terms( 'product_cat', $cat_args );
          
         if( !empty($product_categories) ){
             echo '
          
         <ul class="footer__category-list">';
             foreach ($product_categories as $key => $category) {
                 echo '
          
         <li class = "footer__category-item">';
                 echo '<a href="'.get_term_link($category).'" >';
                 echo $category->name;
                 echo '</a>';
                 echo '</li>';
             }
             echo '</ul>
          
          
         ';
         }
         ?>



        </div>
        <div class="footer-contact__links col-md-4">
          <div class="footer-contact__icons">
            <p class="footer-contact__title"><?php the_field('social__title', 'option')?></p>
              <div class="footer-contact__icons-body">
                <a href="<?php the_field('insta', 'option')?>" class="footer-contact__link-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/insta.png" alt=""></a>
                <a href="<?php the_field('face', 'option')?>" class="footer-contact__link-icon" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/face.png" alt=""></a>
              </div>
          </div>
          <div class="footer-contact__face">
            <p class="footer-contact__title"><?php the_field('face-page__title', 'option')?></p>
            <a href="<?php the_field('face-page', 'option')?>" class="footer-contact__face-link" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/facePage.png" alt=""></a>
          </div>
        </div>
        <div class="footer-contact__des col-md-4">
          <p class="footer-contact__title"><?php the_field('footer-des__title', 'option')?></p>
          <p class="footer-contact__text"><?php the_field('footer-des__text', 'option')?></p>
          <p class="footer-contact__title"><?php the_field('footer-des__title-link', 'option')?></p>
            <?php if( have_rows('footer-contact__links', 'option') ): ?>
              <ul class="footer-contact__links">
                <?php while( have_rows('footer-contact__links', 'option') ): the_row(); ?>
                  <li class="footer-contact__link-item">
                    <a href="<?php the_sub_field('footer-contact__link', 'option')?>" class="footer-des__link"><?php the_sub_field('footer-contact__link-text', 'option')?></a>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="footer__seo">
  <a class="footer__seo-link" title="Millenium Studio" href="http://www.milleniumstudio.pl" target="_blank"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "projektowanie stron";
             } elseif (ICL_LANGUAGE_CODE == "en") {
                echo "web design";
             }else if (ICL_LANGUAGE_CODE == "de") {
              echo "Web-Design";
              } ?></a> <span style="cursor:pointer;" onclick="location.href = 'http://www.milleniumstudio.pl';">Millenium Studio</span>
  </div>
</footer>
<?php wp_footer(); ?>

<script>var privacylink = "<?php echo get_page_link(3) ?>";</script>
<script>var privacylinkEn = "<?php echo get_page_link(3957) ?>";</script>
<script>var privacylinkDe = "<?php echo get_page_link(6536) ?>";</script>
<script type="text/javascript">
  DFLIP.defaults.scrollWheel = false;
  dFlipWPGlobal.scrollWheel = false;
</script>

</body>
</html>


