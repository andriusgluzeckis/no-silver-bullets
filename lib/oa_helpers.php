<?php

use \Detection\MobileDetect;

// Add options page feature
if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ]);
}

/**
 * Custom classes to menu list item anchor
 *
 * @param array $array list of the classes
 * @param object $item WP_Post object
 * @param object $args WP_Query args
 * @param string $depth menu item level
 */
function oa_nav_menu_list_item_anchor_classnames($array, $item, $args, $depth)
{
    if (isset($args->menu_class) && $args->menu_class) {
        if (!isset($array['class'])) {
            $array['class'] = [];
        }
        $array['class'] = sprintf('%s-anchor anchor-%s', $args->menu_class, strtolower($item->title));
    }
    return $array;
}
add_filter('nav_menu_link_attributes', 'oa_nav_menu_list_item_anchor_classnames', 10, 4);

/**
 * Custom classes to menu list item
 *
 * @param array $array list of the classes
 * @param object $item WP_Post object
 * @param object $args WP_Query args
 * @param string $depth menu item level
 */
function oa_nav_menu_list_item_classnames($array, $item, $args, $depth)
{
    if (isset($args->menu_class) && $args->menu_class) {
        $array[] = sprintf('%s-item %s-menu-item group', $args->menu_class, sanitize_title($item->title));
    }
    return $array;
}
add_filter('nav_menu_css_class', 'oa_nav_menu_list_item_classnames', 10, 4);

