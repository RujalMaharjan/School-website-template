<?php
function school_styles(){
    wp_register_style('normalize',get_template_directory_uri().'/css/normalize.css', array(),'8.0.0');
    wp_register_style('style',get_template_directory_uri().'/style.css', array('normalize'),'1.2');
    wp_register_style('responsive',get_template_directory_uri().'/responsive.css', array('normalize'),'1.2');
    wp_register_style('googleFonts','<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:400,900" rel="stylesheet">', array(), '1.0.0');   
    
    wp_enqueue_style('normalize');
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css'); 
    wp_enqueue_style('font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.min.css'); 
    wp_enqueue_style('googleFonts');
    wp_enqueue_style('style');
    wp_enqueue_style('responsive');

    wp_register_script('script',get_template_directory_uri().'/js/script.js', array('jquery'),'1.0.0', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('script'); 
}

add_action('wp_enqueue_scripts','school_styles');

//Adding menu
function school_menus(){
    register_nav_menus(array(
        'header_menu'=>__('Header Menu','school'),
    ));
}
add_action('init','school_menus');
?>