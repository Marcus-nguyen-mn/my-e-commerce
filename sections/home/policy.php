<!-- Start Service Section -->
<div class="service-promo-section section-top-gap-100">
    <div class="service-wrapper">
        <div class="container">
            <div class="row">
                <?php
                if(have_rows("policy_content")):
                while(have_rows("policy_content")) : the_row() ;
                ?>
                <!-- Start Service Promo Single Item -->
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="service-promo-single-item" data-aos="fade-up" data-aos-delay="0">
                        <div class="image">
                            <img src="<?php echo get_sub_field("policy_icon"); ?>" alt="icon">
                        </div>
                        <div class="content">
                            <h6 class="title"><?php echo get_sub_field("policy_title"); ?></h6>
                            <p><?php echo get_sub_field("policy_desc"); ?></p>
                        </div>
                    </div>
                </div>
                <!-- End Service Promo Single Item -->
                <?php
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Service Section -->