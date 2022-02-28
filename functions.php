<?php

function WDTP1_enqueue_styles(){



    wp_enqueue_style( 'latofont', 'https://fonts.googleapis.com/css2?family=Lato&display=swap' );



    wp_enqueue_style( 'merrifont', 'https://fonts.googleapis.com/css2?family=Merriweather+Sans&display=swap' );



    wp_enqueue_style( 'maincss', get_template_directory_uri(  ) . '/styles/main.css', array('latofont','merrifont') );



}
