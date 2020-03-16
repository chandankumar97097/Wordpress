<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dynemicwordpress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <?php global $dynemicwordpresswp; ?> 
<meta charset="<?php bloginfo( 'charset' ); ?>">
<title>Best Garden HTML5 Responsive Template </title>
<!-- Stylesheets -->
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/revolution-slider.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/slider-setting.css" rel="stylesheet">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/style.css" rel="stylesheet">
<link type="text/css" rel="stylesheet" id="jssDefault" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/custom/theme-2.css"/>

<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->



<?php $fav = $dynemicwordpresswp['favicon']['url']; ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $fav; ?>">
<link rel="icon" type="image/png" href="<?php echo $fav; ?>" sizes="32x32">
<link rel="icon" type="image/png" href="<?php echo $fav; ?>" sizes="16x16">



<?php wp_head(); ?>

</head>

<body class="home layout_changer">

        <!-- ==================== Style Switcher ==================== -->
        <div class="switcher">

            <!-- Switcher button -->
            <div class="switch_btn">
                <button><i class="fa fa-cog fa-spin"></i></button>
            </div>

            <!-- switcher body -->
            <div class="switch_menu">
                <h5 class="title">Style Switcher</h5>

                    <!-- Theme layout -->
                    <div class="switch_body">
                        <div class="switcher_container">
                            <h5>Layout Style</h5>
                            <div class="box" id="full_width">
                                <div></div>
                                <p>Fullwidth</p>
                            </div>
                            <div class="box" id="boxed">
                                <div><span></span></div>
                                <p>Boxed</p>
                            </div>
                        </div>
                    </div> <!-- /switch_body -->

                    <!-- Switch Navigation menu Sticky/Static -->
                    <div class="switch_navigation">
                        <div class="switcher_container">
                            <h5>Navigation</h5>
                            <p>Sticky</p>
                            <div class="onoffswitch" id="sticky_switch">
                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                <label class="onoffswitch-label" for="myonoffswitch"></label>
                            </div>
                            <p>Static</p>
                        </div>
                    </div> <!-- /switch_navigation -->


                    
                    <!-- Theme color changer -->
                    <div class="switcher_container">
                        <h5>Color Skins</h5>
                        <ul id="styleOptions" title="switch styling">
                            <li>
                                <a href="javascript: void(0)" data-theme="theme-1" class="color2"></a>
                            </li>
                            <li>
                                <a href="javascript: void(0)" data-theme="theme-3" class="color3"></a>
                            </li>
                            <li>
                                <a href="javascript: void(0)" data-theme="theme-4" class="color4"></a>
                            </li>
                            <li>
                                <a href="javascript: void(0)" data-theme="theme-5" class="color5"></a>
                            </li>
                        </ul>
                    </div>
                    
            </div> <!-- /switch_menu -->
        </div>

        <!-- ==================== Style Switcher ==================== -->

