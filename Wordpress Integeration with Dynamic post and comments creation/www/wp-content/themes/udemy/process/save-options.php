<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/4/17
 * Time: 11:54 PM
 */

function ju_save_options(){
   if(!current_user_can('edit_theme_options')){
       wp_die(__('You are now allowed to be on this page'));
   }

   check_admin_referer('ju_options_verify');

   $opts = get_option('ju_opts');
   $opts['twitter'] = sanitize_text_field($_POST['ju_inputTwitter']);
   $opts['facebook'] = sanitize_text_field($_POST['ju_inputFacebook']);
    $opts['youtube'] = sanitize_text_field($_POST['ju_inputYoutube']);
    $opts['logo_type'] = absint($_POST['ju_LogoType']);

    update_option('ju_opts',$opts);

    wp_redirect('admin.php?page=ju_theme_opts');
}