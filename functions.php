<?php

function heya_files()
{
    wp_enqueue_script('main_heya_js', get_template_directory_uri() . '/js/app.js', NULL, '1.0', true);
    wp_enqueue_script('font_js', 'https://kit.fontawesome.com/a076d05399.js');

    wp_enqueue_style('main_heya_styles', get_theme_file_uri('/css/style.css'));
    wp_enqueue_style('header_heya_styles', get_theme_file_uri('/css/header.css'));
    wp_enqueue_style('main_font', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
    
}

add_action('wp_enqueue_scripts', 'heya_files');

function heya_features()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'heya_features');