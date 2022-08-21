<?php
    add_action('init', function () {

        register_post_type('faq', [
            'labels' => [
                'name'               => 'Faq',
                'singular_name'      => 'Faq',
                'add_new'            => 'Add new',
                'add_new_item'       => 'Add new faq',
                'edit_item'          => 'Edit new faq',
                'new_item'           => 'New faq',
                'view_item'          => 'View faq',
                'search_items'       => 'Search faq',
                'not_found'          => 'Faq not found',
                'not_found_in_trash' => 'Faq not found in trash',
                'parent_item_colon'  => '',
                'menu_name'          => 'Faq'
            ],
            'public' => true,
            'has_archive' => false,
            'rewrite' => [
                'with_front' => false
            ]
        ]);
    });
