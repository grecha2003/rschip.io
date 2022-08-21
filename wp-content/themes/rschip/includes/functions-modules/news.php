<?php
    add_action('init', function(){
        register_post_type('news', [
            'labels' => [
                'name'               => 'News',
                'singular_name'      => 'News',
                'add_new'            => 'Add new',
                'add_new_item'       => 'Add new news',
                'edit_item'          => 'Edit new news',
                'new_item'           => 'New news',
                'view_item'          => 'View news',
                'search_items'       => 'Search news',
                'not_found'          => 'News not found',
                'not_found_in_trash' => 'News not found in trash',
                'parent_item_colon'  => '',
                'menu_name'          => 'News'
            ],
            'public' => true,
            'has_archive' => false,
            'rewrite' => [
                'with_front' => false
            ]
        ]);
        
    });
