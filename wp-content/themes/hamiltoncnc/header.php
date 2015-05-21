<!DOCTYPE html>
<head>
<meta charset="utf-8" />

<meta name="viewport" content="width=device-width">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo get_template_directory_uri();?>/images/favicon.ico" type="image/x-icon">

<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic' rel='stylesheet' type='text/css'>
<link href="<?php echo get_template_directory_uri();?>/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/moderniz.js"></script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.bxslider.css" type="text/css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.bxslider.js"></script>

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/tinynav.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/js/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/jquery.fancybox.css?v=2.1.5" media="screen" />
<script type="text/javascript">
$(document).ready(function() {	
	$("#nav").tinyNav();
        $('.fancybox').fancybox();
	$('.bxslider').bxSlider({
	  mode: 'fade',
	  captions: false,
	  auto:true
	});
	$('.carousel').bxSlider({
		auto:true,
		minSlides: 2,
		maxSlides: 5,
		slideWidth: 223,
		slideMargin: 14
	});
        $('ul#nav li:nth-child(4)').addClass('contactmenu');
        $('ul#nav li:nth-child(5)').addClass('booking');
});
</script>
<?php wp_head();?>
</head>

<body>
    <header>
    	<div class="center">
                    <div class="logo">
                        <a href="<?php echo home_url();?>"><img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt=""></a>
                    </div>
                    <?php 
                        if(is_active_sidebar('sidebar-4')){
                            dynamic_sidebar('sidebar-4');
                        }
                    ?>
                    <div class="clr"></div>
          </div>  
          <nav>
            <?php
                $args = array(
                        'theme_location'  => '',
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
                        'items_wrap'      => '<ul id="nav">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => ''
                );
                wp_nav_menu( $args );
            ?>
        </nav>  
    </header>