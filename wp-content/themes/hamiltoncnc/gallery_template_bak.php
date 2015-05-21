<?php     
     get_header();
?>
<style>
.group1 {
    border: 1px solid #cccccc;
    display: inline-block;
    font-weight: bold;
    height: 210px;
    margin: 10px;
    outline: medium none;
    padding: 6px;
    position: relative;
    text-align: center;
    text-decoration: none;
    vertical-align: top;
    width: 210px;
}
.group1 .image {
    display: table-cell;
    height: 180px;
    text-align: center;
    vertical-align: middle;
    width: 210px;
}

.group1 .image img{
    max-height: 180px;
    max-width: 210px;
}

.group1 p { color:#707070; }

.navigation li a,
.navigation li a:hover,
.navigation li.active a,
.navigation li.disabled {
    color: #fff;
    text-decoration:none;
}

.navigation li {
    display: inline;
}

.navigation li a,
.navigation li a:hover,
.navigation li.active a,
.navigation li.disabled {
    background-color: #6FB7E9;
    border-radius: 3px;
    cursor: pointer;
    padding: 12px;
    padding: 0.75rem;
}

.navigation li a:hover,
.navigation li.active a {
    background-color: #3C8DC5;
}
</style>
<div id="main-content" class="main-content">
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
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
                                <h2><?php echo $title[0];?> <span><?php echo $title[1];?></span></h2></hgroup>
                        <?php
                                endwhile;
                            endif;
                                $get_all_images = $wpdb->get_results("SELECT `meta_value` FROM {$wpdb->prefix}postmeta WHERE meta_key = '_easy_image_gallery' AND post_id = 30", ARRAY_A);
                                if(!empty($get_all_images)){
                                    foreach ($get_all_images as $image_ids) {
                                        $ids = explode(',', $image_ids['meta_value']);
                                        foreach ($ids as $id) {
                                            $get_img_src = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}posts WHERE ID = {$id}", ARRAY_A);
                                            if(!empty($get_img_src)){
                                                foreach ($get_img_src as $img_src) {

                            ?>
                                                <a class="fancybox" href="<?php echo $img_src['guid'];?>" data-fancybox-group="gallery" title="<?php echo $img_src['post_title'];?>"><img src="<?php echo $img_src['guid'];?>" alt="" title="<?php echo $img_src['post_title'];?>" width="120" height="100"/></a>
                            <?php
                                                }
                                            }   
                                        }
                                    }
                                }
                            ?>
                    </div>
		</div><!-- #content -->
	</div><!-- #primary -->
	<?php get_sidebar( 'content' ); ?>
</div><!-- #main-content -->
<?php 
    get_sidebar();
    get_footer(); 
?>
