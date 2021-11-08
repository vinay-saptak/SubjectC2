<?php


// adding the CSS and JS files

function gt_setup(){
    wp_enqueue_style('style',get_stylesheet_uri(),NULL, microtime(),'all');
    wp_enqueue_script("main",get_theme_file_uri('/js/main.js'),NULL,microtime(),true);


    // if (is_page(11)) {
    //     wp_register_style('dhaniya', get_theme_file_uri() . '/style/dhaniya.css');
    //     wp_enqueue_style('dhaniya', get_theme_file_uri() . '/style/dhaniya.css');
    // }
     
}

add_action('wp_enqueue_scripts','gt_setup'); 

?>