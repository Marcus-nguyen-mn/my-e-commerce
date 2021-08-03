<!-- Start Company Logo Section -->
<div class="company-logo-section section-top-gap-100 section-fluid">
    <div class="company-logo-wrapper" data-aos="fade-up" data-aos-delay="0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="company-logo-slider default-slider-nav-arrow">
                        <div class="swiper-container company-logo-slider">
                            <div class="swiper-wrapper">
                                <?php
                                if(have_rows("partner_slider")):
                                while(have_rows("partner_slider")) : the_row() ;
                                ?>
                                <div class="company-logo-single-item swiper-slide">
                                    <div class="image"><img class="img-fluid"
                                                            src="<?php echo get_sub_field("img_slider_partner"); ?>" alt="img_slider_partner"></div>
                                </div>
                                <?php
                                endwhile;
                                endif;
                                ?>
                            </div>
                        </div>
                        <div class="swiper-button-prev d-none d-md-block"></div>
                        <div class="swiper-button-next d-none d-md-block"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Company Logo Section -->