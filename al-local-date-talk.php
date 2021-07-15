<?php
/*
* Plugin Name: Local and Date of Talk
* Description: Selecting talk local and date
* Version: 1.0.0
* Author: Anderson Laurindo
*/

if(!defined('ABSPATH')){
    die;
}

require_once plugin_dir_path(__FILE__) . '/includes/al-local-date-talk-settings.php';
require_once plugin_dir_path(__FILE__) . '/includes/al-local-date-talk-shortcode.php';
require_once plugin_dir_path(__FILE__) . '/includes/al-local-date-talk-scripts.php';