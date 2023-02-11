<?php
namespace App;

/**
 * Register a Post Types
 */
function registerPostTypes()
{
    // $site_cpts = array('new_cpts' => true);

    // $cpts = [];

    // if ($site_cpts['new_cpts']) {
    //     $cpts['new_cpts'] = [
    //         'singular' => 'New CPT',
    //         'multiple' => 'new_cpts',
    //         'has_page' => true,
    //         'args' => [
    //             'menu_icon' => 'dashicons-testimonial',
    //         ],
    //     ];
    // }

    collect($cpts)->map(function ($args, $post_type) {
        register_post_type($post_type, array_merge([
            'labels' => [
                'name' => __($args['multiple'], 'nova'),
                'singular_name' => __($args['singular'], 'nova'),
                'menu_name' => __($args['multiple'], 'nova'),
                'add_new' => __(sprintf('Add %s', $args['singular']), 'nova'),
                'add_new_item' => __(sprintf('Add New %s', $args['singular']), 'nova'),
                'new_item' => __(sprintf('New %s', $args['singular']), 'nova'),
                'edit_item' => __(sprintf('Edit %s', $args['singular']), 'nova'),
                'view_item' => __(sprintf('View %s', $args['singular']), 'nova'),
                'all_items' => __(sprintf('View %s', $args['multiple']), 'nova'),
                'search_items' => __(sprintf('Search %s', $args['multiple']), 'nova'),
                'not_found' => __(sprintf('No %s Found', $args['multiple']), 'nova'),
                'not_found_in_trash' => __(sprintf('No %s found in Trash.', $args['multiple']), 'nova'),
            ],
            'description' => '',
            'public' => $args['has_page'],
            'menu_icon' => 'dashicons-admin-page',
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 20,
            'capability_type' => 'post',
            'map_meta_cap' => true,
            'hierarchical' => false,
            'rewrite' => ['slug' => $post_type, 'with_front' => false],
            'query_var' => true,
            'supports' => ['title', 'editor', 'excerpt', 'thumbnail', 'page-attributes'],
            'has_archive' => true,
            'exclude_from_search' => $args['has_page'],
            'publicly_queryable' => $args['has_page'],
        ], $args['args']));
    });
}
add_action('init', __NAMESPACE__ . '\\registerPostTypes', 0);
