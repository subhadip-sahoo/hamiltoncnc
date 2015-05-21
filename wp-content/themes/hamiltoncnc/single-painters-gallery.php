<?php
    get_header(); 
?>
<style>
    .image-gallery {
        margin-left: 30px !important; 
    }
</style>
    <div id="primary" class="content-area">
            <div id="content" class="site-content" role="main">
                <?php
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                ?>
                    <p><?php the_title(); ?></p>
                <?php
                        the_content();
                    endwhile;
                ?>
            </div><!-- #content -->
    </div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
