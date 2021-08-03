<!-- Start Banner Section -->
<div class="banner-section section-top-gap-100">
    <div class="banner-wrapper clearfix">
        <?php
        if(have_rows("list_category_home")):
        while(have_rows("list_category_home")) : the_row() ;
        ?>
        <!-- Start Banner Single Item -->
        <div class="banner-single-item banner-style-4 banner-animation banner-color--green float-start"
             data-aos="fade-up" data-aos-delay="0">
            <div class="image">
                <img class="img-fluid" src="<?php echo get_sub_field("img_cate"); ?>" alt="">
            </div>
            <a href="<?php echo get_sub_field("link"); ?>" class="content">
                <div class="inner">
                    <h4 class="title"><?php echo get_sub_field("title_cate"); ?></h4>
                    <h6 class="sub-title"><?php echo get_sub_field("amount_product"); ?></h6>
                </div>
                <span class="round-btn">&#8594;</span>
            </a>
        </div>
        <!-- End Banner Single Item -->
        <?php
        endwhile;
        endif;
        ?>
    </div>
</div>
<!-- End Banner Section -->