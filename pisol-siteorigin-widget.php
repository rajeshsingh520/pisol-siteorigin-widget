<?php
/**
Plugin Name: Pisol Siteorigin Wiget
Plugin URI: http://100dollarswebsites.com
Description: Site origin widget for fast website making
Version: 1.1
Author: Rajesh singh
Author URI: https://100dollarswebsites.com
Text Domain: pisol-siteorigin-widget
*/

define('PISOL_SITEO_WIDGET_URL', plugin_dir_url(__FILE__));
define('PISOL_SITEO_WIDGET_PATH', plugin_dir_path( __FILE__ ));
define('PISOL_SITEO_WIDGET_BASE', plugin_basename(__FILE__));


function pisol_siteorigin_activation_hoock($folders){
    $folders[] = plugin_dir_path(__FILE__).'pisol-widget/';
    return $folders;
}
add_filter('siteorigin_widgets_widget_folders', 'pisol_siteorigin_activation_hoock');

function pisol_add_widget_tabs($tabs) {
    $tabs[] = array(
        'title' => __('Rajesh Singh', 'pisol-siteorigin-widget'),
        'filter' => array(
            'groups' => array('pisol-widget')
        )
    );

    return $tabs;
}
add_filter('siteorigin_panels_widget_dialog_tabs', 'pisol_add_widget_tabs', 20);

/* Auto update from github */
require 'plugin-update-checker-master/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/rajeshsingh520/pisol-siteorigin-widget/',
	__FILE__,
	'pisol-siteorigin-widget'
);
