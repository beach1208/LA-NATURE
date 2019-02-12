<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LA NATURE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!-- General -->
<meta property="og:title" content="LA NATURE" />
<meta property="og:type" content="website" />
<meta property="og:url" content="http://la-nature-blog.nagisa-kojima.com/" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/thumb.png" />
<meta property="og:site_name"  content="LA NATURE" />
<meta property="og:description" content="Blog" />

<!--  Facebook -->
<meta property="fb:app_id" content="315773009282645" />
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/thumb.png" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@Twitter" />
<meta name="twitter:title" content="LA NATURE" />
<meta name="twitter:url" content="http://la-nature-blog.nagisa-kojima.com/" />
<meta name="twitter:description" content="LA NATURE" />
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/thumb.png" />


<?php wp_head(); ?>
<link rel="shortcut icon" href="http://la-nature-blog.nagisa-kojima.com/wp-content/uploads/2019/01/favicon.ico">
</head>
<body <?php body_class(); ?>>

<div class="wrapper">

<header id="header">
  
<div class="social-icons">
      
    <ul>
       <li class="home">
      <a href="<?php bloginfo('url'); ?>">Home</a>
    </li>

    <?php wp_nav_menu(array(
    'theme_location' => 'header-top-nav',
    'container' => 'nav',
    'container-class' => 'header-top-nav',
    'container-id' => 'header-top-nav',
    'fallback_cb' => ' ',
)); ?>
   
</ul>
</div>
<!-- End of social icons -->

        <div class="header-inner">
       

<div class="site-title">
                <h1><a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a></h1>
            </div>  

</div>
 <!--Header Menu  -->
 <!-- mobile button -->
 <div class="header-inner-button">
<button type="button" id="navbutton">
 <i class="fas fa-bars"></i>
</button>
<?php wp_nav_menu(array(
    'theme_location' => 'header-nav',
    'container' => 'nav',
    'menu_class' => 'nav',
    'container-id' => 'header-nav',
    'fallback_cb' => ' '
)); ?>
 </div>
 
</header>
