<?php

function WDTP1_enqueue_styles(){



    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );



    wp_enqueue_style( 'merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap' );



    wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css', array('latofont','merrifont') );
}
add_action( 'wp_enqueue_scripts', 'WDTP1_enqueue_styles' );


function WDTP1_add_theme_support(){

    //afficher image

    add_theme_support( 'post-thumbnails');

    add_theme_support( 'title-tag');
}
add_action( 'after_setup_theme' , 'WDTP1_add_theme_support' );



function WDTP1_register_menus(){

    register_nav_menus( array(

        'main-menu'=> __('Menu principal')

    ) );

}
add_action( 'after_setup_theme','WDTP1_register_menus');

function simplenews_widgets_init($id){

    register_sidebar( array(

        'name'=>'Widget 1',

        'id' => 'widget-1',

        'description' => 'widget affiché en haut du sidebar',

        'before_widget'=> '<div class="side-widget">',

        'after_widget'=> '</div>'

    ) );

    register_sidebar( array(

        'name'=>'Widget 2',

        'id' => 'widget-2',

        'description' => 'widget affiché en bas du sidebar',

        'before_widget'=> '<div class="side-widget">',

        'after_widget'=> '</div>'

    ) );

}

add_action( 'widgets_init','simplenews_widgets_init' );