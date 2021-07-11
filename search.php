<?php
/**
 * The template for displaying search results pages
 *
 */

get_header();
get_template_part('sections/menu-main');
?>
<?php if ( have_posts() ) : ?>
<section  id="for_title_blog" class="child_page secstion_full">
    <div class="container_site">
      <div class="left_page_header_child">
        <?php if ( have_posts() ) : 
            $allsearch =new WP_Query("s=$s&showposts=-1");
            echo $allsearch ->found_posts." "; printf( __( 'Kết quả tìm kiếm cho từ khóa: %s', 'WebExp24h' ), '<span>' . esc_html( get_search_query() ));
        ?>
    	<?php endif; ?>
      </div>
      <div class="right_page_header_child">
            <span class="you_are_here">Bạn đang ở đây:<a href="<?php echo esc_url( home_url( ) ); ?>">Trang chủ</a> / <?php printf( __( 'Kết quả tìm kiếm cho từ khóa: %s', 'WebExp24h' ), '<span>' . esc_html( get_search_query() ));?></span>
      </div>
    </div>
</section>
<section id="search_page_new" class="child_page secstion_full">
    <div class="container_site">
        <h1 class="search_new_tile">Tìm kiếm</h1>
        <span>Nếu không vừa lòng với kết quả tìm kiếm bên dưới, hãy tìm kiếm với từ khóa khác!</span>
        <form role="search" method="get" class="search_form_footer" action="<?php echo esc_url( home_url( '/' ) ); ?>">                                 		
             <div class="search_form_page_wrap">
                <input type="search" id="search_field_2" class="search-field search_field_form_page_footer search_field_form_page_search_page_only" placeholder="Điền từ khóa" value="<?php echo get_search_query(); ?>" name="s" />
                <button type="submit" class="search_submit_page_footer search_submit_page_search_page"><i class="fa fa-search"></i></button>
             </div>
        </form>
    </div>
</section>
<section id="search_page" class="child_page secstion_full">
    <div class="container_site">
        <ul class="items_blog">
            <?php if (have_posts()) : $count_dnbs=1; while (have_posts()) : the_post(); ?>
                <?php 
                    if($count_dnbs%4==0){$class_no_margin="dnbs_no_margin_right";}else{$class_no_margin=" ";}
                    if($count_dnbs%4==1){$class_no_marginleft="dnbs_no_margin_left";}else{$class_no_marginleft=" ";}
                    ?>
                    
                    <li class="item_blog item_blog_<?php echo $count_dnbs;?> <?php echo $class_no_margin;?>  <?php echo $class_no_marginleft;?>">
                    
                        <span class="count_items"><?php echo $count_dnbs;?></span>
                        
                        <div class="content_list_blog_page">
                            <div class="name_title_blog">
                                <a href="<?php the_permalink(); ?>" title="<?php the_title();?>">
                                    <h3 class="name_title_h3_blog"><?php the_title();?></h3>
                                   
                                </a>
                                <span class="date_and_time"><?php echo get_the_date( 'j F, Y' );?></span>
                            </div>
                            <div class="short_description_blogs_list">
                                
                                    <?php echo get_excerpt(158);?>
                                
                            </div>
                        </div>
           
                    </li>
                <?php $count_dnbs++; endwhile; //wp_reset_postdata(); ?>
           <?php endif; ?>
        </ul>
        <div class="navigation_archive">
            <?php  category_pagination();?>
        </div>
    </div>
</section>

<?php else : ?>
<section id="search_page" class="child_page secstion_full">
    <div class="container_site">
    	<header class="page-header">
    		<h1 class="page_title_search"><?php _e( 'Không có kết quả phù hợp', 'WebExp24h' ); ?></h1>
    	</header>
    	<div class="page_content_search">
			<p><?php _e( 'Xin lỗi, không có kết quả tìm kiếm phù hợp với yêu cầu của bạn!', 'WebExp24h' ); ?></p>
			<?php get_search_form(); ?>
    	</div>
    </div>
</section>
<?php		
    endif;
?>


<?php
get_footer();
 ?>