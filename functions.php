<?php

 function meeta_theme_support(){
    add_theme_support('title');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','meeta_theme_support' );

register_nav_menus(array(
    'primary_menu'      =>'Primary Menu',
    'footer_menu'       =>'footer Menu',
) );




require_once('inc/function/all_style_scripts.php');
require_once('inc/class-wp-bootstrap-navwalker.php');




















?>