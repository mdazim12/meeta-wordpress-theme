<?php get_header(  );?>

        <!-- Page Banner Start -->
        <div class="section page-banner-section">
            <div class="container">
                <div class="page-banner-wrap">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Page Banner Content Start -->
                            <div class="page-banner text-center">
                                <h2 class="title"><?php wp_title(" ");?></h2>
                                <ul class="breadcrumb justify-content-center">
                                    <li class="breadcrumb-item"><a href="<?php echo home_url( );?>">Home</a></li>
                                    
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
                        <div class="col-lg-8">
                            <!-- Blog Details Post Start -->
                            <div class="blog-details-post">
                                <!-- Single Blog Start -->
                                <div class="single-blog-post">
                                    <div class="blog-img">
                                       <?php the_post_thumbnail('large');?>
                                    </div>
                                    <div class="blog-content">
                                        <span class="category color-4"><?php the_category(  );?></span>
                                        <div class="blog-meta">
                                            <span class="meta"><i class="far fa-user"></i>  <a href="#"><?php the_author( );?></a></span>
                                            <span class="meta"><i class="far fa-calendar-alt"></i> <?php the_date(  );?></span>
                                        </div>
                                        <h3 class="title"><?php the_title(  );?> </h3>
                                        <p><?php the_content( );?></p>
                                    </div>
                                </div>
                                <!-- Single Blog End -->
                                <div class="blog-details-content">
                                   
                                    <!-- Blog Details Tag Share Start -->
                                    <div class="blog-details-tag-share">
                                        <div class="blog-details-tag">
                                          <?php if(has_tag()){ ?> 
                                          
                                             <div class="sidebar-widget">
                                                <span class="label"><?php echo __('Tags :');?></span>
                                                <ul class="sidebar-tag">
                                                    
                                                    <?php echo get_the_tag_list( "<ul class=\"list-unstyled\"><li>", "</li><li>", "</li></ul>" ); ?>
                                                </ul>
                                            </div>
                                            <?php }?>
                                           
                                        </div>
                                        <div class="blog-details-share">
                                            <span class="share-title"><?php echo __('Share This Post');?></span>
                                            <ul class="social-share">
                                                <li> <a class="share-facebook" href="https://www.facebook.com/sharer?u=&lt;?php the_permalink();?&gt;&amp;t=&lt;?php the_title(); ?&gt;" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a class="share-twitter" href="https://twitter.com/share?url=&text=<?php the_title(); ?>: <?php echo urlencode(get_permalink($post->ID)); ?> &via=YOUR-TWITTER-USERNAME&count=horizontal"><i class="fab fa-twitter"></i></a></li>
                                                <li><a class="share-facebook" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=&lt;?php the_permalink() ?&gt;&amp;title=&lt;?php the_title(); ?&gt;&amp;summary=&amp;source=&lt;?php bloginfo('name'); ?&gt;" target="_new" rel="noopener noreferrer"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Blog Details Tag Share End -->
                                    <!-- Blog Details Post Navigation Start -->
                                    <div class="meeta-post-pagination">
                                        <div class="previous-post">
                                            <div class="blog-pagination-post">
                                                <div class="post-icon">
                                                    <a href="blog-details.html">
                                                        <i class="flaticon-back"></i>
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <span>Previous Post</span>
                                                    <h4 class="title"><a href="blog-details.html">Cupidatat non proident sunt culpa officia deserunt</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-post">
                                            <div class="blog-pagination-post">
                                                <div class="post-content text-end">
                                                    <span>Next Post</span>
                                                    <h4 class="title"><a href="blog-details.html">Cupidatat non proident sunt culpa officia deserunt</a></h4>
                                                </div>
                                                <div class="post-icon">
                                                    <a href="blog-details.html">
                                                        <i class="flaticon-next"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Blog Details Post Navigation End -->
                                    <!-- Commtent Wrap Start -->
                                    <div class="comment-wrap">
                                        <!-- Commtent Form Start -->
                                        <div class="comment-form">
                                            <h3 class="comment-title">Leave A Comment</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>
                                            <!-- Commtent Form Wrap Start -->
                                            <div class="comment-form-wrap">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <!--  Single Form Start  -->
                                                            <div class="single-form">
                                                                <input class="form-control" type="text" placeholder="Your Name">
                                                            </div>
                                                            <!--  Single Form End  -->
                                                        </div>
                                                        <div class="col-md-6">
                                                            <!--  Single Form Start  -->
                                                            <div class="single-form">
                                                                <input class="form-control" type="email" placeholder="Your Email">
                                                            </div>
                                                            <!--  Single Form End  -->
                                                        </div>
                                                        <div class="col-md-12">
                                                            <!--  Single Form Start  -->
                                                            <div class="single-form">
                                                                <textarea class="form-control" placeholder="Your Message"></textarea>
                                                            </div>
                                                            <!--  Single Form End  -->
                                                        </div>
                                                        <div class="col-md-12">
                                                            <!--  Single Form Start  -->
                                                            <div class="form-btn">
                                                                <button class="btn btn-primary" type="submit">Submit Now</button>
                                                            </div>
                                                            <!--  Single Form End  -->
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- Commtent Form Wrap End -->
                                        </div>
                                        <!-- Commtent Form End -->
                                    </div>
                                    <!-- Commtent Wrap End -->
                                </div>
                            </div>
                            <!-- Blog Details Post End -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Blog Sidebar Start -->
                            <div class="blog-sidebar">
                                <!-- Sidebar Widget Start -->
                                <div class="sidebar-widget sidebar-widget-1">
                                    <!-- Widget Search Form Start -->
                                    <form class="search-form" action="#">
                                        <input type="text" placeholder="Search...">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                    <!-- Widget Search Form End -->
                                </div>
                                <!-- Sidebar Widget End -->

                                <!-- Sidebar Widget Start -->
                                <div class="sidebar-widget">
                                    <!-- Widget Title Start -->
                                    <div class="widget-title">
                                        <h3 class="title">Recent Posts</h3>
                                    </div>
                                    <!-- Widget Title End -->
                                    <!-- Widget Recent Post Start -->
                                    <div class="recent-posts">
                                        <ul>
                                            <li>
                                                <a class="post-link" href="blog-details.html">
                                                    <div class="post-thumb">
                                                        <img src="assets/images/blog/r-post-1.jpg" alt="">
                                                    </div>
                                                    <div class="post-text">
                                                        <h4 class="title">Cupidatat non proident sunt culpa</h4>
                                                        <span class="post-meta"><i class="far fa-calendar-alt"></i>  Octobor 09, 2022</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="post-link" href="blog-details.html">
                                                    <div class="post-thumb">
                                                        <img src="assets/images/blog/r-post-2.jpg" alt="">
                                                    </div>
                                                    <div class="post-text">
                                                        <h4 class="title">Cupidatat non proident sunt culpa</h4>
                                                        <span class="post-meta"><i class="far fa-calendar-alt"></i>  Octobor 09, 2022</span>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="post-link" href="blog-details.html">
                                                    <div class="post-thumb">
                                                        <img src="assets/images/blog/r-post-3.jpg" alt="">
                                                    </div>
                                                    <div class="post-text">
                                                        <h4 class="title">Cupidatat non proident sunt culpa</h4>
                                                        <span class="post-meta"><i class="far fa-calendar-alt"></i>  Octobor 09, 2022</span>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Widget Recent Post End -->
                                </div>
                                <hr>
                                <!-- Sidebar Widget End -->

                                <!-- Sidebar Widget Start -->
                                <div class="sidebar-widget">
                                    <!-- Widget Title Start -->
                                    <div class="widget-title">
                                        <h3 class="title">Categories</h3>
                                    </div>
                                    <!-- Widget Title End -->
                                    <!-- Widget Category Start -->
                                    <ul class="category">
                                        <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Industry <span class="post-count">(11)</span></a></li>
                                        <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Business <span class="post-count">(02)</span></a></li>
                                        <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Construction <span class="post-count">(0)</span></a></li>
                                        <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Factory <span class="post-count">(231)</span></a></li>
                                        <li class="cate-item"><a href="#"><i class="flaticon-next"></i> Estate <span class="post-count">(45)</span></a></li>
                                    </ul>
                                    <!-- Widget Category End -->
                                </div>
                                <!-- Sidebar Widget End -->

                                <!-- Sidebar Widget Start -->
                                <div class="sidebar-widget">
                                    <div class="widget-banner" style="background-image: url(assets/images/blog/sidebar-img.jpg);">
                                        <h4 class="sub-title">Upcoming Events</h4>
                                        <h3 class="title">2022 Creative meetup & music event</h3>
                                        <a class="btn btn-primary" href="price.html">Book Your Seat</a>
                                    </div>
                                </div>
                                <!-- Sidebar Widget End -->
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