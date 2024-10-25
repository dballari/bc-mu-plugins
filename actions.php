<?php

function admins_remove_menus () {
    if( !is_super_admin() ) {
        remove_submenu_page( 'tools.php', 'ms-delete-site.php' );	//remove delete site menu
    }    
}
    
add_action( 'admin_menu', 'admins_remove_menus', 999 );
