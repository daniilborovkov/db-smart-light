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
                    <div class="t456__rightwrapper t456__menualign_right">
                        <ul class="t456__list menu">
                            <li class="t456__list_item">
                                <a class="t-menu__link-item t-active" href="/">Главная</a>
                            </li>
                            <li class="t456__list_item uslugi">
                                <span class="t-menu__link-item link-item-uslugi">Услуги</span>
                                <ul class="down-uslugi">
                                    <li>
                                        <a href="uslugi-item.html" title="Уличная подсветка">Уличная подсветка</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Фасадная подсветка">Фасадная подсветка</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Проектные работы">Проектные работы</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Проаздничная иллюминация">Праздничная
                                            Иллюминация</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Спортивное освещение">Спортивное
                                            освещение</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Административное освещение">Административное
                                            освещение</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Промышленное освещение">Промышленное
                                            освещение</a>
                                    </li>
                                    <li>
                                        <a href="uslugi-item.html" title="Строительные работы">Строительные работы</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="t456__list_item project">
                                <span class="t-menu__link-item link-item-project">Проекты</span>
                                <ul class="down-project">
                                    <li>
                                        <a href="street.html" title="Уличная подсветка">Уличная подсветка</a>
                                    </li>
                                    <li>
                                        <a href="street.html" title="Фасадная подсветка">Фасадная подсветка</a>
                                    </li>
                                    <li>
                                        <a href="street.html" title="Проаздничная иллюминация">Праздничная Иллюминация</a>
                                    </li>
                                    <li>
                                        <a href="street.html" title="Спортивное освещение">Спортивное освещение</a>
                                    </li>
                                    <li>
                                        <a href="street.html" title="Административное освещение">Административное освещение</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="t456__list_item click-p"><a class="t-menu__link-item click-p" href="#rec63740744">Партнеры</a></li>
                            <li class="t456__list_item click-k"><a class="t-menu__link-item click-k" href="#rec47189732">Контакты</a></li>
                            <li class="t456__list_item"><a class="t-menu__link-item" href="/eng">Eng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/header-->