<div class="page-wrapper body_wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / Header Style One-->
    <header class="main-header header-style-one">
    	<!-- Header Top One-->
    	<div class="header-top-one">
        	<div class="auto-container">
            	<div class="clearfix top-bar-bg">
                    
                    <!--Top Left-->
                    <div class="top-left top-links">
                        <?php 
                        $contact = $dynemicwordpresswp['header-contact'];
                        $email = $dynemicwordpresswp['header-email'];
                        ?>
                    	<ul class="clearfix">
                            <li><a href="#"><i class="icon-telephone"></i><?php echo $contact; ?></a></li>
                        	<li><a href="#"><i class="icon-letter2"></i><?php echo $email; ?></a></li>
                        </ul>
                    </div>
                    
                    <!--Top Right-->
                    <div class="top-right">
                        <?php 
                        $facebook = $dynemicwordpresswp['facebook'];
                        $twitter = $dynemicwordpresswp['twitter'];
                        $googleplus = $dynemicwordpresswp['google-plus'];
                        $linkedin = $dynemicwordpresswp['linkedin'];
                        $pinterest = $dynemicwordpresswp['pintrast'];
                        
                        ?>
                    	<ul class="social-links clearfix">
                        	<li><a href="<?php echo $facebook; ?>"><span class="fa fa-facebook-f"></span></a></li>
                            <li><a href="<?php echo $twitter; ?>"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="<?php echo $googleplus; ?>"><span class="fa fa-google-plus"></span></a></li>
                            <li><a href="<?php echo $linkedin; ?>"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="<?php echo $pinterest; ?>"><span class="fa fa-pinterest"></span></a></li>
                        </ul>
                    </div>
                    
                </div>
                
            </div>
        </div><!-- Header Top One End -->
        
        
        <!-- Header Lower -->
        <div class="header-lower">
            <div class="main-box">
                <div class="auto-container">
                    <div class="outer-container clearfix">
                        <!--Logo Box-->
                        <div class="logo-box">
                            <?php 
                            $logo = $dynemicwordpresswp['header-logo']['url'];
                            ?>
                            <div class="logo"><a href="index-2.html" title="bestgarden"><img src="<?php echo $logo; ?>"></a></div>
                        </div>
                        
                        <!--Nav Outer-->
                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->    	
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>
                                
                                <div class="navbar-collapse collapse clearfix">
                                    <!-- <ul class="navigation clearfix">
                                        <li class="current"><a href="index-2.html">Home</a>
                                        </li>
                                        <li class="dropdown"><a href="about-us.html">About Us</a>
                                            <ul>
                                                <li><a href="about-us-one.html">About Us</a></li>
                                                <li><a href="team.html">Our Team</a></li>
                                                <li><a href="team-single.html">Team Member</a></li>
                                                <li><a href="faq.html">FAQ's</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="testimonial.html">Testimonials</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Services</a>
                                            <ul>
                                                <li><a href="service.html">View All Services</a></li>
                                                <li><a href="single-service.html">Planting and Removal</a></li>
                                                <li><a href="single-service.html">Lawn and Garden Care</a></li>
                                                <li><a href="single-service.html">Stone and Hardscaping</a></li>
                                                <li><a href="single-service.html">Snow and Ice Removal</a></li>
                                                <li><a href="single-service.html">Irrigation and Drainage</a></li>
                                                <li><a href="single-service.html">Spring and Fall Cleanup</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Projects</a>
                                            <ul>
                                                <li><a href="projects.html">Projects Grid View</a></li>
                                                <li><a href="projects-fullwidth.html">Projects Fullwidth</a></li>
                                                <li><a href="projects-masonry.html">Projects Masonry</a></li>
                                                <li><a href="project-single.html">Project Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Shop</a>
                                            <ul>
                                                <li><a href="shop.html">Our Shop</a></li>
                                                <li><a href="shop-single.html">Product Details</a></li>
                                                <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Blog</a>
                                            <ul>
                                                <li><a href="blog.html">Blog Grid View</a></li>
                                                <li><a href="blog2.html">Blog Classic</a></li>
                                                <li><a href="blog-single.html">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        
                                    </ul> -->
                                    <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation') ); ?>
                                </div>
                            </nav><!-- Main Menu End-->

                            <!--Search Box-->
                            <div class="search-box-outer">
                                <div class="dropdown">
                                    <div class="cart-btn"><a href="shopping-cart.html"><i class="fa fa-shopping-cart"></i></a></div>
                                    <button class="search-box-btn dropdown-toggle" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="http://html.tonatheme.com/2017/bestgarden/blog.html">
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search Here">
                                                        <button type="submit" class="search-btn"><span class="fa fa-search"></span></button>
                                                    </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div><!--Nav Outer End-->
                        
                    </div>    
                </div>
            </div>
        </div>
        
        <!--Sticky Header-->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index-2.html" title="bestgarden"><img src="<?php echo $logo; ?>"></a>
                </div>
                
                <!--Right Col-->
                <div class="right-col pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <!-- <ul class="navigation clearfix">
                                <li class="current"><a href="index-2.html">Home</a>
                                </li>
                                <li class="dropdown"><a href="about-us.html">About Us</a>
                                    <ul>
                                        <li><a href="about-us-one.html">About Us</a></li>
                                        <li><a href="team.html">Our Team</a></li>
                                        <li><a href="team-single.html">Team Member</a></li>
                                        <li><a href="faq.html">FAQ's</a></li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="testimonial.html">Testimonials</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Services</a>
                                    <ul>
                                        <li><a href="service.html">View All Services</a></li>
                                        <li><a href="single-service.html">Planting and Removal</a></li>
                                        <li><a href="single-service.html">Lawn and Garden Care</a></li>
                                        <li><a href="single-service.html">Stone and Hardscaping</a></li>
                                        <li><a href="single-service.html">Snow and Ice Removal</a></li>
                                        <li><a href="single-service.html">Irrigation and Drainage</a></li>
                                        <li><a href="single-service.html">Spring and Fall Cleanup</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Projects</a>
                                    <ul>
                                        <li><a href="projects.html">Projects Grid View</a></li>
                                        <li><a href="projects-fullwidth.html">Projects Fullwidth</a></li>
                                        <li><a href="projects-masonry.html">Projects Masonry</a></li>
                                        <li><a href="project-single.html">Project Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Our Shop</a></li>
                                        <li><a href="shop-single.html">Product Details</a></li>
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Blog Grid View</a></li>
                                        <li><a href="blog2.html">Blog Classic</a></li>
                                        <li><a href="blog-single.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact Us</a></li>
                                
                            </ul> -->
                            <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu', 'menu_class' => 'navigation') ); ?>
                        </div>
                    </nav><!-- Main Menu End-->
                </div>
                
            </div>
        </div><!--End Sticky Header-->
    
    </header>
    <!--End Main Header -->
    
