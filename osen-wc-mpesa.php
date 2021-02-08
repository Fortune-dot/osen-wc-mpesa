<?php

/**
 * @package Mpesa for WooCommerce
 * @author Osen Concepts < hi@osen.co.ke >
 * @version 2.2.8
 *
 * Plugin Name: Osen WC Mpesa 
 * Plugin URI: https://wcmpesa.co.ke/
 * Description: This plugin extends WordPress and WooCommerce functionality to integrate <cite>Mpesa</cite> for making and receiving online payments.
 * Author: Osen Concepts Kenya < hi@osen.co.ke >
 * Version: 2.2.8
 * Author URI: https://osen.co.ke/
 *
 * Requires at least: 4.6
 * Tested up to: 5.5.1
 *
 * WC requires at least: 3.5.0
 * WC tested up to: 4.6
 *
 * License: GPLv3
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html

 * Copyright 2020  Osen Concepts

 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License, version 3, as
 * published by the Free Software Foundation.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USAv
 */

// Exit if accessed directly.
if (!defined('ABSPATH')) {
    exit;
}

define('WCM_VER', '2.2.8');
if (!defined('WCM_PLUGIN_FILE')) {
    define('WCM_PLUGIN_FILE', __FILE__);
}

require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';

function osen_setup_wc_mpesa()
{
    /**
     * Initialize all plugin features and utilities
     */
    new Osen\Woocommerce\Initialize;
    new Osen\Woocommerce\Utilities;

    /**
     * Initialize all our custom post types
     */
    new Osen\Woocommerce\Post\Types\C2B;

    /**
     * Initialize our admin menus
     */
    new Osen\Woocommerce\Admin\Menu;

    /**
     * Initialize metaboxes for C2B API
     */
    new Osen\Woocommerce\Post\Metaboxes\C2B;
}

/**
 * Initialize everything
 */
osen_setup_wc_mpesa();
