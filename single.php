<?php
get_header();
wp_reset_query();
get_template_part('sections/menu-main');
?>
<?php if ($post->post_type == "san-pham") {?>
    <?php get_template_part('sections/products/product-content');?>
<?php }elseif($post->post_type == "du-an"){?>    
    <?php get_template_part('sections/projects/project-content');?>
<?php  }else{?>
    <?php get_template_part('sections/content_singe_page');?>
<?php }?>
<?php get_footer();?>