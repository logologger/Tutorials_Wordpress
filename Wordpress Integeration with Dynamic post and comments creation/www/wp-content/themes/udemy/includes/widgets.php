<?php

function ju_widgets(){

    register_sidebar(array(
        'name'          => __('My First  theme Sidebar','udemy'),
        'id'            => 'ju_sidebar',
        'description'   => __('Sidebar for the theme Udemy','udemy'),
        'class'         => '',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div></div></div>',
        'after_title'   => '</span></div><div class="card-content"><div class="widget">',
        'before_title'  => '<div class="card-header bg-primary"><span class="card-title">'



    ));
}

?>