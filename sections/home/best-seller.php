<!-- Start Product List View Slider Section -->
<div class="product-list-slider-section section-top-gap-100 section-fluid">
    <!-- Start Section Content Text Area -->
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">Best Sellers</h3>
                            <p>Add our best sellers to your weekly lineup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Section Content Text Area -->
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-list-slider-3rows default-slider-nav-arrow">
                        <!-- Slider main container -->
                        <div class="swiper-container product-listview-slider-4grid-3rows">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Start Product ListView Single Item -->
                                <?php
                                $args3 = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 15,
                                );
                                $query3 = new WP_Query($args3);
                                if ($query3->have_posts())
                                {
                                    while ($query3->have_posts())
                                    {
                                        $query3->the_post();
                                        ?>
                                <div class="product-listview-single-item product-color--green swiper-slide">
                                    <div class="image-box">
                                        <a href="<?php echo get_permalink(); ?>" class="image-link">
                                            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="img">
                                            <img src="<?php echo get_field("image_different_product"); ?>" alt="img">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h6 class="title"><a
                                                href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                                        </h6>
                                        <ul class="review-star">
                                            <li class="fill"><i class="fas fa-star"></i></li>
                                            <li class="fill"><i class="fas fa-star"></i></li>
                                            <li class="fill"><i class="fas fa-star"></i></li>
                                            <li class="fill"><i class="fas fa-star"></i></li>
                                            <li class="empty"><i class="fas fa-star"></i></li>
                                        </ul>
                                        <span class="price"> <?php $product2 = wc_get_product( get_the_ID() );
                                                      echo $product2 ->get_price_html(); ?></span>
                                    </div>
                                </div>
                                <?php
                                    } ?>
                                <?php
                                    wp_reset_postdata();
                                } ?>
                            </div>
                        </div>
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev d-none d-md-block"></div>
                        <div class="swiper-button-next d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product List View Slider Section -->