<?php
/**
* Plugin Name: Basic Plugin
* Plugin URI: http://sethquittner.com
* Description: A test plugin
* Author: Seth Quittner
* Author URI: http://sethquittner.com
* Version: 1.0.0
* License: GPLv2
*/
include 'inc/remove-dashboard-widgets.php';
include 'inc/add-bio-cpt.php';

function sqd_add_google_link(){
  global $wp_admin_bar;
  $wp_admin_bar->add_menu( Array(
      'id' => 'google_analytics',
      'title' => 'Google Analytics SQD',
      'href' => 'http://google.com/analytics',
      'meta' => array('target' => '_blank' )
  ) );

}
add_action('wp_before_admin_bar_render', 'sqd_add_google_link');

// function sqd_change_label( $plural ){
//   $plural = "Biograpy";
//   return $plural;
// }
// add_filter('sqd_label_plural', 'sqd_change_label' );
