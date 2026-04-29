<?php

function avantis_cpt() {

    register_post_type('testimonial', [
        'labels' => [
            'name' => 'Testimonials'
        ],
        'public' => true,
        'supports' => ['title', 'editor'], 
        'menu_icon' => 'dashicons-format-quote'
    ]);

}
add_action('init', 'avantis_cpt');