<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	

	 <meta charset="UTF-8">

	 <link rel="icon" 

      type="image/png" 


      href="<?php bloginfo('template_url'); ?>/img/icon.jpg">

	 <meta name="viewport" content="width=device-width, initial-scale=1.0">


	 <meta name="theme-color" content="#FFFFFF" />


    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet"/>


    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet"/>



    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.transitions.css">



    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.theme.css">



    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/owl.carousel.css">



    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/jquery.fullPage.css">



    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightGallery.css" /> 
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">



    <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lightslider.css" />  
     <link type="text/css" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/custom.css" />  

<!--


    <script src="/design3v3/js/jquery.mousewheel.min.js"></script>



    <script src="/design2/js/bootstrap.min.js"></script>



    <script src="/design3v3/js/parallax.min.js"></script>



    <script src="/design2/js/owl.carousel.min.js"></script>



    <script src="/design3v3/js/jquery.fullPage.min.js"></script>



    <script src="/design3v3/js/custom.js"></script>



    <script src="/design3v3/js/lightslider.min.js"></script>



    <script src="/design3v3/js/lightGallery.min.js"></script>

    -->

    <link href='https://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet' type='text/css'>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



    <?php wp_head(); ?>



</head>

<body>
<div class="page-container">
    


<header class="header-mobile">
    
</header>
<nav>
<div class="nav-content" id="sidopanel">
    <div class="logga">
        <?php the_custom_logo(); ?>
    </div>
        <div class="search">
            <?php get_search_form(); ?>
    </div>
    <div class="menu">
<?php wp_nav_menu( array( 'theme_location' => 'side_menu', 'menu_class' => 'nav-side', 'menu_class' => 'main_nav', 'container_class' => 'side-menu-container') ); ?>
    </div>
    <div class="social">
    <i class="fa fa-facebook-official" aria-hidden="true"></i>
    <i class="fa fa-instagram" aria-hidden="true"></i>
    <i class="fa fa-twitter-square" aria-hidden="true"></i>

    </div>
    <!--
    <div class="partners">

<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/partner_logo4.png" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/intersport.jpg" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/partner_logo3.png" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/logo_gotalands.png" alt=""></div>
<div class="partner"><img src="http://localhost:8080/design/wp-content/uploads/2016/09/engstrom.png" alt=""></div>
</div>-->
</div>
</nav>

