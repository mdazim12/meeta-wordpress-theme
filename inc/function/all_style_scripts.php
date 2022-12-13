<?php



function meeta_all_link(){
    wp_enqueue_style('font','https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@300;400;500;600;700;800&amp;family=Open+Sans:wght@300;400;500;600;700;800&amp;display=swap');
    wp_enqueue_style('google_font','https://fonts.googleapis.com/css?family=Archivo:wght@300;400;500;600;700&amp;display=swap');
    wp_enqueue_style('bootstrap',get_template_directory_uri().'/assets/css/bootstrap.min.css');

    wp_enqueue_style('swiper_bundle',get_template_directory_uri().'/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.css');
    wp_enqueue_style('aos',get_template_directory_uri().'/assets/css/aos.css');
    wp_enqueue_style('nice_select',get_template_directory_uri().'/assets/css/nice-select.css');
    wp_enqueue_style('main_style',get_template_directory_uri().'/assets/css/main_style.css');
    wp_enqueue_style('style',get_stylesheet_uri()) ;

    wp_enqueue_script('jquery');
    wp_enqueue_script( 'modernizr',get_template_directory_uri().'/assets/js/vendor/modernizr-3.11.7.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'popper',get_template_directory_uri().'/assets/js/popper.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'swiper-bundle',get_template_directory_uri().'/assets/js/swiper-bundle.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'all_js',get_template_directory_uri().'/assets/js/all.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'back-to-top',get_template_directory_uri().'/assets/js/back-to-top.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'jquery.magnific-popup.min',get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'counterup',get_template_directory_uri().'/assets/js/jquery.counterup.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'waypoints',get_template_directory_uri().'/assets/js/waypoints.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'aos',get_template_directory_uri().'/assets/js/aos.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'nice-select',get_template_directory_uri().'/assets/js/jquery.nice-select.min.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'main_js',get_template_directory_uri().'/assets/js/main.js', 'jquery','v1.0',true );
    wp_enqueue_script( 'font_awesome','https://kit.fontawesome.com/74c9bf5232.js', 'jquery','v1.0',true );

    
}
add_action( 'wp_enqueue_scripts','meeta_all_link');


?>