<?php
/**

 * Template Name: main page

 */
 get_header(); ?>
    <main>
        <?php
         while ( have_posts() ) : the_post(); ?>
             <?php if(get_field('slaider_main') ) { ?>
        <div class="main__slider_wrapper">
            <div class="main__slider--top">

                 <?php $slaider_main=get_field('slaider_main') ?>
                 <?php foreach ($slaider_main as $slaider_main_k => $slaider_main_v){
                     ?>
                <div class="main__slider_slide">
                    <div class="art_div_">
                        <h1><?php  echo $slaider_main_v['top']; ?></h1>
                        <p><?php  echo $slaider_main_v['subtitle']; ?></p>
                        <a href="<?php  echo $slaider_main_v['href_buttom']; ?>"><?php  echo $slaider_main_v['name_buttom']; ?></a>
                    </div>
                    <img src="<?php  echo $slaider_main_v['img']; ?>" alt="">
                </div>
                 <?php  }  ?>

            </div>
        </div>
             <?php } ?>
        <div class=" banner">
            <div class="banner-wrap container" style="background-color:<?php  echo get_field('banner_fone'); ?> ">
                <div class="banner__img">
                    <img src="<?php  echo get_field('banner_img'); ?>" alt="">
                </div>
                <div class="banner-title">
                    <?php  echo get_field('banner_text'); ?>
                </div>
            </div>
        </div>
        <div class=" rightly">
            <div class="rightly-wrap container">
                <div class="rightly-title">
                    <span class="top_main__title top_main__title--modific"><?php  echo get_field('rightly_title'); ?></span>
                </div>
                <div class="rightly__blocks">
                    <?php $rightly_blocks=get_field('rightly_blocks') ?>
                 <?php foreach ($rightly_blocks as $rightly_blocks_k => $rightly_blocks_v){
                     ?>
                    <div class="rightly__block">
                        <?php echo $rightly_blocks_v['text']; ?>

                    </div>
                 <?php  }  ?>
                </div>
            </div>
        </div>
        <div class="main__tabs_wrapper">
            <div class="container">

                <span class="top_main__title top_main__title--modific"><?php echo get_field('popularcccat_title'); ?></span>
                <ul class="tab_links">
                    <?php $populatcat=get_field('populatcat') ?>
                 <?php foreach ($populatcat as $populatcat_k => $populatcat_v){
                     ?>
                    <li>
<!--                        <a href="" data-item="1" class="">Декоративная светотехника</a>-->
                        <a href="" data-item="<?php echo $populatcat_k;?>" class="m_f_ico__active_tabs"><?php echo $populatcat_v['title'];?> </a>
                    </li>

                 <?php  }  ?>
                </ul>
<!--                <div class="tab_content " id="1">-->
                 <?php foreach ($populatcat as $populatcat_k => $populatcat_v){
                     ?>
                <div class="tab_content <?php if( $populatcat_k==0 ){ ?>active_tab__container<?php }?>" id="<?php echo $populatcat_k ?>">
                    <ul>
                        <?php $populatcat_single= $populatcat_v['single'] ?>
                        <?php foreach ($populatcat_single as $populatcat_single_k => $populatcat_single_v){
                            ?>
                        <li>
                            <a href="">
                                <img src="<?php echo $populatcat_single_v['img'] ?>" alt="">
                                <span>
                                 <?php echo $populatcat_single_v['subtitle'] ?>
                                </span>
                            </a>
                        </li>
                        <?php  }  ?>

                    </ul>
                </div>
                 <?php  }  ?>
            </div>
        </div>
