<?php
/*
 *  GLOBAL VARIABLES
 */
define('THEME_DIR', get_stylesheet_directory());
define('THEME_URL', get_stylesheet_directory_uri());
/*
 *  INCLUDED FILES
 */
$file_includes = [
    'inc/theme-assets.php',                 // Style and JS
    'inc/theme-setup.php',                  // General theme setting
    'inc/acf-options.php',                  // ACF Option page
    'inc/duplicate.php',              // Dupplicate Post
];
foreach ($file_includes as $file) {
    if (!$filePath = locate_template($file)) {
        trigger_error(sprintf(__('Missing included file'), $file), E_USER_ERROR);
    }
    require_once $filePath;
}
unset($file, $filePath);
// //404
// add_action('wp', 'redirect_404_to_homepage', 1);
// function redirect_404_to_homepage()
// {
//     global $wp_query;
//     if ($wp_query->is_404) {
//         wp_redirect(get_bloginfo('url') . '/loi-404', 301);
//         exit;
//     }
// }
function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
  }
  add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

function get_button_card(){
  global $product;

  echo apply_filters( 'woocommerce_loop_add_to_cart_link',
  sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="button %s product_type_%s">%s</a>',
  esc_url( $product->add_to_cart_url() ),
  esc_attr( $product->get_id() ),
  esc_attr( $product->get_sku() ),
  $product->is_purchasable() ? 'add_to_cart_button' : '',
  esc_attr( $product->get_type() ),
  esc_html( $product->add_to_cart_text() )
  ),
  $product );
}
