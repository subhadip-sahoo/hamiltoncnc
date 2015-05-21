<?php  
    /* Template Name: Home */ 
    get_header(); ?>
    <div class="banner">
        <div class="center">
            <ul class="bxslider">
            	<li><img src="<?php echo get_template_directory_uri();?>/images/banner01.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri();?>/images/banner02.jpg" alt=""></li>
                <li><img src="<?php echo get_template_directory_uri();?>/images/banner03.jpg" alt=""></li>
            </ul> 
        </div>       	
    </div>
<section class="content">
<div class="welcome"> 	
   <hgroup class="welcomeheading"><h2><?php echo get_field('introduction_title');?></h2></hgroup>
   <div class="center">
            <img src="<?php echo the_field('introduction_image');?>" class="welcomeimg">
            <?php echo get_field('short_description');?>
            <div class="clr"></div>
    </div>
</div>
        
        

    <div class="center">
                <div class="ourservices">
                    <?php 
                        query_posts("page_id=7");
                        while ( have_posts() ) : the_post()
                    ?>
                    <a href="<?php echo the_permalink(); ?>">View More</a>
                	<h2><?php echo get_the_title(); ?></h2>
                    <p><?php echo get_field('short_description', 7, FALSE); ?></p>
                    <?php
                        endwhile; 
                        wp_reset_query();
                    ?>
                </div>
                <?php 
                    if(is_active_sidebar('sidebar-5')){
                        dynamic_sidebar('sidebar-5');
                    }
                ?>
                <div class="clr"></div>
            <hgroup class="genHeading"><h2>Our <span>gallery</span></h2></hgroup>
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
                                        <li><img src="<?php echo $img_src['guid'];?>" alt=""></li>
                    <?php
                                        }
                                    }   
                                }
                            }
                        }
                    ?>
                </ul>
            </div>
    </div>
</section>
<?php get_footer(); ?>
