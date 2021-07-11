<?php
get_header();
?>
<section id="mainNhaKhoa" class="scroll-container">
<?php if (have_rows('custom_category','option')) {
    the_row();
    $title = get_sub_field('title');
    $sub_title = get_sub_field('sub_title');
    $background = get_sub_field('background');
    ?>
    <section class="page-one vertical-scrolling bg HeightAuto">
        <div class="loop_category flex setup-section">
            <div class="background">
                <div class="_category row-grid-2">
                    <div class="item">
                        <?php title_section_arr(array(
                            'title' =>  $title,
                            'sub_title' =>  $sub_title,
                        )); ?>
                        <?php ajax_post(); ?>
                    </div>
                    <div class="item">
                        <div class="background"><img src=" <?php echo $background['url']; ?>" alt="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
} ?>
<?php get_template_part('sections/home/page-eight'); ?>
</section>
<?php get_footer();?>