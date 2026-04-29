<?php

add_action('wp_head', function () {
    echo "<!-- ENQUEUE FILE IS LOADED -->";
});

function avantis_assets() {

    wp_enqueue_style(
        'main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        time()
    );

    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        time(),
        true
    );
     wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
    );
}

add_action('wp_enqueue_scripts', 'avantis_assets');