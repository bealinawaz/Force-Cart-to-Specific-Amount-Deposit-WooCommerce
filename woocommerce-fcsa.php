<?php
/*
Plugin Name: WooCommerce: Force Cart to Specific Amount
Plugin URI: http://peppergang.com
Author: Ali Nawaz
Author URI: http://bealinawaz.com
Description: WooCommerce: Force Cart to Specific Amount (Deposit)
Version: 1.0
*/




// Note: this will force Cart to $1
 
add_action( 'woocommerce_cart_calculate_fees','bealinawaz_force_cart_to_1' );
 
function bealinawaz_force_cart_to_1() {
    $total_minus_1 = WC()->cart->get_cart_contents_total() - 1;
    WC()->cart->add_fee( 'Adjustment', $total_minus_1 * -1 );
}
