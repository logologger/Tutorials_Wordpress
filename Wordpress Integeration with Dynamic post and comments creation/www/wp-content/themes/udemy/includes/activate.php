<?php

function ju_activate(){

    if(version_compare(get_bloginfo('version'),'4.1','<')){
        wp_die(__("You must have minimum version to use themme"));
    }


    $theme_opts = get_option( 'ju_opts' );

    if(!$theme_opts){
        $opts = array(
            'facebook'=>'',
            'youtube'=>'',
            'twitter'=>'',
            'logo_type' => 1,
            'logo_img' => '',
            'footer' => ''




        );


        add_option('ju_opts',$opts);
    }


}

?>