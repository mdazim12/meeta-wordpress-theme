<!-- Footer Start 06 -->
<div class="meeta-footer-section meeta-footer-2" style="background-image: url(assets/images/bg/footer-bg-2.jpg);">

<!-- Footer Widget Start -->
<div class="footer-widget">
    <div class="container">

        <div class="footer-wrap">
            <div class="row">

                <div class="col-lg-3">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">
                        <a href="index.html"><img src="assets/images/footer-logo-1.png" alt="Logo"></a>
                    </div>
                    <!-- Footer Logo End -->
                </div>

                <div class="col-lg-9">
                    <!-- Footer Newsletter Start -->
                    <div class="footer-newsletter">

                        <div class="footer-newsletter-form">
                            <form action="#">
                                <input type="text" placeholder="Your Email">
                                <button class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <!-- Footer Newsletter End -->

                    <div class="footer-bottom-wrap">
                        <div class="row">
                            <div class="col-md-5">
                                <!-- Footer Info Start -->
                                <div class="footer-info">
                                    <h3 class="title">Event Details</h3>
                                    <span class="date">21 - 23 Octobor 2021 </span>
                                    <p>66 Road Broklyn Street BNG 275 New York. United States of America.</p>
                                    <div class="footer-widget-social">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-dribbble"></i></a>
                                        <a href="#"><i class="fab fa-behance"></i></a>
                                        <a href="#"><i class="fab fa-pinterest"></i></a>
                                    </div>
                                    <!-- Footer Info End -->
                                </div>
                            </div>

                            <div class="col-md-7">
                                <!-- Footer widget Map Start -->
                                <div class="footer-widget-map">
                                    <iframe scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=New%20York%20University%20&amp;t=m&amp;z=10&amp;output=embed&amp;iwloc=near" title="New York University" aria-label="New York University" frameborder="0"></iframe>
                                </div>
                                <!-- Footer widget Map End -->
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <?php if($options['footer_text'] =='1'){?>
        <div class="footer-copyright">
            <p><?php echo $options['foo_text_editor'];?></p>
        </div>
    <?php } ?>

    </div>
</div>
<!-- Footer Widget End -->

</div>
<!-- Footer End --06---->