<?php

/**
 * Prevent the author archive page being reached and also prevent the authors on the site
 * being enumerated via the ?author=X mechanism in the query string.
 * 
 * Can be overridden to allow the author archive page by hooking the 'oa_hide_author_archive'
 * filter and setting the value to false.
 */


if (!is_admin()) {
    // default URL format
    if (preg_match('/author=([0-9]*)/i', $_SERVER['QUERY_STRING'])) {
        add_action('wp', 'oa_author_archive_404');
    }
   
    add_filter('redirect_canonical', 'oa_redirect_canonical', 10, 2);
}

function oa_redirect_canonical($redirect, $request)
{
    // permalink URL format
    if (preg_match('/\?author=([0-9]*)(\/*)/i', $request)) {
        add_action('wp', 'oa_author_archive_404');
    } else {
        return $redirect;
    }
}
function oa_author_page_redirect()
{
    if (apply_filters('oa_hide_author_archive', true) && is_author()) {
        wp_redirect(home_url());
    }
}
function oa_author_archive_404()
{
    if (apply_filters('oa_hide_author_archive', true)) {
        global $wp_query;
        $wp_query->set_404();
        status_header(404);
    }
}   
add_action('template_redirect', 'oa_author_page_redirect');