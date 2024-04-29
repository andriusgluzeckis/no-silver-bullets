<?php 

/**
 * Enqueue Styles & Scripts
 * 
 * @return void
 */
function oa_styles_and_scripts(): void
{
    global $wp_styles;
    $version = wp_get_theme()->get("Version");
    // $min = getenv('WP_ENV') !== 'development' ? '.min' : '';
    $min = '';
    $distDir = sprintf('%s/dist', get_template_directory_uri());

    if (!is_admin()) {

        // Deregister unminified 3rd libraries
        wp_deregister_script('jquery-migrate');
        wp_deregister_script('jquery');
        wp_dequeue_style('classic-theme-styles');
        wp_dequeue_style('wp-block-library');

        // Load jQuery scripts as some plugins using jquery
        wp_register_script('jquery', 'https://code.jquery.com/jquery-3.6.0.min.js', [], '3.6.0', null);
        wp_enqueue_script('jquery');

        wp_register_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.3.2.min.js', ['jquery'], '3.3.2', true);
        wp_enqueue_script('jquery-migrate');

        // Load main stylesheet
        wp_register_style('main-styles', sprintf('%s/styles%s.css', $distDir ,$min), false, $version, 'screen');
        wp_enqueue_style('main-styles');

        // Load main script
        wp_register_script('main-script', sprintf('%s/main%s.js', $distDir ,$min), [], $version, true);
        wp_enqueue_script('main-script');
    }
}

add_action('wp_enqueue_scripts', 'oa_styles_and_scripts');

/**
 * On script load checking or script have integrity data 
 * if no adding custom attribute to script in this case for jQuery integrity attr with sha key
 * 
 * @param string $tag Script id.
 * @param string $handle Script string.
 * @return array|string
 */
function oa_scripts_attributes(string $tag, string $handle): string
{
    $integrity = wp_scripts()->get_data($handle, 'integrity');
    $is_integrity = false;
    $sha = '';
    switch ($handle) {
        case 'jquery' :
            $sha = 'sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=';
            $is_integrity = true;

            break;
        case 'jquery-migrate' :
            $sha = 'sha256-Ap4KLoCf1rXb52q+i3p0k2vjBsmownyBTE1EqlRiMwA=';
            $is_integrity = true;
            break;
    }
    if (!$integrity && $is_integrity) {
        $tag = str_replace('></', sprintf(' integrity="%s" crossorigin="anonymous"></', $sha), $tag);
    }

    return $tag;
}

add_filter('script_loader_tag', 'oa_scripts_attributes', 10, 2);