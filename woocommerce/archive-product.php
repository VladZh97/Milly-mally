<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' );


get_header(); ?> 
<main class="buy-main">
<section class="top">
	 <div class="top__inner">
		 <div class="top__container container"> 
			 <h1 class="top__title"><?php if (ICL_LANGUAGE_CODE == "pl") {
             echo "Oferta";
             } elseif (ICL_LANGUAGE_CODE == "en") {
                echo "Offer";
             } else if (ICL_LANGUAGE_CODE == "de") {
				echo "Angebot";
			  }?></h1>
		 </div>
	 </div>
</section>

<section class="products">
  <div class="products__inner">
    <div class="products__container container">
      <div class="products__row row">
        <div class="products__left col-md-4">
          <?= do_shortcode('[wcas-search-form]'); ?>
          <?= do_shortcode('[searchandfilter id="category_filter"]')?>
          <div class="products__buttons">
		  <a href="<?php the_field('header__button1', 'option') ?>" class="products__buttons-first"><?php the_field('header__button-text1', 'option') ?></a>
          <a href="<?php the_field('header__button2', 'option') ?>" class="products__buttons-second"><?php the_field('header__button-text2', 'option') ?></a>
          </div>
        </div>
        <div class="products__right col-md-8">
<?php
if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

?>

<div id="pagination-container"></div>
</div>

</div>
</div>
</div>
</section>
</main>
<?php
get_footer( 'shop' );
