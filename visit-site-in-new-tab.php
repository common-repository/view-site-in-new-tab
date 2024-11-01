<?php
/*
Plugin Name: Visit Site In New Tab
Plugin URI: http://wordpress.org/plugins/visit-site-in-new-tab/
Description: Make "Visit Site" Link open in new tab
Author: Farzad Setoode
Version: 1.1
License: GPLv2
*/

add_action( 'admin_bar_menu', 'shatel_view', 999 );
function shatel_view( $wp_admin_bar ) {
    $all_toolbar_nodes = $wp_admin_bar->get_nodes();
	foreach ( $all_toolbar_nodes as $node ) {
        if($node->id == 'site-name' || $node->id == 'view-site')
        {
		$args = $node;
            $args->meta = array('target' => '_blank');
		$wp_admin_bar->add_node( $args );
        }
	}
}