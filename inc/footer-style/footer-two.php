    <!-- Footer Start 02 -->
    <div class="meeta-footer-section meeta-footer-2" style="background-image:url(<?php echo $options['foo_background']; ?>);">

        <!-- Footer Widget Start -->
        <div class="footer-widget">
            <div class="container">

                <div class="footer-wrap">
                    <div class="row">
                        <div class ="col-lg-4">
                            <?php
                                if(is_active_sidebar('footer_widget_one') ){
                                    dynamic_sidebar( 'footer_widget_one' );}
                            ?>
                        </div> 

                        <div class ="col-lg-4 ">
                            <?php
                                if(is_active_sidebar('footer_widget_two') ){
                                    dynamic_sidebar( 'footer_widget_two' );}
                            ?>
                        </div> 

                        <div class ="col-lg-4 ">
                            <?php
                                if(is_active_sidebar('footer_widget_three') ){
                                    dynamic_sidebar( 'footer_widget_three' );}
                            ?>
                        </div> 
                    </div>
                </div>

                

                

                

            </div>
        </div>
        <!-- Footer Widget End -->
                <?php if($options['footer_text'] =='1'){?>
                    <div class="footer-copyright text-center">
                        <p><?php echo $options['foo_text_editor'];?></p>
                    </div>
                <?php } ?>

    </div>
    <!-- Footer End 02-->




