<?php

add_action( 'wp_enqueue_scripts', 'carclubmk_scripts');

function carclubmk_scripts(){
    wp_enqueue_style( 'carclubmk-styles', get_template_directory_url() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css'));
}