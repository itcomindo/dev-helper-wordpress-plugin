<?php
defined('ABSPATH') || exit;
/**
 * Plugin Name: Dev Helper
 * Plugin URI: https://budiharyono.com
 * Description: A plugin to help developer
 * Version: 1.0.0
 * Author: Budi Haryono
 * Requires PHP: 7.0
 */

 $devDir = dirname(__FILE__);

// included css from plugin dir
function dev_helper_css() {
    wp_enqueue_style('dev-helper-css', plugins_url('css.css', __FILE__));
    wp_enqueue_script('dev-helper-js', plugins_url('js.js', __FILE__), array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'dev_helper_css');
add_action('admin_enqueue_scripts', 'dev_helper_css');

// included php from plugin dir
require_once $devDir . '/workspace.php';