               <!-- Footer Start 03 -->
    <div class="meeta-footer-section meeta-footer-3" style="background-image: url(assets/images/bg/footer-bg-3.jpg);">

        <!-- Footer Widget Start -->
        <div class="footer-wrap">
            <div class="container">

                <div class="footer-widget-wrap">
                    <div class="row">

                      
                            <!-- Footer Widget Start -->
                            <?php if(is_active_sidebar('footer_widget_one') ){
                                dynamic_sidebar( 'footer_widget_one' );
                            }?>
                            <!-- Footer Widget End -->
                    
                        
                            <!-- Footer Widget Start -->
                            <?php if(is_active_sidebar('footer_widget_two') ){
                                dynamic_sidebar( 'footer_widget_two' );
                            }?>
                            <!-- Footer Widget End -->
                      
                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget Start -->
                            <?php if(is_active_sidebar('footer_widget_three') ){
                                dynamic_sidebar( 'footer_widget_three' );
                            }?>
                            <!-- Footer Widget End -->
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- Footer Widget Start -->
                            <?php if(is_active_sidebar('footer_widget_four') ){
                                dynamic_sidebar( 'footer_widget_four' );
                            }?>
                            <!-- Footer Widget End -->
                        </div>
                    </div>
                </div>

            </div>

            <div class="footer-copyright text-center">
                <div class="container">
                    <div class="copyright-text">
                        <p>2022 Copyright Meeta Designed by Pixelcurve. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Widget End -->

    </div>
        <!-- Footer End 03-->