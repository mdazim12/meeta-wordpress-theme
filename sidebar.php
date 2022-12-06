<?php
    function meeta_widget(){
        register_sidebar( 
            array(
                'id'            =>'footer_widget_one',
                'name'          =>__('Footer Widget One'),
                'description'   =>__('A short description of the sidebar'),
                'before_widget' =>'<div class="footer-logo">',
                'after_widget'  =>'</div>',
                'before_title'  =>'<h4 class="widget-title">',
                'after_widget'  =>'</h4>',
            ),
       );

       register_sidebar( 
        array(
            'id'            =>'footer_widget_two',
            'name'          =>__('Footer Widget Two'),
            'description'   =>__('A short description of the sidebar'),
            'before_widget' =>' <div class="footer-newsletter">',
            'after_widget'  =>'</div>',
            'before_title'  =>'<h4 class="widget-title">',
            'after_widget'  =>'</h4>',
        ),
   );

        register_sidebar( 
            array(
                'id'            =>'footer_widget_three',
                'name'          =>__('Footer Widget Three'),
                'description'   =>__('A short description of the sidebar'),
                'before_widget' =>' <div class="footer-widget">',
                'after_widget'  =>'</div>',
                'before_title'  =>'<h4 class="widget-title">',
                'after_widget'  =>'</h4>',
            ),
        );

        register_sidebar( 
            array(
                'id'            =>'footer_widget_four',
                'name'          =>__('Footer Widget Four'),
                'description'   =>__('A short description of the sidebar'),
                'before_widget' =>' <div class="">',
                'after_widget'  =>'</div>',
                'before_title'  =>'<h4 class="widget-title">',
                'after_widget'  =>'</h4>',
            ),
        );
    }
    add_action( 'widgets_init','meeta_widget' );

?>