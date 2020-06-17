<?php

//function for menu
function gymfitness_menu()
{
    register_nav_menus([
        'main-menu' => 'Main menu'
    ]);
}

// function for stylesheets
function gymfitness_scripts()
{
    wp_enqueue_style('normalize',get_template_directory_uri().'css/normalize.css',[],'8.0.1');
    // Google font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0' );
    //Main style sheet
    wp_enqueue_style('style',get_stylesheet_uri(),['normalize','googlefont'],'1.0.0');

}