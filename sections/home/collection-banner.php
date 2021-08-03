<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100 section-fluid">
    <div class="banner-wrapper">
        <div class="container">
            <div class="row mb-n6">
                <?php
                if(have_rows("collection_detail")):
                while(have_rows("collection_detail")) : the_row() ;
                ?>
                <div class="col-md-4 col-12 mb-6">
                    <!-- Start Banner Single Item -->
                    <div class="banner-single-item banner-style-5 img-responsive" data-aos="fade-up"
                         data-aos-delay="400">
                        <a href="<?php echo get_sub_field("link_collection"); ?>l" class="image banner-animation">
                            <img src="<?php echo get_sub_field("img_collection"); ?>" alt="">
                        </a>
                    </div>
                    <!-- End Banner Single Item -->
                </div>
                <?php
                endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<!-- End Banner Section -->