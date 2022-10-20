<?php

    function customtheme_theme_support(){
        add_theme_support( 'title-tag' );
        add_theme_support( 'custom-logo' );
        add_theme_support( 'post-thumbnails' );
    }

    add_action( 'after_setup_theme', 'customtheme_theme_support');

    function customtheme_register_styles(){

        $version = wp_get_theme()->get( 'version' );

        wp_enqueue_style('customtheme_styles', get_template_directory_uri()."/style.css", array('customtheme_bootstrap'), $version, 'all');
        wp_enqueue_style('customtheme_font', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
        wp_enqueue_style('customtheme_bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    }

    add_action( 'wp_enqueue_scripts', 'customtheme_register_styles');


    function customtheme_register_scripts(){

        wp_enqueue_script('customtheme_jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
        wp_enqueue_script('customtheme_popper', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
        wp_enqueue_script('customtheme_bootstrap', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);
        wp_enqueue_script('customtheme_script', get_template_directory_uri(  )."/assets/js/main.js", array(), '3.4.1', true);

    }

    add_action( 'wp_enqueue_scripts', 'customtheme_register_scripts');


    function customtheme_menus(){

        $locations = array(
            'primary' => "Desktop primary menu",
            'footer' => "Footer Menu Items"
        );

        register_nav_menus( $locations );

    }

    add_action( 'init', 'customtheme_menus');


    function customtheme_widgets_areas(){

        register_sidebar( 
            array(
                'before_title' => '',
                'after_title' => '',
                'before_widget' => '',
                'after_widget' => ''
            ),
            array(
                'name' => 'Sidebar Area',
                'id' => 'sidebar-1',
                'description' => 'Sidebar widget area'
            )
        );

    }

    add_action( 'widgets_init', 'customtheme_widgets_areas' );

?>