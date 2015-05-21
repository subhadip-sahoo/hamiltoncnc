<?php
/* Template Name: Contact Us */
get_header();
?>
<script type="text/javascript">
    $(function(){
        $('form').addClass('formpannel');
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
             $('.wpcf7-form .submit').on('click', function(){
                    $(window).scrollTop($('.content').offset().top);
             });
    });
</script>
<section class="content">
    <div class="center genpage">
    <?php
        if(have_posts()):
            while(have_posts()): the_post();
            $post = get_post(get_the_ID());
            $title = $post->post_title;
            $title = explode(' ', $title);
            endwhile;
        endif;
    ?>
        <hgroup class="genHeading">
            <h2><?php echo $title[0];?> <span><?php echo $title[1];?></span></h2>
        </hgroup>
        <div class="leftPan">   
            <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');?>
        </div>
    <?php
        if(have_posts()):
            while(have_posts()): the_post();
    ?>
        <div class="rightPan">
            <?php the_content();?>
        </div>
    <?php
            endwhile;
        endif;
    ?>
        <div class="clr"></div>
    </div>
</section>
<?php get_footer();?>
