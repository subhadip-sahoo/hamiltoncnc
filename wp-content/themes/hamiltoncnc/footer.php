<footer>
    	<div class="center">
        	<div class="social">
                    <?php 
                        if(is_active_sidebar('sidebar-6')){
                            dynamic_sidebar('sidebar-6');
                        }
                    ?>
                </div>
            <?php
                    $args = array(
                            'theme_location'  => 'footer-menu',
                            'menu'            => '',
                            'container'       => '',
                            'container_class' => '',
                            'container_id'    => '',
                            'menu_class'      => 'menu',
                            'menu_id'         => '',
                            'echo'            => true,
                            'fallback_cb'     => 'wp_page_menu',
                            'before'          => '',
                            'after'           => '',
                            'link_before'     => '',
                            'link_after'      => '',
                            'items_wrap'      => '<ul>%3$s</ul>',
                            'depth'           => 0,
                            'walker'          => ''
                    );
                    wp_nav_menu( $args );
                ?>
            <p>&copy; IC Auto Tek 2014. All Rights Reserved. <a href="http://www.businessprodesigns.com/" rel="nofollow" target="_blank">Website Design | Web Development | SEO PPC Services: www.businessprodesigns.com</a></p>
            <div class="clr"></div>
          </div>
    </footer>
    <?php wp_footer();?>
</body>
</html>