<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
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
    'fallback_cb' => ' '
)); ?>
    <li class="facebook">
      <a href="#">
      <i class="fab fa-facebook-f"></i>
      </a>
    </li>

    <li class="tweet">
      <a href="#">
      <i class="fab fa-twitter"></i>
      </a>
    </li>

    <li class="instagram">
      <a href="#">
      <i class="fab fa-instagram"></i>
      </a>
    </li>

    <li class="pinterest">
      <a href="#">
      <i class="fab fa-pinterest"></i>
      </a>
    </li>
</ul>
            </div>

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
    'fallback_cb' => ' ',
)); ?>
 </div>
 
</header>


<!-- TODO -->
<!-- Top SNS button hover color change
Subdomain get and publish the website
Header menu responsive -->
