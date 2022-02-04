<?php
function register_custom_post_types()
{
    $labels = array(
        'name' => 'Услуги',
        'singular_name' => 'Услуги',
        'add_new' => 'Создать услугу',
        'add_new_item' => 'Создать услугу',
        'edit_item' => 'Редактировать услугу',
        'new_item' => 'Новая услуга',
        'all_items' => 'Все услуги',
        'menu_name' => 'Услуги'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-hammer',
        'menu_position' => 26,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail', 'editor'),
    );
    register_post_type('services', $args);

    $labels = array(
        'name' => 'Таблицы',
        'singular_name' => 'Таблица',
        'add_new' => 'Создать таблицу',
        'add_new_item' => 'Создать таблицу',
        'edit_item' => 'Редактировать таблицу',
        'new_item' => 'Новая таблица',
        'all_items' => 'Все таблицы',
        'menu_name' => 'Таблицы'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'exclude_from_search' => false,
        'show_in_nav_menus' => true,
        'show_ui' => true,
        'menu_icon' => 'dashicons-editor-table',
        'menu_position' => 27,
        'has_archive' => true,
        'supports' => array('title'),
    );
    register_post_type('table', $args);
}
add_action('init', 'register_custom_post_types');