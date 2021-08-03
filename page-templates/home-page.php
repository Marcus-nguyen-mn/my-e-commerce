<?php
/**
 * template name: Home Page
 */
get_header();
?>
<?php get_template_part('sections/home/main-slider'); ?>
<?php get_template_part('sections/home/slider-partner'); ?>
<?php get_template_part('sections/home/collection-banner'); ?>
<?php get_template_part('sections/home/banner-section'); ?>
<?php get_template_part('sections/home/policy'); ?>
<?php get_template_part('sections/home/banner-category'); ?>
<?php get_template_part('sections/home/banner-discount'); ?>
<?php get_template_part('sections/home/news-home'); ?>
<?php get_template_part('woocommerce/content-product'); ?>
<?php
// $post_count = 0;
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
        <?php wc_get_template_part( 'content', 'product' );?>
        <?php
    } ?>
    <?php
    wp_reset_postdata();
} ?>
    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>
<?php get_footer();?>