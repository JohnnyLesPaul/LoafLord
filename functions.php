<?php 

function loaflord_files() {
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
    wp_enqueue_style('loaflord_main_styles', get_stylesheet_uri());
}

    add_action('wp_enqueue_scripts', 'loaflord_files');

?>