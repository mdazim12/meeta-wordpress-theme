<?php get_header(  );?>
<!-- Page Banner Start -->
<div class="section page-banner-section">
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title"><?php echo the_archive_title(); ?></h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url( );?>"><?php echo  __("Home");?></a></li>
                                    
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Blog Details Start -->
        <div class="section blog-details-section section-padding">
            <div class="container">
                <!-- Blog Details Wrap Start -->
                <div class="blog-details-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- Blog Details Post Start -->
                            <div class="blog-details-post">
                                <!-- Single Blog Start -->
                                    <?php 
                                        if(have_posts()){
                                            while(have_posts(  )) :the_post(); ?>
                                                <div class="single-blog">
                                                <div class="blog-image">
                                                    <a href="<?php the_permalink( );?>"><?php the_post_thumbnail();?></a>
                                                </div>
                                                <div class="blog-content">
                                                    <div class="blog-meta">
                                                        <span class="category"><?php the_category( );?></span>
                                                        <span class="date"><?php the_date();?></span>
                                                    </div>
                                                    <h3 class="title"><a href="<?php the_permalink();?>"><?php the_title();?> </a></h3>
                                                </div>
                                            </div>
                                        <?php endwhile; } 
                                        else{
                                            printf(__('<h1>There is no post in this Category </h1>','meeta'));
                                            
                                        }
                                        ?>
                                <!-- Single Blog End -->
                                
                            </div>
                            <!-- Blog Details Post End -->
                        </div>
                        
                        <div class="col-lg-6">
                            <!-- Blog Sidebar Start -->
                            <div class="blog-sidebar">

                                <?php
                                    if(is_active_sidebar( 'sidebar_widget' )){
                                        dynamic_sidebar( 'sidebar_widget' );
                                    }
                                ?>
                                
                               
                            </div>
                            <!-- Blog Sidebar End -->
                        </div>
                    </div>
                </div>
                <!-- Blog Details Wrap End -->
            </div>
        </div>
        <!-- Blog Details End -->

    </div>

<?php get_footer(  );?>