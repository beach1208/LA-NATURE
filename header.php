<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?> ">
    
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="header-inner">
            <div class="site-title">
                <h1><a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a></h1>
            </div>
            <!--mobile button-->
<button type="button" id="navbutton">
 <i class="fas fa-list-ul"></i><
</button>

</div>
 <!--Header Menu  -->
 <?php wp_nav_menu(array(
    'theme_location' => 'header-nav',
    'container' => 'nav',
    'container-class' => 'header-nav',
    'container-id' => 'header-nav',
    'fallback_cb' => ' '
)); ?>
</header>
