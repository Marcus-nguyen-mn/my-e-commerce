<div class="hero-slider-section">
    <div class="hero-slider-active swiper-container">
        <div class="swiper-wrapper">
            <?php
                if(have_rows("home_slider")):
                    while(have_rows("home_slider")) : the_row() ;
            ?>
            <div class="hero-single-slider-item swiper-slide">
                <div class="hero-slider-bg">
                    <img src="<?php echo get_sub_field("img_slider"); ?>" alt="">
                </div>
                <div class="hero-slider-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-auto">
                                <div class="hero-slider-content">
                                    <h4 class="subtitle">Made of Fresh Ingredients</h4>
                                    <h1 class="title">A natural & <br> organic Skincare </h1>
                                    <a href="<?php echo get_sub_field("link_slider"); ?>" class="btn btn-lg btn-outline-green">shop
                                        now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                endif;
            ?>
        </div>
        <div class="swiper-pagination active-color-green"></div>
        <div class="swiper-button-prev d-none d-lg-block"></div>
        <div class="swiper-button-next d-none d-lg-block"></div>
    </div>
</div>
