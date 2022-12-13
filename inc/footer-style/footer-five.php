

       <!-- Footer Start 05-->
       <div class="meeta-footer-5" style="background-image:url(<?php echo $options['foo_background']; ?>);">

<!-- Footer Widget Start -->
<div class="footer-widget text-center">
    <div class="container">

        <!-- Footer Logo Start -->
        <div class="footer-logo">
           <?php
            if(is_active_sidebar( 'footer_widget_one' )){
                dynamic_sidebar( 'footer_widget_one' );
            }
           ?>
        </div>
        <!-- Footer Logo End -->

        <div class="footer-menu">
            <?php
                if(is_active_sidebar( 'footer_widget_two' )){
                    dynamic_sidebar( 'footer_widget_two' );
                }
            ?>
        </div>

        <!-- Footer widget Social Start -->
        <div class="footer-widget-social">
            <?php
                if(is_active_sidebar( 'footer_widget_three' )){
                    dynamic_sidebar( 'footer_widget_three' );
                }
            ?>
        </div>
        <!-- Footer widget Social End -->

        <?php if($options['footer_text'] =='1'){?>
        <div class="footer-copyright">
            <p><?php echo $options['foo_text_editor'];?></p>
        </div>
      <?php } ?>

    </div>
</div>
<!-- Footer Widget End -->

</div>
<!-- Footer End -05--->