<!--        <div class="main__sales_trand">-->
<!--            <span class="title">Награды</span>-->
<!--            <div class="main__sales_trand--top"></div>-->
<!--            <div class="main__sales_trand--bottom"></div>-->
<!--            <div class="container">-->
<!--                <div class="sales_trand__slider">-->
<!--                    <div>-->
<!--                        <div class="section_big section_big2">-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                        <div class="sec_text section_big">-->
<!--                            <div class="sec_text1">-->
<!--                                <p>Светодиодная гирлянда <br>на батарейках (4 метра)</p>-->
<!--                                <span>категория товара</span>-->
<!--                            </div>-->
<!--                            <div class="sec_text--main">-->
<!--                                <span>категория товара</span>-->
<!--                                <div class="sec_text2">-->
<!--                                    <span>15000 <i>&#8381;</i></span>-->
<!--                                </div>-->
<!--                                <div class="sec_text3">-->
<!--                                    <div class="counter_block">-->
<!--                                        <div class="counter">-->
<!--                                            <span>1</span>-->
<!--                                            <i>шт.</i>-->
<!--                                        </div>-->
<!--                                        <div class="section_big">-->
<!--                                            <div class="plus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-up fa-w-8 fa-2x"><path fill="currentColor" d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                            <div class="minus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-down fa-w-8 fa-2x"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="sec_text4 sec_text4--active">-->
<!--                                    <i>-->
<!--                                        <svg aria-hidden="true" data-prefix="fal" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-eye fa-w-18 fa-2x"><path fill="currentColor" d="M569.354 231.631C512.969 135.948 407.808 72 288 72 168.14 72 63.004 135.994 6.646 231.63a47.999 47.999 0 0 0 0 48.739C63.032 376.053 168.192 440 288 440c119.86 0 224.996-63.994 281.354-159.631a48.002 48.002 0 0 0 0-48.738zM416 228c0 68.483-57.308 124-128 124s-128-55.517-128-124 57.308-124 128-124 128 55.517 128 124zm125.784 36.123C489.837 352.277 393.865 408 288 408c-106.291 0-202.061-56.105-253.784-143.876a16.006 16.006 0 0 1 0-16.247c29.072-49.333 73.341-90.435 127.66-115.887C140.845 158.191 128 191.568 128 228c0 85.818 71.221 156 160 156 88.77 0 160-70.178 160-156 0-36.411-12.833-69.794-33.875-96.01 53.76 25.189 98.274 66.021 127.66 115.887a16.006 16.006 0 0 1-.001 16.246zM224 224c0-10.897 2.727-21.156 7.53-30.137v.02c0 14.554 11.799 26.353 26.353 26.353 14.554 0 26.353-11.799 26.353-26.353s-11.799-26.353-26.353-26.353h-.02c8.981-4.803 19.24-7.53 30.137-7.53 35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64z" class=""></path></svg>-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="" class="sec_text__link">-->
<!--                                <i><svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg></i>-->
<!--                                в корзину</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <div class="section_big section_big2">-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                        <div class="sec_text section_big">-->
<!--                            <div class="sec_text1">-->
<!--                                <p>Светодиодная гирлянда <br>на батарейках (4 метра)</p>-->
<!--                                <span>категория товара</span>-->
<!--                            </div>-->
<!--                            <div class="sec_text--main">-->
<!--                                <div class="sec_text2">-->
<!--                                    <span>15000 <i>&#8381;</i></span>-->
<!--                                </div>-->
<!--                                <div class="sec_text3">-->
<!--                                    <div class="counter_block">-->
<!--                                        <div class="counter">-->
<!--                                            <span>1</span>-->
<!--                                            <i>шт.</i>-->
<!--                                        </div>-->
<!--                                        <div class="section_big">-->
<!--                                            <div class="plus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-up fa-w-8 fa-2x"><path fill="currentColor" d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                            <div class="minus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-down fa-w-8 fa-2x"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="sec_text4">-->
<!--                                    <i>-->
<!--                                        <svg aria-hidden="true" data-prefix="fal" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-eye fa-w-18 fa-2x"><path fill="currentColor" d="M569.354 231.631C512.969 135.948 407.808 72 288 72 168.14 72 63.004 135.994 6.646 231.63a47.999 47.999 0 0 0 0 48.739C63.032 376.053 168.192 440 288 440c119.86 0 224.996-63.994 281.354-159.631a48.002 48.002 0 0 0 0-48.738zM416 228c0 68.483-57.308 124-128 124s-128-55.517-128-124 57.308-124 128-124 128 55.517 128 124zm125.784 36.123C489.837 352.277 393.865 408 288 408c-106.291 0-202.061-56.105-253.784-143.876a16.006 16.006 0 0 1 0-16.247c29.072-49.333 73.341-90.435 127.66-115.887C140.845 158.191 128 191.568 128 228c0 85.818 71.221 156 160 156 88.77 0 160-70.178 160-156 0-36.411-12.833-69.794-33.875-96.01 53.76 25.189 98.274 66.021 127.66 115.887a16.006 16.006 0 0 1-.001 16.246zM224 224c0-10.897 2.727-21.156 7.53-30.137v.02c0 14.554 11.799 26.353 26.353 26.353 14.554 0 26.353-11.799 26.353-26.353s-11.799-26.353-26.353-26.353h-.02c8.981-4.803 19.24-7.53 30.137-7.53 35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64z" class=""></path></svg>-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="" class="sec_text__link">-->
<!--                                <i><svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg></i>-->
<!--                                в корзину</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <div class="section_big section_big2">-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                        <div class="sec_text section_big">-->
<!--                            <div class="sec_text1">-->
<!--                                <p>Светодиодная гирлянда <br>на батарейках (4 метра)</p>-->
<!--                                <span>категория товара</span>-->
<!--                            </div>-->
<!--                            <div class="sec_text--main">-->
<!--                                <div class="sec_text2">-->
<!--                                    <span>15000 <i>&#8381;</i></span>-->
<!--                                </div>-->
<!--                                <div class="sec_text3">-->
<!--                                    <div class="counter_block">-->
<!--                                        <div class="counter">-->
<!--                                            <span>1</span>-->
<!--                                            <i>шт.</i>-->
<!--                                        </div>-->
<!--                                        <div class="section_big">-->
<!--                                            <div class="plus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-up fa-w-8 fa-2x"><path fill="currentColor" d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                            <div class="minus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-down fa-w-8 fa-2x"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="sec_text4">-->
<!--                                    <i>-->
<!--                                        <svg aria-hidden="true" data-prefix="fal" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-eye fa-w-18 fa-2x"><path fill="currentColor" d="M569.354 231.631C512.969 135.948 407.808 72 288 72 168.14 72 63.004 135.994 6.646 231.63a47.999 47.999 0 0 0 0 48.739C63.032 376.053 168.192 440 288 440c119.86 0 224.996-63.994 281.354-159.631a48.002 48.002 0 0 0 0-48.738zM416 228c0 68.483-57.308 124-128 124s-128-55.517-128-124 57.308-124 128-124 128 55.517 128 124zm125.784 36.123C489.837 352.277 393.865 408 288 408c-106.291 0-202.061-56.105-253.784-143.876a16.006 16.006 0 0 1 0-16.247c29.072-49.333 73.341-90.435 127.66-115.887C140.845 158.191 128 191.568 128 228c0 85.818 71.221 156 160 156 88.77 0 160-70.178 160-156 0-36.411-12.833-69.794-33.875-96.01 53.76 25.189 98.274 66.021 127.66 115.887a16.006 16.006 0 0 1-.001 16.246zM224 224c0-10.897 2.727-21.156 7.53-30.137v.02c0 14.554 11.799 26.353 26.353 26.353 14.554 0 26.353-11.799 26.353-26.353s-11.799-26.353-26.353-26.353h-.02c8.981-4.803 19.24-7.53 30.137-7.53 35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64z" class=""></path></svg>-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="" class="sec_text__link">-->
<!--                                <i><svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg></i>-->
<!--                                в корзину</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <div class="section_big section_big2">-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                        <div class="sec_text section_big">-->
<!--                            <div class="sec_text1">-->
<!--                                <p>Светодиодная гирлянда <br>на батарейках (4 метра)</p>-->
<!--                                <span>категория товара</span>-->
<!--                            </div>-->
<!--                            <div class="sec_text--main">-->
<!--                                <div class="sec_text2">-->
<!--                                    <span>15000 <i>&#8381;</i></span>-->
<!--                                </div>-->
<!--                                <div class="sec_text3">-->
<!--                                    <div class="counter_block">-->
<!--                                        <div class="counter">-->
<!--                                            <span>1</span>-->
<!--                                            <i>шт.</i>-->
<!--                                        </div>-->
<!--                                        <div class="section_big">-->
<!--                                            <div class="plus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-up fa-w-8 fa-2x"><path fill="currentColor" d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                            <div class="minus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-down fa-w-8 fa-2x"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="sec_text4">-->
<!--                                    <i>-->
<!--                                        <svg aria-hidden="true" data-prefix="fal" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-eye fa-w-18 fa-2x"><path fill="currentColor" d="M569.354 231.631C512.969 135.948 407.808 72 288 72 168.14 72 63.004 135.994 6.646 231.63a47.999 47.999 0 0 0 0 48.739C63.032 376.053 168.192 440 288 440c119.86 0 224.996-63.994 281.354-159.631a48.002 48.002 0 0 0 0-48.738zM416 228c0 68.483-57.308 124-128 124s-128-55.517-128-124 57.308-124 128-124 128 55.517 128 124zm125.784 36.123C489.837 352.277 393.865 408 288 408c-106.291 0-202.061-56.105-253.784-143.876a16.006 16.006 0 0 1 0-16.247c29.072-49.333 73.341-90.435 127.66-115.887C140.845 158.191 128 191.568 128 228c0 85.818 71.221 156 160 156 88.77 0 160-70.178 160-156 0-36.411-12.833-69.794-33.875-96.01 53.76 25.189 98.274 66.021 127.66 115.887a16.006 16.006 0 0 1-.001 16.246zM224 224c0-10.897 2.727-21.156 7.53-30.137v.02c0 14.554 11.799 26.353 26.353 26.353 14.554 0 26.353-11.799 26.353-26.353s-11.799-26.353-26.353-26.353h-.02c8.981-4.803 19.24-7.53 30.137-7.53 35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64z" class=""></path></svg>-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="" class="sec_text__link">-->
<!--                                <i><svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg></i>-->
<!--                                в корзину</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div>-->
<!--                        <div class="section_big section_big2">-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit1.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit2.png" alt="">-->
<!--                            </figure>-->
<!--                            <figure>-->
<!--                                <img src="--><?php //echo get_template_directory_uri();?><!--/img/hit3.png" alt="">-->
<!--                            </figure>-->
<!--                        </div>-->
<!--                        <div class="sec_text section_big">-->
<!--                            <div class="sec_text1">-->
<!--                                <p>Светодиодная гирлянда <br>на батарейках (4 метра)</p>-->
<!--                                <span>категория товара</span>-->
<!--                            </div>-->
<!--                            <div class="sec_text--main">-->
<!--                                <div class="sec_text2">-->
<!--                                    <span>15000 <i>&#8381;</i></span>-->
<!--                                </div>-->
<!--                                <div class="sec_text3">-->
<!--                                    <div class="counter_block">-->
<!--                                        <div class="counter">-->
<!--                                            <span>1</span>-->
<!--                                            <i>шт.</i>-->
<!--                                        </div>-->
<!--                                        <div class="section_big">-->
<!--                                            <div class="plus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-up" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-up fa-w-8 fa-2x"><path fill="currentColor" d="M136.5 185.1l116 117.8c4.7 4.7 4.7 12.3 0 17l-7.1 7.1c-4.7 4.7-12.3 4.7-17 0L128 224.7 27.6 326.9c-4.7 4.7-12.3 4.7-17 0l-7.1-7.1c-4.7-4.7-4.7-12.3 0-17l116-117.8c4.7-4.6 12.3-4.6 17 .1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                            <div class="minus">-->
<!--                                                <svg aria-hidden="true" data-prefix="fal" data-icon="angle-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-angle-down fa-w-8 fa-2x"><path fill="currentColor" d="M119.5 326.9L3.5 209.1c-4.7-4.7-4.7-12.3 0-17l7.1-7.1c4.7-4.7 12.3-4.7 17 0L128 287.3l100.4-102.2c4.7-4.7 12.3-4.7 17 0l7.1 7.1c4.7 4.7 4.7 12.3 0 17L136.5 327c-4.7 4.6-12.3 4.6-17-.1z" class=""></path></svg>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="sec_text4 sec_text4--active">-->
<!--                                    <i>-->
<!--                                        <svg aria-hidden="true" data-prefix="fal" data-icon="eye" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-eye fa-w-18 fa-2x"><path fill="currentColor" d="M569.354 231.631C512.969 135.948 407.808 72 288 72 168.14 72 63.004 135.994 6.646 231.63a47.999 47.999 0 0 0 0 48.739C63.032 376.053 168.192 440 288 440c119.86 0 224.996-63.994 281.354-159.631a48.002 48.002 0 0 0 0-48.738zM416 228c0 68.483-57.308 124-128 124s-128-55.517-128-124 57.308-124 128-124 128 55.517 128 124zm125.784 36.123C489.837 352.277 393.865 408 288 408c-106.291 0-202.061-56.105-253.784-143.876a16.006 16.006 0 0 1 0-16.247c29.072-49.333 73.341-90.435 127.66-115.887C140.845 158.191 128 191.568 128 228c0 85.818 71.221 156 160 156 88.77 0 160-70.178 160-156 0-36.411-12.833-69.794-33.875-96.01 53.76 25.189 98.274 66.021 127.66 115.887a16.006 16.006 0 0 1-.001 16.246zM224 224c0-10.897 2.727-21.156 7.53-30.137v.02c0 14.554 11.799 26.353 26.353 26.353 14.554 0 26.353-11.799 26.353-26.353s-11.799-26.353-26.353-26.353h-.02c8.981-4.803 19.24-7.53 30.137-7.53 35.346 0 64 28.654 64 64s-28.654 64-64 64-64-28.654-64-64z" class=""></path></svg>-->
<!--                                    </i>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <a href="" class="sec_text__link">-->
<!--                                <i><svg aria-hidden="true" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-2x"><path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg></i>-->
<!--                                в корзину</a>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="m__services">
            <div class="container">
                <div class="m_services__wrap">
                    <!--                    <ul class="m__mini_nav">-->
                    <!--                        <li>-->
                    <!--                            <a href="">Главная </a>-->
                    <!--                        </li>-->
                    <!--                        <li>Услуги</li>-->
                    <!--                    </ul>-->
                    <div class="m_services__content">
                        <span class="top_main__title top_main__title--modific">ОСНОВНЫЕ УСЛУГИ</span>
                        <ul class="m_services__list">
                            <?php
                            $my_posts = get_posts( array(
                                'numberposts' => 5,
                                'category'    => 0,
                                'orderby'     => 'date',
                                'order'       => 'DESC',
                                'include'     => array(),
                                'exclude'     => array(),
                                'meta_key'    => '',
                                'meta_value'  =>'',
                                'post_type'   => 'solutions',
                                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                            ) );

                            global $post;

                            foreach( $my_posts as $post ){
                                ?>


                                <li>
                                    <img src="<?php  echo get_field('about_page_img'); ?>" alt="img">
                                    <div class="m_serv_list__info">
                                        <div class="m_serv_list__info--top">
                                            <span><?php  echo get_field('about_page_title'); ?></span>
                                            <p><?php  echo get_field('about_page_text'); ?>
                                            </p>
                                        </div>

                                    </div>
                                </li>

                                <?php
                                setup_postdata( $post );

                                // формат вывода the_title() ...
                            }

                            wp_reset_postdata(); // сброс

                            ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_our__advantages">
            <div class="container">
                <span class="title"><?php echo get_field('advantage_title') ?></span>
                <ul>
                     <?php $advantagebl=get_field('advantagebl') ?>
                 <?php foreach ($advantagebl as $advantagebl_k => $advantagebl_v){
                     ?>
                    <li>
                        <img src="<?php echo $advantagebl_v['img'];?>" alt="">
                        <span><?php echo $advantagebl_v['top'];?></span>
                        <p><?php echo $advantagebl_v['text'];?></p>
                    </li>
                    <?php } ?>

                </ul>

            </div>
        </div>

         <?php endwhile; ?>
    </main>
<?php get_footer(); ?>
