<?php

if(!class_exists('WC_Gateway_Verify')) {
 class WC_Gateway_Verify extends WC_Payment_Gateway {
       public function __construct() {
            global $woocommerce;

            $this->id = 'verify';
             $this->icon = apply_filters('woocommerce_verify_logo', 'wp-content/plugins/verify/assets/images/verify-logo.png');

            $this->has_fields = true;

            // Load the settings
            $this->init_form_fields();
            $this->init_settings();

            // Define user set variables
            $this->title = "Verify Payments";
            $this->description = $this->get_option('description');

            add_action('woocommerce_receipt_' . $this->id, array($this, 'receipt_page'));
            add_action('wp_enqueue_scripts', array($this, 'payment_scripts'));

            add_action('woocommerce_update_options_payment_gateways_' . $this->id, array($this, 'process_admin_options'));

            if (!$this->is_valid_for_use()) {
                $this->enabled = false;
            }
        }

        function payment_scripts() {
            global $woocommerce;

            if (!is_checkout()) {
                return;
            }

            wp_enqueue_script('verify-checkout', plugins_url('verify/assets/js/checkout.js'), array('verify'), WC_VERSION, true);
            wp_enqueue_style( 'verify', plugins_url( 'verify/assets/css/main.css'));
        }

        public function admin_options() {
            ?>
            <h3><?php _e('Verify Payments', 'woocommerce'); ?></h3>
            <table class="form-table">
                <?php $this->generate_settings_html(); ?>
            </table>
            <?php
        }

        function init_form_fields() {
            $this->form_fields = array(
                'enabled' => array(
                    'title' => __('Enable/Disable', 'woocommerce'),
                    'type' => 'checkbox',
                    'label' => __('Enable the Verify payment solution', 'woocommerce'),
                    'default' => 'yes'
                ),
                'description' => array(
                    'title' => __('Description', 'woocommerce'),
                    'type' => 'text',
                    'description' => __('This is the description the user sees during checkout.', 'woocommerce'),
                    'default' => __('Pay for your items with crypto currency', 'woocommerce')
                )
            );
        }

        function payment_fields() {
            global $woocommerce;

            if ($this->description) {
                echo "<p>" . $this->description . "</p>";
            }
        }

        function process_payment($order_id) {
            global $woocommerce;

            $order = new WC_Order($order_id);
            $order->payment_complete();

            return array(
                'result' => 'success',
                'redirect' => $this->get_return_url($order)
            );
        }

    }
}
new WC_Gateway_Verify();
