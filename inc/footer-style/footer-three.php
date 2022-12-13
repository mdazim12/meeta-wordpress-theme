<!-- Footer Start -->
<div class="meeta-footer-section meeta-footer-3" style="background-image:url(<?php echo $options['foo_background']; ?>);">

<!-- Footer Widget Start -->
<div class="footer-wrap">
    <div class="container">

        <div class="footer-widget-wrap">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                        <?php
                            if(is_active_sidebar( 'footer_widget_one' )){
                                dynamic_sidebar( 'footer_widget_one' );
                            }
                        ?>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                    <?php
                            if(is_active_sidebar( 'footer_widget_two' )){
                                dynamic_sidebar( 'footer_widget_two' );
                            }
                        ?>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                    <?php
                            if(is_active_sidebar( 'footer_widget_three' )){
                                dynamic_sidebar( 'footer_widget_three' );
                            }
                        ?>
                    </div>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget Start -->
                    <div class="footer-widget">
                    <?php
                            if(is_active_sidebar( 'footer_widget_four' )){
                                dynamic_sidebar( 'footer_widget_four' );
                            }
                        ?>
                    </div>
                    <!-- Footer Widget End -->
                </div>
            </div>
        </div>

    </div>
<?php if($options['footer_text'] =='1'){?>
    <div class="footer-copyright text-center">
        <div class="container">
            <div class="copyright-text">
            <p><?php echo $options['foo_text_editor'];?></p>
            </div>
        </div>
    </div>
<?php }?>    
</div>
<!-- Footer Widget End -->

</div>
<!-- Footer End -->