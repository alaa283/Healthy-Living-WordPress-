<?php

function add_scripts_styles()
{
    wp_enqueue_style( 'animate', get_template_directory_uri(). '/style1.css');

    // wp_enqueue_style( 'erase style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'add_scripts_styles' );