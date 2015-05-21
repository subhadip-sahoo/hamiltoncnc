<?php get_header();?>
<section class="content">
    <div class="center genpage">
        <?php
        if(have_posts()):
            while(have_posts()): the_post();
            $post = get_post(get_the_ID());
            $title = $post->post_title;
            $title = explode(' ', $title);
       ?>
            <hgroup class="genHeading">
                <h2><?php echo $title[0];?> <span><?php echo $title[1];?></span></h2>
            </hgroup>
            <?php the_content();?>
        <?php
                endwhile;
            endif;
        ?>
    </div>
</section>
<?php get_footer();?>