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
        'page_title' => __('Theme options'),
        'menu_title' => __('Theme options'),
    ));
}

function modules()
{
    if (have_rows('modules')) {
        while (have_rows('modules')) {
            the_row();
            if (get_row_layout() == 'hero_section_home_page') {
                get_template_part('modules/hero_section_home_page/hero_section_home_page');
            } elseif (get_row_layout() == 'services') {
                get_template_part('modules/services/services');
            } elseif (get_row_layout() == 'map_section') {
                get_template_part('modules/map_section/map_section');
            } elseif (get_row_layout() == 'advantages') {
                get_template_part('modules/advantages/advantages');
            } elseif (get_row_layout() == 'spreadsheet') {
                get_template_part('modules/spreadsheet/spreadsheet');
            } elseif (get_row_layout() == 'scheme_of_work') {
                get_template_part('modules/scheme_of_work/scheme_of_work');
            } elseif (get_row_layout() == 'reviews') {
                get_template_part('modules/reviews/reviews');
            } elseif (get_row_layout() == 'our_clients') {
                get_template_part('modules/our_clients/our_clients');
            } elseif (get_row_layout() == 'statistics') {
                get_template_part('modules/statistics/statistics');
            } elseif (get_row_layout() == 'license_and_warranties') {
                get_template_part('modules/license_and_warranties/license_and_warranties');
            } elseif (get_row_layout() == 'faq') {
                get_template_part('modules/faq/faq');
            } elseif (get_row_layout() == 'about_us') {
                get_template_part('modules/about_us/about_us');
            } elseif (get_row_layout() == 'documentation') {
                get_template_part('modules/documentation/documentation');
            }
        }
    }
}