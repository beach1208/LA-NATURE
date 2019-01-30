<?php

// Style-sheet function
function my_styles()
{
    wp_enqueue_style('basic-style', get_template_directory_uri() . '/css/base.css');
    wp_enqueue_style('google_fonts', "https://fonts.googleapis.com/css?family=Libre+Baskerville|Lora|Poppins:200,400|Raleway");
    wp_enqueue_style('fontawesome', "https://use.fontawesome.com/releases/v5.0.13/css/all.css");
    wp_enqueue_style('bootstrap_css', "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css");
     
}
add_action('wp_enqueue_scripts', 'my_styles');

function my_js(){

  wp_enqueue_script('jqueryMobile_js', 'https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js', array('jquery'), '', true);
  wp_enqueue_script('main_js', get_template_directory_uri() . '/script.js');
}

add_action('wp_enqueue_scripts', 'my_js');

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

// add title-tag inside head
add_theme_support('title-tag');
// HTML5 markup 
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
// add feed links
add_theme_support('automatic-feed-links');
//add thumbnails image to each
add_theme_support('post-thumbnails');




// Verify header and footer navigation bar 
register_nav_menu('header-top-nav', 'header-top-navigation');
register_nav_menu('header-nav', 'header-navigation');
register_nav_menu('footer-nav', 'footer-navigation');
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

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

// remove login as
add_filter('comment_form_logged_in', '__return_empty_string');


//remove margin-top 32px
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');