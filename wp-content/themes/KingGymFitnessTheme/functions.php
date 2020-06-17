<?php

require __DIR__.'/inc/setup.php';

//Hook for menu
add_action('init','gymfitness_menu');

//Hook for stylesheet
add_action('wp_enqueue_scripts','gymfitness_scripts');