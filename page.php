<?php
/**
 * The template for displaying pages
 */
get_header();
wp_reset_query();
get_template_part('sections/menu-main');
?>

<section  id="for_title_blog" class="child_page secstion_full">
    <div class="container_site">
        <div class="left_page_header_child">
            <a class="category_link" title="<?php the_title(); ?>"  href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="right_page_header_child">
            <span class="you_are_here">Bạn đang ở đây:<a href="<?php echo esc_url( home_url( ) ); ?>">Trang chủ</a> / <?php the_title(); ?></span>
        </div>
    </div>
</section>
<section id="content_singe_page" class="content_single page_wrapper">
	<div class="container_site">
     
            <?php if (have_posts()) : while(have_posts()) : the_post()?>
    			<div class="content-details-single">
                <h1><?php the_title(); ?></h1>
                <?php
                    foreach((get_the_category()) as $category){
                    $category_link = get_category_link($category->cat_ID);
                ?>
                <p><a class="category_link" href="<?php echo $category_link; ?>"><?php echo $category->name." ";?></a></p>
                <?php
                    }
                ?>
				<div class="content_the">
                    <?php the_content(); ?>
                </div>
    			</div>
            <?php endwhile; endif; ?>
    
    </div>
</section>
<?php
get_template_part('sections/contact-session-footer');
get_footer();
?>