<?php
get_header();
wp_reset_query();
get_template_part('sections/menu-main');
?>
<?php
while(have_posts()) : the_post();
    ?>
    <?php the_content(); ?>
<?php endwhile; ?>
<?php get_footer();?>