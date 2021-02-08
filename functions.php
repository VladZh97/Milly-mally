<?php

add_theme_support( 'title-tag' );

function register_my_menus() {
  register_nav_menus( array(
    'main' => esc_html__( 'Primary' )
  ) );
}
add_action( 'init', 'register_my_menus' );



function include_my_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), null, true);
  wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), null, true);
  wp_enqueue_script('owl-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), null, true);
  wp_enqueue_script('pagination', get_template_directory_uri() . '/assets/js/jquery.simplePagination.js', array('jquery'), null, true);
    wp_enqueue_script('mapbox-script', 'https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js', array('jquery'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), null, true);


  wp_enqueue_style('mapbox-style', 'https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css');
  wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
  wp_enqueue_style('owl-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css');
  
}
add_action('wp_enqueue_scripts', 'include_my_scripts');


  // ACF Theme setting page
function my_acf_op_init() {
  if( function_exists('acf_add_options_page') ) {
    acf_add_options_sub_page(array(
      'parent_slug' => 'themes.php',
      'page_title'     => 'Ustawienia motywu',
      'menu_title'     => 'Ustawienia motywu',
      'menu_slug'     => 'theme-setting',
      'position' => '21',
    ));
  }
}
add_action('acf/init', 'my_acf_op_init');

add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_single_add_to_cart_text' ); 
function woocommerce_custom_single_add_to_cart_text() {
    return __( 'Buy Now', 'woocommerce' ); 
}



add_theme_support( 'woocommerce' );







 if (ICL_LANGUAGE_CODE == "pl") {

  function wc_custom_shop_archive_title( $title ) {
    if ( is_shop() && isset( $title['title'] ) ) {
        $title['title'] = 'Oferta';
    }
  
    return $title;
  }
  add_filter( 'document_title_parts', 'wc_custom_shop_archive_title' );


// To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'zobacz więcej', 'woocommerce' );
}
  
  
  } else if (ICL_LANGUAGE_CODE == "en") {

    function wc_custom_shop_archive_title( $title ) {
      if ( is_shop() && isset( $title['title'] ) ) {
          $title['title'] = 'Offer';
      }
    
      return $title;
    }
    add_filter( 'document_title_parts', 'wc_custom_shop_archive_title' ); 



    // To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'See more', 'woocommerce' );
}
  } else if (ICL_LANGUAGE_CODE == "de") {

    function wc_custom_shop_archive_title( $title ) {
      if ( is_shop() && isset( $title['title'] ) ) {
          $title['title'] = 'Angebot';
      }
    
      return $title;
    }
    add_filter( 'document_title_parts', 'wc_custom_shop_archive_title' ); 



    // To change add to cart text on product archives(Collection) page
add_filter( 'woocommerce_product_add_to_cart_text', 'woocommerce_custom_product_add_to_cart_text' );  
function woocommerce_custom_product_add_to_cart_text() {
    return __( 'Mehr sehen', 'woocommerce' );
}
  } 




add_filter( 'site_transient_update_themes', 'remove_update_themes' );
function remove_update_themes( $value ) {
    return null;
}


add_action( 'pre_get_posts', 'custom_pre_get_posts' );
function custom_pre_get_posts($query) {
    if ( is_woocommerce() ) {
        $query->set('posts_per_page', -1);
    }

    return $query;
}


add_action('admin_head', 'my_custom_fonts');

function my_custom_fonts() {
  echo '<style>
    #menu-comments, #toplevel_page_wpf_search, #toplevel_page_woo-variation-swatches-settings, #toplevel_page_woocommerce-marketing {
      display: none;
    } 
  </style>';
}

?>