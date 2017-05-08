<?php
add_action('wp_dashboard_setup', 'sqd_remove_dashboard_widgets');

function sqd_remove_dashboard_widgets () {

      //Completely remove various dashboard widgets (remember they can also be HIDDEN from admin)
      remove_meta_box( 'dashboard_quick_press',   'dashboard', 'side' );      //Quick Press widget
      remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );      //Recent Drafts
      remove_meta_box( 'dashboard_primary',       'dashboard', 'side' );      //WordPress.com Blog
      remove_meta_box( 'dashboard_secondary',     'dashboard', 'side' );      //Other WordPress News
      remove_meta_box( 'dashboard_incoming_links','dashboard', 'normal' );    //Incoming Links
      remove_meta_box( 'dashboard_plugins',       'dashboard', 'normal' );    //Plugins

}