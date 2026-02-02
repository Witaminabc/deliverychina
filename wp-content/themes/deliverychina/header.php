<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/lightgallery.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/selectric.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/addstyles.css">
    <?php wp_head(); ?>

</head>
<body>
<div class="wrapper">
    <div class="menu_responsive__container">

    </div>
    <header>
        <button class="mob_menu__button">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="header__inside_cont">
            <div class="container">
                <a href="" class="logo">
                    <img src="<?php echo get_template_directory_uri();?>/img/noroot logo2.png" alt="">

                </a>

                <ul class="menu_dropdown">
                    <?php $header_drop_one_title=get_field('header_drop_one_title','options');
                    if($header_drop_one_title){?>
                    <li>
                        <a href="">
                            <?php echo get_field('header_drop_one_title','options')?>
                            <i><svg aria-hidden="true" data-prefix="fal" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="svg-inline--fa fa-angle-right fa-w-6 fa-2x"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z" class=""></path></svg></i>
                        </a>
                        <ul class="menu_dropdown--inside">
                            <?php $header_drop_one=get_field('header_drop_one','options') ?>
                            <?php foreach ($header_drop_one as $header_drop_one_k => $header_drop_one_v){
                            ?>
                            <li>
                                <a href=" <?php echo $header_drop_one_v['href'] ?>">
                                    <figure>
                                        <img src=" <?php echo $header_drop_one_v['img'] ?>" alt="">
                                    </figure>
                                    <span> <?php echo $header_drop_one_v['name'] ?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </li>
                    <?php } ?>
                    <?php $header_drop_two_title=get_field('header_drop_two_title','options');
                    if($header_drop_two_title){?>
                        <li>
                            <a href="">
                                <?php echo get_field('header_drop_two_title','options')?>
                                <i><svg aria-hidden="true" data-prefix="fal" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192 512" class="svg-inline--fa fa-angle-right fa-w-6 fa-2x"><path fill="currentColor" d="M166.9 264.5l-117.8 116c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17L127.3 256 25.1 155.6c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0l117.8 116c4.6 4.7 4.6 12.3-.1 17z" class=""></path></svg></i>
                            </a>
                            <ul class="menu_dropdown--inside">
                                <?php $header_drop_two=get_field('header_drop_two','options') ?>
                                <?php foreach ($header_drop_two as $header_drop_two_k => $header_drop_two_v){
                                    ?>
                                    <li>
                                        <a href=" <?php echo $header_drop_two_v['href'] ?>">
                                            <figure>
                                                <img src=" <?php echo $header_drop_two_v['img'] ?>" alt="">
                                            </figure>
                                            <span> <?php echo $header_drop_two_v['name'] ?></span>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } ?>
                </ul>
<!--                <ul class="navigation">-->
<!--                    <li class="active_page">-->
<!--                        <a href="">Главная</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">О компании</a>-->
<!--                    </li>-->
<!---->
<!--                    <li>-->
<!--                        <a href="">Контакты</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="">Новости</a>-->
<!--                    </li>-->
<!--                </ul>-->
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'header_menu',
                    'menu'            => 'header_menu',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'navigation',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ] );
                ?>
            </div>
        </div>
    </header>