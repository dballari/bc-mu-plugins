<?php
/*
Plugin Name: BC Mu-Plugin
Description: Must use plugin for the Ballarin Consulting site.
Version: 1.0.3
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

/**
 * SiteGround PDF: La seguridad Importa
 */
function no_wordpress_login_errors() {
    return 'ERROR: not able to login.';
}

add_filter( 'login_errors', 'no_wordpress_login_errors', 999);

/**
 * Remove some top level menu items added by plugins
 */
function admin_remove_top_menu() {
    if( !is_super_admin() ) {
        remove_menu_page( 'loginizer' );    
        remove_menu_page( 'wp-mail-smtp' );
    }
    
}
add_action( 'admin_menu', 'admin_remove_top_menu', 999 );
