<?php
/**
 * Plugin Name: Kemp Customizer
 * Description: A Plugin that allows for custom CSS and PHP Functions without intrupting the current theme.
 * Version: 1.0
 * Author: Shawn Kemp
 * Author URI: http://besmartdesigns.com
 * License: GPL2
 */
/*  Copyright 2016  Shawn Kemp  (email : shawn@besmartdesigns.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.
    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.
    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
**************************************************************************/
// Define Kemp Customizer Plugin
define( 'KempCust_PLUGIN_VERSION', '1.0' );
define( 'KempCust_PLUGIN__MINIMUM_WP_VERSION', '4.5' );
define( 'KempCust_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'KempCust_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
// Blocks direct access to plugin
defined( 'ABSPATH' ) or die( "Access Forbidden" );
include( plugin_dir_path( __FILE__ ) . 'custom/functions.php');
wp_enqueue_style( 'custom-css', plugins_url( 'custom/style.css', __FILE__ ) );
wp_enqueue_script( 'custom-js', plugins_url( 'custom/custom.js', __FILE__ ), array( 'jquery' ) );
