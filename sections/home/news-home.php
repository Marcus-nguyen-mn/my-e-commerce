<!-- Start Blog Slider Section -->
<div class="blog-default-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">THE LATEST BLOGS</h3>
                            <p>Present posts in a best way to highlight interesting moments of your blog.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="blog-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="blog-default-slider default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container blog-slider">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Product Default Single Item -->
                                <?php
                                    $args = array(
                                        'post_type' => 'post',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 6,
                                    );
                                    $news_query = new WP_Query($args);
                                    if ( $news_query->have_posts() ) :
                                        while ( $news_query->have_posts() ) : $news_query->the_post();
                                            ?>
                                            <div class="blog-default-single-item blog-color--green swiper-slide">
                                                <div class="image-box">
                                                    <a href="blog-single-sidebar-left.html" class="image-link">
                                                        <?php the_post_thumbnail(); ?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title"><a href="blog-single-sidebar-left.html"><?php the_title(); ?></a>
                                                    </h6>
                                                    <p><?php the_excerpt(); ?></p>
                                                    <div class="inner">
                                                        <a href="blog-single-sidebar-left.html"
                                                           class="read-more-btn icon-space-left">Read More <span><i
                                                                    class="ion-ios-arrow-thin-right"></i></span></a>
                                                        <div class="post-meta">
                                                            <a href="" class="date"><?php echo get_the_date('d/m/Y') ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End Product Default Single Item -->
                                <?php
                                        endwhile;
                                    endif;
                                    wp_reset_postdata();
                                ?>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Blog Slider Section -->