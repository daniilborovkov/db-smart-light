<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Smart_Light
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('t-body'); ?>>
  <div class="mask-logo">
    <div class="img-logo">
        <img src="<?php echo get_template_directory_uri() ?>/img/smart-main.png" alt="">
    </div>
  </div>
	<div id="allrecords" class="t-records">

		<!--header-->
    <div id="t-header" class="t-records">
        <div id="rec49492190" class="r t-rec t-rec_pb_0 floating">
            <!-- T456 -->
            <div class="t456__mobile">
                <div class="t456__mobile_container">
                    <div class="t456__mobile_text t-name t-name_md">&nbsp;</div>
                    <div class="t456__burger"> <span></span> <span></span> <span></span> <span></span> </div>
                </div>
            </div>
            <div id="nav49492190" class="t456 t456__hidden t456__positionfixed">
                <div class="t456__maincontainer">
                    <div class="t456__leftwrapper">
                        <div style="display: block;"> 
                            <?php the_custom_logo() ?>
                        </div>
                        <form role="search" method="GET" action="<?php echo get_home_url(); ?>" class="search">
                            <input type="search" name="search" placeholder="Поиск...">
                            <input type="submit" value="">
                        </form>
                    </div>
										<?php 
											wp_nav_menu( array(
												'theme_location'  => 'menu-1',
												'menu'            => '',
												'container'       => 'div',
												'container_class' => 't456__rightwrapper t456__menualign_right',
												'container_id'    => '',
												'menu_class'      => 'menu t456__list_item',
												'menu_id'         => '',
												'echo'            => true,
												'fallback_cb'     => 'wp_page_menu',
												'before'          => '',
												'after'           => '',
												'link_before'     => '',
												'link_after'      => '',
												'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
												'depth'           => 0,
												'walker'          => new WP_Smart_Light_Navwalker,
											) );
										 ?>
                </div>
            </div>
        </div>
    </div>
    <!--/header-->
