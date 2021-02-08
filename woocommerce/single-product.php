<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
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
			  } ?></h1>
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

		<?php while ( have_posts() ) : ?>
			<?php the_post(); ?>

			<?php wc_get_template_part( 'content', 'single-product' ); ?>

		<?php endwhile; // end of the loop. ?>

	<?php
		/**
		 * woocommerce_after_main_content hook.
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

</div>

</div>
</div>
</div>
</section>
</article>
</main>
<?php
get_footer();