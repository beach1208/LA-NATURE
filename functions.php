<?php

// Style-sheet function
function my_styles()
{
    wp_enqueue_style('basic-style', get_template_directory_uri() . '/css/base.css');
    wp_enqueue_style('google_fonts', "https://fonts.googleapis.com/css?family=Merriweather|Noto+San");
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.0.13/css/all.css");
    wp_enqueue_style('bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
}
add_action('wp_enqueue_scripts', 'my_styles');


//Read more functions
function new_excerpt_mblength($length)
{
    return 100;
}

add_filter('excerpt_mblength', 'new_excerpt_mblength');

function new_excerpt_more($more)
{

    return '...';

}
add_filter('excerpt_more', 'new_excerpt_more');
    

//Theme set up

// titleタグをhead内に生成する
add_theme_support('title-tag');
// HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');




// Verify header and footer navigation bar 
register_nav_menu('header-nav', 'header-navigation');
register_nav_menu('footer-nav', 'footer-navigation');

//Add widgets to side bar
function widgetarea_init()
{
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'side-widget',
        'before_widget' => '<div id="%1$s" class="%2$s sidebar-wrapper">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="sidebar-title">',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'widgetarea_init');
    
