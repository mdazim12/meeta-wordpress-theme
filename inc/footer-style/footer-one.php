
<div class="meeta-footer-section" style="background-image: url(assets/images/bg/footer-bg.jpg);">





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
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-dribbble"></i></a>
            <a href="#"><i class="fab fa-behance"></i></a>
            <a href="#"><i class="fab fa-pinterest"></i></a>
        </div>
        <!-- Footer widget Social End -->

        <!-- Footer Copyright Start -->
        <div class="footer-copyright">
            <p>2022 Copyright Meeta Designed by Pixelcurve . All Rights Reserved</p>
        </div>
        <!-- Footer Copyright End -->

    </div>
</div>
<!-- Footer Widget End -->
    

</div>
<!-- Footer End footer 01 -->