<div class="product-default-slider-section section-top-gap-100 section-fluid">
    <div class="section-title-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-content-gap">
                        <div class="secton-content">
                            <h3 class="section-title">the New arrivals</h3>
                            <p>Preorder now to receive exclusive deals & gifts</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-wrapper" data-aos="fade-up" data-aos-delay="200">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product-slider-default-1row default-slider-nav-arrow">
                        <div class="swiper-container product-default-slider-4grid-1row">
                            <div class="swiper-wrapper">
                                <?php
                                $args2 = array(
                                    'post_type' => 'product',
                                    'posts_per_page' => 6,
                                );
                                $query2 = new WP_Query($args2);
                                if ($query2->have_posts())
                                {
                                    while ($query2->have_posts())
                                    {
                                        $query2->the_post();
                                        ?>
                                <div class="product-default-single-item product-color--green swiper-slide">
                                    <div class="image-box">
                                        <a href="<?php echo get_permalink(); ?>" class="image-link">
                                            <img src="<?php echo get_the_post_thumbnail_url();  ?>" alt="">
                                            <img src="<?php echo get_field("image_different_product"); ?>" alt="">
                                        </a>
                                        <?php //wc_get_template_part( 'content', 'product' );?>
                                        <div class="action-link">
                                            <div class="action-link-left">
                                                <?php get_button_card(); ?>
                                            </div>
                                            <div class="action-link-right">
                                                <a href="#"><i class="fas fa-search"></i></a>
                                                <a href="wishlist.html"><i class="fas fa-heart"></i></a>
                                                <!-- <a href="compare.html"><i class="icon-shuffle"></i></a> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <div class="content-left">
                                            <h6 class="title"><a
                                                    href="product-details-default.html"><?php echo get_the_title(); ?></a>
                                            </h6>
                                            <ul class="review-star">
                                                <li class="fill"><i class="fas fa-star"></i></li>
                                                <li class="fill"><i class="fas fa-star"></i></li>
                                                <li class="fill"><i class="fas fa-star"></i></li>
                                                <li class="fill"><i class="fas fa-star"></i></li>
                                                <li class="empty"><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <div class="content-right">

                                            <span class="price"><?php $product1 = wc_get_product( get_the_ID() );
                                                      echo $product1 ->get_price_html(); ?></span>
                                        </div>

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
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Product Default Slider Section -->