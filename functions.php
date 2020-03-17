<?php

wp_enqueue_style('style', get_stylesheet_uri());

// add custom class to tag
function add_class_the_tags($html){
    $postid = get_the_ID();
    $html = str_replace('<a','<a class="post-tag"',$html);
    return $html;
}

add_filter('the_tags','add_class_the_tags');

add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('Footer Menu', 'theme'),
    )
);

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );