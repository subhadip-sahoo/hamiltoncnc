<?php
/* Template Name: Gallery */
get_header();
?>
<section class="content">
    <div class="center genpage">
        <hgroup class="genHeading">
            <?php 
                $args = array('post_type' => 'painters-gallery');
                query_posts($args);
                if(have_posts()):
                    while(have_posts()): the_post();
                    $post = get_post(get_the_ID());
                    $title = $post->post_title;
                    $title = explode(' ', $title);
           ?>
                    <h2><?php echo $title[0];?> <span><?php echo $title[1];?></span></h2>
            <?php
                    endwhile;
                endif;
            ?>
        </hgroup>
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
                                    <a class="fancybox" href="<?php echo $img_src['guid'];?>" data-fancybox-group="gallery" title="<?php echo $img_src['post_title'];?>"><img src="<?php echo $img_src['guid'];?>" alt="" title="<?php echo $img_src['post_title'];?>" width="207" height="180"/></a>
            <?php
                                }
                            }   
                        }
                    }
                }
            ?>    
    </div>
</section>
<?php get_footer();?>

