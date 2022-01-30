<?php
// Add ACF json
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point($path)
{
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}

// Add ACF Page Options
if (function_exists('acf_add_options_page')) {
    $parent = acf_add_options_page(array(
        'page_title'  => __('Theme Options'),
        'menu_title'  => __('Theme Options'),
    ));
}