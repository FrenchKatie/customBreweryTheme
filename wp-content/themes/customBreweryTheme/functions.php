<?php

//SETTING UP BOOTSTRAP FILES
    function addCustomThemeStyles(){
        // Style
        wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3', 'all');
        wp_enqueue_style('theme-style', get_template_directory_uri() . '/assets/css/theme-style.css', array(), '0.0.1', 'all');

        // Scripts
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '4.1.3', true);
        wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/assets/js/theme-scripts.js', array(), '0.0.1', true);
    }
    add_action('wp_enqueue_scripts', 'addCustomThemeStyles');

//ADDING CUSTOM MENUS

    function addCustomMenus(){
        add_theme_support('menus');
        register_nav_menu('header_nav', 'This is the navigation which appears at the top of the page');
        register_nav_menu('footer_nav', 'This is the navigation which appears at the bottom of the page');
    }
    add_action('init', 'addCustomMenus');

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
