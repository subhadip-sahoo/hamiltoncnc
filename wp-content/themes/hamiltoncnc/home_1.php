<?php  
   
    get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php 
                    query_posts("page_id=7");
                    while ( have_posts() ) : the_post()
                ?>
                    <h1><a href="<?php echo the_permalink(); ?>"><?php echo get_the_title(); ?></a></h1>
                    <?php echo get_field('short_description', 7, FALSE); ?>
                    <a href="<?php the_permalink();?>">View More</a>

                <?php
                    endwhile; 
                    wp_reset_query();
                    echo '<br><br><br><br>';
                    if(is_active_sidebar('sidebar-5')){
                        dynamic_sidebar('sidebar-5');
                    }
                ?>
                     <div class="homegallery">
                        <ul class="carousel">
                            <?php
                                $get_all_images = $wpdb->get_results("SELECT `meta_value` FROM {$wpdb->prefix}postmeta WHERE meta_key = '_easy_image_gallery' AND post_id = 30", ARRAY_A);
                                if(!empty($get_all_images)){
                                    foreach ($get_all_images as $image_ids) {
                                        $ids = explode(',', $image_ids['meta_value']);
                                        foreach ($ids as $id) {
                                            $get_img_src = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts WHERE ID = {$id}", ARRAY_A);
                                            if(!empty($get_img_src)){
                                                foreach ($get_img_src as $img_src) {

                            ?>
                                                <li><img src="<?php echo $img_src['guid'];?>" alt="" width="120" height="100"></li>
                            <?php
                                                }
                                            }   
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();
