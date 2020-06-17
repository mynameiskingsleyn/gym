<?php

/**
 *  sets up menu for hooks
 */
function gymfitness_menu()
{
    register_nav_menus([
        'main-menu' => 'Main menu'
    ]);
}

/**
 * function that sets up styles and scripts for script hooks
 */
function gymfitness_scripts()
{
    wp_enqueue_style('normalize',get_template_directory_uri().'css/normalize.css',[],'8.0.1');
    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );

    // slicknav css
    wp_enqueue_style('slicknavcss',get_template_directory_uri().'css/slicknav.min.css',[],'1.0.10');

    //Main style sheet
    wp_enqueue_style('style',get_stylesheet_uri(),['normalize','googlefont'],'1.0.0');


    /** load javascript files */
    wp_enqueue_script('jquery');
    wp_enqueue_script('slicknavjs',get_template_directory_uri().'/js/jquery.slicknav.min.js',['jquery'],'1.0.10',true);

    wp_enqueue_script('scripts',get_template_directory_uri().'/js/scripts.js',['jquery'],'1.0.0',true);
}