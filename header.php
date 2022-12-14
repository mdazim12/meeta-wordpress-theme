<!doctype html>
<html class="no-js" lang="<?php language_attributes( );?>">


<!-- Mirrored from thepixelcurve.com/html/meeta/meeta/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 11:42:43 GMT -->
<head>
    <meta charset="<?php bloginfo( );?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> <?php bloginfo( 'title' );?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!-- Google Fonts -->
    <link rel="preconnect" href="<?php esc_url('https://fonts.googleapis.com/' );?>">
    <link rel="preconnect" href="<?php esc_url('https://fonts.gstatic.com/' );?>" crossorigin>
    

    
    <?php wp_head();?>

</head>

<body  <?php body_class(); ?>>

    <div class="main-wrapper">

        <!-- Preloader start --
        <div id="preloader">
            <div class="preloader">
                <span></span>
                <span></span>
            </div>
        </div>
        Preloader End -->

        <!-- Header Start -->
        <div class="meeta-header-section <?php if(is_user_logged_in()) echo 'top_classs';?>">

            <!-- Header Middle Start -->
            <div class="header-middle header-sticky">
                <div class="container-fluid custom-container">

                    <div class="row align-items-center">
                        <div class="col-lg-3 col-4">

                            <!-- Header Logo Start -->
                            <div class="header-logo">
                                <a href="<?php echo home_url( );?>"><img src="<?php echo get_template_directory_uri( ).'/assets/images/logo.png'?>" alt="Logo"></a>
                            </div>
                            <!-- Header Logo End -->

                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <?php
                                wp_nav_menu( array(
                                    'theme_location'    =>'primary_menu',
                                    'depth'             =>2,
                                    'menu_class'        =>'main-menu',
                                    'container_class'   =>'header-navigation',
                                 
                                ) );
                            ?>

                        </div>

                         
                        <div class="col-lg-3 col-8">

                            <!-- Header Meta Start -->
                            <div class="header-meta">

                                <div class="header-actions">
                                    <div class="header-action">
                                        <button class="icon-open-container">
                                            <span class="action-text">My Cart</span>
                                            <i class="flaticon-shopping-cart"></i>
                                            <span class="count">3</span>
                                        </button>
                                    </div>
                                    <div class="header-action d-none d-sm-block">
                                        <div class="header-search">
                                            <a class="search-btn" href="#"><i class="flaticon-loupe"></i></a>
                                            <div class="search-wrap">
                                                <div class="search-inner">
                                                    <i id="search-close" class="flaticon-close search-close"></i>
                                                    <div class="search-cell">
                                                        <form action="#">
                                                            <div class="search-field-holder">
                                                                <input class="main-search-input" type="search" placeholder="Search Your Keyword...">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="header-btn d-none d-md-block">
                                    <a href="price.html" class="btn btn-3 btn-primary">Buy Ticket Now</a>
                                </div>

                                <!-- Header Toggle Start -->
                                <div class="header-toggle d-md-none">
                                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                                <!-- Header Toggle End -->

                            </div>
                            <!-- Header Meta End -->

                        </div>
                    </div>

                </div>
            </div>
            <!-- Header Middle End -->

        </div>
        <!-- Header End -->

        <!-- Mini Cart Start -->
        <div class="off-canvas">
            <div class="icon-close"></div>

            <!-- Mini Cart Box Start -->
            <div class="meeta-mini-cart-box">

                <div class="mini-cart-items">

                    <div class="mini-cart-item">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="assets/images/cart/cart-1.jpg" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item-content">
                            <h4 class="mini-cart-title"><a href="#">Virtual Event with Protected Content and Hidden Livestream </a></h4>
                            <p class="mini-cart-quantity">1 ?? $19.99</p>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                    <div class="mini-cart-item">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="assets/images/cart/cart-2.jpg" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item-content">
                            <h4 class="mini-cart-title"><a href="#">Virtual Event with Protected Content and Hidden Livestream </a></h4>
                            <p class="mini-cart-quantity">1 ?? $19.99</p>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                    <div class="mini-cart-item">
                        <div class="mini-cart-item-image">
                            <a href="#"><img src="assets/images/cart/cart-3.jpg" alt="Cart"></a>
                        </div>
                        <div class="mini-cart-item-content">
                            <h4 class="mini-cart-title"><a href="#">Virtual Event with Protected Content and Hidden Livestream </a></h4>
                            <p class="mini-cart-quantity">1 ?? $19.99</p>
                        </div>
                        <button class="btn-close"></button>
                    </div>

                </div>

                <div class="mini-cart-sub-total">
                    <p><strong>Subtotal:</strong> <span class="mini-cart-amount">$99.97</span></p>
                </div>
                <div class="mini-cart-sub-btn">
                    <a class="btn btn-primary" href="#">View cart</a>
                    <a class="btn btn-white" href="#">Checkout</a>
                </div>
            </div>
            <!-- Mini Cart Box End -->

        </div>
        <!-- Mini Cart End -->


        
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">
            
                <div class="offcanvas-logo">
                    <a href="index.html"><img src="assets/images/logo-4.png" alt=""></a>
                </div>
             
                <button type="button" class="close-btn" data-bs-dismiss="offcanvas"><i class="flaticon-close"></i></button>
            </div>

            
            <div class="offcanvas-body">
                <div class="offcanvas-menu">
                <?php
                                wp_nav_menu( array(
                                    'theme_location'    =>'primary_menu',
                                    'depth'             =>2,
                                    'menu_class'        =>'main-menu',
                                    'container_class'   =>'header-navigation',
                                 
                                ) );
                            ?>

                   
                </div>
            </div>
            
        </div>
        