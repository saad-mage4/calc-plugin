<?php

/**
 * Plugin Name:       Payment Calculator
 * Plugin URI:        #
 * Description:       Calculator (Armor Fence)
 * Version:           1.0.0
 * Author:            Mage4
 * Author URI:        #
 */
define('PLUGIN_URL', plugin_dir_url(__FILE__));
wp_enqueue_style('company-reg-form', PLUGIN_URL . 'assets/css/style.min.css');

if (!defined('ABSPATH')) {
    die;
}

if (!function_exists("calculate_shortcode")) {
    function calculate_shortcode()
    {
        ob_start();
?>
        <div class="main-wrapper">
            <form id="calculate-form">
                <div class="fields">
                    <div class="form-group col-6">
                        <label for="firstName">first Name</label>
                        <input type="text" name="firstName" id="firstName" placeholder="First Name">
                    </div>
                    <div class="form-group col-6">
                        <label for="lastName">Last Name</label>
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name">
                    </div>
                    <div class="form-group col-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-6">
                        <label for="phone">Phone</label>
                        <input type="text" name="phone" id="phone" placeholder="xxx-xxx-xxxx">
                    </div>
                    <div class="form-group col-6">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" id="amount" placeholder="$2000">
                    </div>
                    <div class="form-group col-6">
                        <label for="type">Loan Type</label>
                        <select name="type" id="type" placeholder="$2000">
                            <option value="" selected hidden>Select Type</option>
                            <option value="preequal">Pre Equal</option>
                            <option value="credit">Credit</option>
                        </select>
                    </div>
                    <div class="form-group btn-center jcr d-flex col-12">
                        <button class="btn" type="submit" id="cal-form">Calculate</button>
                    </div>
            </form>
        </div>
        <script>
            jQuery(document).ready(function($) {});
        </script>
<?php
        return ob_get_clean();
    }
}

add_shortcode('calculate', 'calculate_shortcode');
?>