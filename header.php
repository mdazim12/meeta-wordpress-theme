<?php  $options = get_option( 'meeta_options' );?>

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
                                <a href="<?php echo home_url( );?>"><img src="<?php echo  $options ['header_logo']['url'];?>" ></a>
                            
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

                            <?php
                               if( $options['header_btn'] =='1'){ ?>
                            
                                <div class="header-btn d-none d-md-block">
                                    <a href="<?php echo esc_url($options ['header_btn_link']); ?>" class="btn btn-3 btn-primary"><?php echo  $options ['header_btn_content']; ?></a>
                                </div>
                            <?php }  ?>

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

    
        


        
        <div class="offcanvas offcanvas-start" id="offcanvasExample">
            <div class="offcanvas-header">

             
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
        