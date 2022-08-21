<?php
    add_action('init', function () {

        register_post_type('shared', [
            'labels' => [
                'name'               => 'Shared',
                'singular_name'      => 'Shared',
                'add_new'            => 'Add new',
                'add_new_item'       => 'Add new shared',
                'edit_item'          => 'Edit new shared',
                'new_item'           => 'New shared',
                'view_item'          => 'View shared',
                'search_items'       => 'Search shared',
                'not_found'          => 'Shared not found',
                'not_found_in_trash' => 'Shared not found in trash',
                'parent_item_colon'  => '',
                'menu_name'          => 'Shared'
            ],
            'public' => true,
            'has_archive' => false,
            'rewrite' => [
                'with_front' => false
            ]
        ]);
    });
