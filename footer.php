
<?php  $options = get_option( 'meeta_options' );?>

<?php
        if($options['footer_switch'] == '1'){ ?>
        
              
            <?php
                $get_footer_style = $options['footer_layout'];
            ?>

     <?php   $final_footer = $get_footer_style;

        switch ($final_footer) {
        case "opt-1":
            echo require_once('inc/footer-style/footer-one.php');
            break;
        case "opt-2":
            echo require_once('inc/footer-style/footer-two.php');
            break;
        case "opt-3":
            echo require_once('inc/footer-style/footer-three.php');
            break;
        case "opt-4":
            echo require_once('inc/footer-style/footer-four.php');
            break;
        case "opt-5":
            echo require_once('inc/footer-style/footer-five.php');
            break;
         case "opt-6":
            echo require_once('inc/footer-style/footer-six.php');
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
        }
        ?>
            
      
    <?php   }
    ?>
    

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->




   
 <?php wp_footer(  );?>
</body>


<!-- Mirrored from thepixelcurve.com/html/meeta/meeta/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Nov 2022 11:43:17 GMT -->
</html>