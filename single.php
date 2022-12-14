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
                                            <h3 class="comment-title"><?php echo __('Leave A Comment');?></h3>
                                            <p><?php echo  __('Your email address will not be published. Required fields are marked *');?></p> 
                                            <!-- Commtent Form Wrap Start -->
                                            <div class="comment-form-wrap">
                                            <?php comments_template();?>
                                                
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