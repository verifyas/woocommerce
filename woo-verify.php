<?php
/*
Plugin Name: Verify Payments
Version: 0.0.2
Plugin URI: https://verify.as
Author: Verify Inc
Author URI: https://verifypayments.com/
License: MIT
*/

if (!defined('ABSPATH')) exit;

add_filter('auto_update_plugin', '__return_true');
add_action('plugins_loaded', 'woo_verify_init', 10);

function woo_verify_init() {
    define('WOO_VERIFY_DIR', plugin_dir_path(__FILE__));

    require_once(WOO_VERIFY_DIR.'/inc/main.php');

    function add_verify_gateway($methods) {
        $methods[] = 'WC_Gateway_Verify';
        return $methods;
    }

    add_filter('woocommerce_payment_gateways', 'add_verify_gateway');
}
