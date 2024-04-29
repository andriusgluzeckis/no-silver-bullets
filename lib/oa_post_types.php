<?php
/**
 * Products
 */
add_action('init', function ()
{
    $plural = 'FAQ\'s';
    $singular = 'FAQ';
    // this is your indentifier to make WP Query
    $posttype = 'faq';
    $description = '';
    $slug = 'faq';
    $labels = [
        'name'               => _x($plural, 'post type general name', 'no-silver-bullets'),
        'singular_name'      => _x($singular, 'post type singular name', 'no-silver-bullets'),
        'menu_name'          => _x($plural, 'admin menu', 'no-silver-bullets'),
        'name_admin_bar'     => _x($singular, 'add new on admin bar', 'no-silver-bullets'),
        'add_new'            => _x('Add New', $singular, 'no-silver-bullets'),
        'add_new_item'       => __('Add New '.$singular, 'no-silver-bullets'),
        'new_item'           => __('New '.$singular, 'no-silver-bullets'),
        'edit_item'          => __('Edit '.$singular, 'no-silver-bullets'),
        'view_item'          => __('View '.$singular, 'no-silver-bullets'),
        'all_items'          => __('All '.$plural, 'no-silver-bullets'),
        'search_items'       => __('Search '.$plural, 'no-silver-bullets'),
        'parent_item_colon'  => __('Parent: '.$plural, 'no-silver-bullets'),
        'not_found'          => __('No '.strtolower($singular).' found.', 'no-silver-bullets'),
        'not_found_in_trash' => __('No '.strtolower($singular).' found in Trash.', 'no-silver-bullets')
    ];
    $args = array(
        'labels'             => $labels,
        'description'        => __($description, 'no-silver-bullets'),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-cart',
        'query_var'          => true,
        'rewrite'            => ['with_front' => false],
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => null,
        // Here you can add more support like Editor and etc.
        'supports'           => [],
        'taxonomies'         => [],
    );
    register_post_type($posttype, $args);
});