<?php

if (function_exists('acf_add_local_field_group')):

acf_add_local_field_group([
    'key' => 'group_home',
    'title' => 'Homepage Fields',
    'fields' => [
        [
            'key' => 'hero_title',
            'label' => 'Hero Title',
            'name' => 'hero_title',
            'type' => 'text'
        ],
        [
            'key' => 'features',
            'label' => 'Features',
            'name' => 'features',
            'type' => 'repeater',
            'sub_fields' => [
                [
                    'name' => 'title',
                    'type' => 'text'
                ],
                [
                    'name' => 'description',
                    'type' => 'textarea'
                ]
            ]
        ]
    ],
    'location' => [[
        [
            'param' => 'page_type',
            'operator' => '==',
            'value' => 'front_page'
        ]
    ]]
]);

endif;