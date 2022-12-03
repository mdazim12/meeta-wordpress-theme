<?php get_header( );?>

        <!-- Page Banner Start -->
        <div class="section page-banner-section">
            <div class="shape-2"></div>
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title">Blog Grid</h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url();?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?php wp_title('' );?></li>
                                </ul>
                            </div>
                            <!-- Page Banner Content End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner End -->

        <!-- Blog Start -->
        <div class="meeta-blog section-padding">
            <div class="container">
                <div class="meeta-blog-grid-wrap">
                    <div class="row">

                    <?php 

                        $query_blog= new WP_Query(array(
                            'post_type'     =>'POST',
                            'post_per_page' =>-1,
                            'order'         =>'ASC'

                        ));
                        if($query_blog->have_posts()){
                            while($query_blog->have_posts(  )) : $query_blog->the_post(); ?>

                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog Start -->
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
                            <!-- Single Blog End -->
                        </div>

                    <?php    endwhile;
                        }
                    ?>

                    
                    </div>

                    <!-- Techmax Pagination Start -->
                    <div class="meeta-pagination">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                                <span class="page-link"><i class="flaticon-back"></i></span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <span class="page-link">2</span>
                            </li>
                            <li class="page-item disabled">
                                <a class="page-link" href="#"><i class="flaticon-next"></i></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Techmax Pagination End -->
                </div>
            </div>
        </div>
        <!-- Blog End -->

    </div>

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <?php get_footer( );?>




    <!-- JS
    ============================================ -->
