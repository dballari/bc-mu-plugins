<?php
/*
Plugin Name: BC Mu-Plugin
Description: Must use plugin for the Ballarin Consulting site.
Version: 1.0
Author: David Ballarin Prunera
*/

/**
 * https://wpmudev.com/forums/topic/remove-ability-to-delete-site/
 */
function admins_remove_menus () {
    if( !is_super_admin() ) {
        remove_submenu_page( 'tools.php', 'ms-delete-site.php' );	//remove delete site menu
    }    
}
    
add_action( 'admin_menu', 'admins_remove_menus', 999 );
