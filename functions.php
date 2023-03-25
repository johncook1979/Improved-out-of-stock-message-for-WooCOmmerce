/*
** Snippet Out of stock up sell
** source code http://wcsuccessacademy.com/?p=435
** Author John Cook
** Tested with WooCommerce 3.3.3
*/
add_action( 'woocommerce_before_single_product_summary', 'my_related_out_of_stock', 15);
function my_related_out_of_stock () {
  global $product;

  // Get the availability
  $availability = $product->get_availability();
  
  /*
  ** check if availability in the array = string 'Out of Stock'
  ** if so display on page.
  */
  if ( $availability['availability'] == 'Out of stock') {
    echo '<h2 style="text-align: center; text-decoration: underline; font-size: 2em;">This item is currently out of stock</h2>';
    echo '<h3 style="text-align: center;">Perhaps one of the following may interest you?</h3>';
    
    // Echo the related products shortcode
    echo do_shortcode( '[related_products]' );
  }
}
