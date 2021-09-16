<?php
/**
 * template name: Home Page
 */
get_header();
?>
<?php get_template_part('sections/home/main-slider'); ?>
<?php get_template_part('sections/home/slider-partner'); ?>
<?php get_template_part('sections/home/collection-banner'); ?>
<?php get_template_part('sections/home/new-arrival-product'); ?>
<?php get_template_part('sections/home/banner-section'); ?>
<?php get_template_part('sections/home/policy'); ?>
<?php get_template_part('sections/home/banner-category'); ?>
<?php get_template_part('sections/home/best-seller'); ?>
<?php get_template_part('sections/home/banner-discount'); ?>
<?php get_template_part('sections/home/news-home'); ?>


<!-- material-scrolltop button -->
<button class="material-scrolltop" type="button"><i class="fas fa-chevron-up"></i></button>
<?php get_footer();?>