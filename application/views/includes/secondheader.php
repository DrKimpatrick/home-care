<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Boldman Infostack &raquo; Comments Feed HTML Template" />
<meta name="author" content="https://www.themetechmount.com/" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Delmont &#8211; Medical, Health and Hospital Html Template</title>

<!-- favicon icon -->
<link rel="shortcut icon" href="<?php echo base_url().'images/favicon.png';?>" />

<!-- bootstrap -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css';?>"/>

<!-- animate -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/animate.css';?>"/>

<!-- owl-carousel -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/owl.carousel.css';?>">

<!-- fontawesome -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/font-awesome.css';?>"/>

<!-- themify -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/themify-icons.css';?>"/>

<!-- flaticon -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/flaticon.css';?>"/>


<!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'revolution/css/layers.css';?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'revolution/css/settings.css';?>">

<!-- prettyphoto -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/prettyPhoto.css';?>">

<!-- twentytwenty -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/twentytwenty.css';?>"/>

<!-- shortcodes -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/shortcodes.css';?>"/>

<!-- main -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/main.css';?>"/>

<!-- responsive -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/responsive.css';?>"/>

</head>

<body>

    <!--page start-->
    <div class="page">

        <!-- preloader start -->
        <div id="preloader">
          <div id="status">&nbsp;</div>
        </div>
        <!-- preloader end -->

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-classicinfo">
            <!-- ttm-topbar-wrapper -->
            <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
                <div class="container">
                    <div class="ttm-topbar-content">
                        <ul class="top-contact text-left">
                            <li><i class="themifyicon ti-location-pin"></i>Nsambya hill opposite St. Francis hospital Nsambya main gate</li>
                            <li><i class="themifyicon ti-timer"></i>Mon - Sun 8:30am - 5:00pm</li>
                        </ul>
                        <div class="topbar-right text-right">
                            <div class="ttm-social-links-wrapper list-inline">
                                <ul class="social-icons">
                                    <li><a href="https://www.facebook.com/NsambyaHomecare/?ref=bookmarks" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://twitter.com/infonsambya" target="_blank"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-fill ttm-btn-color-skincolor" href="#">GET A APPOINTMENT!</a> -->
                        </div>
                    </div>
                </div>
            </div><!-- ttm-topbar-wrapper end -->
            <!-- ttm-header-wrap -->
            <div class="ttm-header-wrap">
                <!-- ttm-stickable-header-w -->
                <div id="ttm-stickable-header-w" class="ttm-stickable-header-w ttm-bgcolor-white clearfix">
                    <div id="site-header-menu" class="site-header-menu">
                        <div class="site-header-menu-inner ttm-stickable-header">
                            <div class="container">
                                <!-- site-branding -->
                                <div class="site-branding">
                                    <a class="home-link" href="index.html" title="Delmont" rel="home">
                                        <img id="logo-img" class="img-center" src="<?php echo base_url().'images/nhc4.png';?>" style="max-height: 70px !important;" alt="logo-img">
                                    </a>
                                </div><!-- site-branding end -->
                                <!--site-navigation -->
                                <div id="site-navigation" class="site-navigation">
    
                                    <div class="ttm-menu-toggle">
                                        <input type="checkbox" id="menu-toggle-form" />
                                        <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                            <span class="toggle-block toggle-blocks-1"></span>
                                            <span class="toggle-block toggle-blocks-2"></span>
                                            <span class="toggle-block toggle-blocks-3"></span>
                                        </label>
                                    </div>
                                    <nav id="menu" class="menu">
                                        <ul class="dropdown">
                                           <li class="<?php if($page == 'home'){ echo 'active';} ?>"><a href="<?php echo base_url().'Nsambya';?>">Home</a></li>
                                            <li class="<?php  if($page == 'about'){echo 'active';} ?>"><a href="<?php echo base_url().'Nsambya/About';?>">About Us</a></li>
                                            <li class="<?php if($page == 'contact'){echo 'active';} ?>"><a href="<?php echo base_url().'Nsambya/Contact';?>">Contact Us</a></li>
                                         
                                           <li><a href="#">Services</a>
                                                <ul>
                                                    <li><a href="neurology-services.html">Neurology Services</a></li>
                                                    <li><a href="cardiology-services.html">Cardiology Services</a></li>
                                                    <li><a href="x-ray-rmi-services.html">X-Ray & RMI Services</a></li>
                                                    <li><a href="eye-care-services.html">Eye Care Services</a></li>
                                                    <li><a href="dental-services.html">Dental Services</a></li>
                                                    <li><a href="orthopaedics-services.html">Orthopaedics Services</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div><!-- site-navigation end-->
                            </div>
                        </div>
                    </div>
                </div><!-- ttm-stickable-header-w end-->
            </div><!--ttm-header-wrap end -->
            <div class="ttm-content-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- ttm-info-widget-->
                            <div class="ttm-info-widget">
                                <div class="header-widget">
                                    <div class="header-icon">
                                        <i class="fa fa-hospital-o"></i>
                                    </div>
                                    <div class="header-content">
                                        <h3>Number 1 Hospital</h3>
                                        <p>In United States</p>
                                    </div>
                                </div>
                                <div class="header-widget">
                                    <div class="header-icon">
                                        <i class="fa fa-user-md"></i>
                                    </div>
                                    <div class="header-content">
                                        <h3>Personal Cabinet</h3>
                                        <p>Qualified Staff</p>
                                    </div>
                                </div>
                                <div class="header-widget">
                                    <div class="header-icon">
                                        <i class="fa fa-thumbs-o-up"></i>
                                    </div>
                                    <div class="header-content">
                                        <h3>Get Result Online</h3>
                                        <p>Satisfied Patients</p>
                                    </div>
                                </div>
                            </div>
                            <!-- ttm-info-widget end -->
                            <div class="ttm-contact">
                                <span class="icon"><i class="fa fa-phone"></i></span> +256 414 267 012 / 3
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header><!--header end-->