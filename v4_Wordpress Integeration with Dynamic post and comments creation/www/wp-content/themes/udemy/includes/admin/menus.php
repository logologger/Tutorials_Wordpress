<?php

include(get_template_directory() . '/includes/admin/options-page.php');

function ju_admin_menus(){

    add_menu_page(
        'Udemy Theme Options',
        'Theme Options',
        'edit_theme_options',
        'ju_theme_opts',
        'ju_theme_opts_page'


    );

}

?>