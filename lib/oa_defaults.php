<?php

/**
 * Add resources to the theme on setup.
 * Initial styles, js, theme setting here.
 */
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', ['search-form']);
    add_post_type_support('page', 'excerpt');
    
    register_nav_menus([
        'primary' => __('Main Navigation', 'no-silver-bullets'),
        'footer' => __('Footer Navigation', 'no-silver-bullets'),
    ]);
});

// Removing unneeded features

add_filter('use_block_editor_for_post', '__return_false', 5);           // Disable block editor, for Flexible content build approach
add_filter('use_default_gallery_style', '__return_false');              // Disable default gallery styles
// add_filter('emoji_svg_url', '__return_false');                          // Disable emoji hosting
add_filter('show_recent_comments_widget_style', '__return_false');      // Disable comments widget stylesheet
add_filter('pre_site_transient_update_core', '__return_null');          // Disable notifications about core updates
add_filter('pre_site_transient_update_themes', '__return_null');        // Disable notifications about theme updates
add_filter('pre_set_site_transient_update_plugins', '__return_null');   // Disable notifications about plugins updates

remove_action('wp_head', 'wp_resource_hints', 2);                       // Remove resource hints so we don't get unwanted links to other sub sites with rel="dns-prefetch".
remove_action('wp_head', 'feed_links_extra', 3);                        // Removes Feed links
remove_action('wp_head', 'rsd_link');                                   // Removes xmlrpc.php in the header
remove_action('wp_head', 'wlwmanifest_link');                           // Removes Windows Live Writer? Ew!
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);        // Removes Displays relational links for the posts adjacent to the current post for single post pages
remove_action('wp_head', 'wp_generator');                               // Remove version
remove_action('wp_head', 'wp_shortlink_wp_head', 10);                   // Remove HTML meta tag
remove_action('wp_head', 'print_emoji_detection_script', 7);            // Removes the inline Emoji detection script
remove_action('admin_print_scripts', 'print_emoji_detection_script');   // Removes the inline Emoji detection script from admin
remove_action('wp_print_styles', 'print_emoji_styles');                 // Remove the emoji-related styles
remove_action('admin_print_styles', 'print_emoji_styles');              // Remove the emoji-related styles from the admin
remove_action('wp_head', 'wp_oembed_add_discovery_links');              // Removes oEmbed discovery links in the website
remove_action('wp_head', 'wp_oembed_add_host_js');                      // Removes oEmbed host js in the website
remove_action('wp_head', 'rest_output_link_wp_head', 10);               // Removes the REST API link tag into page header
remove_action('wp_head', 'wp_resource_hints', 2);                       // Removes resource hints to browsers for pre-fetching, pre-rendering and pre-connecting to web sites
remove_filter('the_content_feed', 'wp_staticize_emoji');                // Removes emoji from content feed
remove_filter('comment_text_rss', 'wp_staticize_emoji');                // Removes emoji from rss
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');               // Removes emoji wrom mail

/**
 * Debug data
 * @param $data
 */
function pre($data)
{
    printf('<pre>%s</pre>', print_r($data, true));
}