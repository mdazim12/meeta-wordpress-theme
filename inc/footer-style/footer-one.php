
<?php  $options = get_option( 'meeta_options' );?>

<div class="meeta-footer-section" style="background-image:url(<?php echo $options['foo_background']; ?>);">




<!-- Footer Widget Start -->
<div class="footer-widget text-center">
    <div class="container">

        <!-- Footer Logo Start -->
        <div class="footer-logo">
           <?php
                if(is_active_sidebar('footer_widget_one') ){
                    dynamic_sidebar( 'footer_widget_one' );}
           ?>
        </div>
        <!-- Footer Logo End -->

        <!-- Footer Newsletter Start -->
        <div class="footer-newsletter">
        <?php
                if(is_active_sidebar('footer_widget_two') ){
                    dynamic_sidebar( 'footer_widget_two' );}
           ?>
        </div>
        <!-- Footer Newsletter End -->

        <!-- Footer widget Social Start -->
        <div class="footer-widget-social">
        <?php
                if(is_active_sidebar('footer_widget_three') ){
                    dynamic_sidebar( 'footer_widget_three' );}
           ?>

        </div>
        <!-- Footer widget Social End -->

        <!-- Footer Copyright Start -->
    <?php if($options['footer_text'] =='1'){?>
        <div class="footer-copyright">
            <p><?php echo $options['foo_text_editor'];?></p>
        </div>
    <?php } ?>
   
        <!-- Footer Copyright End -->

    </div>
</div>
<!-- Footer Widget End -->
    

</div>
<!-- Footer End footer 01 -->