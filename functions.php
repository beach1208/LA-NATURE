<?php
function my_styles()
{
    wp_enqueue_style('basic-style', get_template_directory_uri() . '/css/base.css');
    wp_enqueue_style('google_fonts', "https://fonts.googleapis.com/css?family=Merriweather|Noto+San");
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.0.13/css/all.css");


}
add_action('wp_enqueue_scripts', 'my_styles');



//テーマのセットアップ
// titleタグをhead内に生成する
add_theme_support('title-tag');
// HTML5でマークアップさせる
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// Feedのリンクを自動で生成する
add_theme_support('automatic-feed-links');
//アイキャッチ画像を使用する設定
add_theme_support('post-thumbnails');


register_nav_menu('header-nav', 'header-navigation');
register_nav_menu('footer-nav', 'footer-navigation');