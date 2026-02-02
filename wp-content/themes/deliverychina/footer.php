<footer>
    <div class="container footer_cont1">
        <div class="foot_cont foot_cont1">
            <div class="logo_foot">
                <a href="">
                    <img src="<?php echo get_field('opt_logo','options') ?>" alt="">
                </a>
            </div>
            <p><?php echo get_field('opt_footer_title','options') ?></p>
            <ul>
                <li class="red">Наша почта</li>
                <li><?php echo get_field('opt_mail','options') ?></li>
            </ul>
        </div>
        <div class="foot_cont">
<!--            <ul>-->
<!--                <li class="red">Карта Сайта</li>-->
<!--                <li>-->
<!--                    <a href="">Главная</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">О компании</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">Дилерам</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">Доставка</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">Услуги</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">Цены</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">Контакты</a>-->
<!--                </li>-->
<!--                <li>-->
<!--                    <a href="">Новости</a>-->
<!--                </li>-->
<!--            </ul>-->
            <?php
            wp_nav_menu( [
                'theme_location'  => 'footer_menu',
                'menu'            => 'footer_menu',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => '',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s"><li class="red">Карта Сайта</li>%3$s</ul>',
                'depth'           => 0,
                'walker'          => '',
            ] );
            ?>
        </div>
        <div class="foot_cont foot_cont3">
            <?php echo get_field('opt_phone','options') ?>

        </div>
        <div class="foot_cont">
            <?php echo get_field('opt_social','options') ?>
        </div>
    </div>
    <div class="container footer_cont2">
        <p><?php echo get_field('opt_adress1','options') ?>
        </p><p><?php echo get_field('opt_adress2','options') ?></p>
        <span><?php echo get_field('opt_adress3','options') ?>
				</span>
    </div>
</footer>
</div>

<div class="preloader">
    <div class="group">
        <div class="bigSqr">
            <div class="square first"></div>
            <div class="square second"></div>
            <div class="square third"></div>
            <div class="square fourth"></div>
        </div>
        <p class="text">Загрузка</p>
    </div>
</div>


<script src="<?php echo get_template_directory_uri();?>/js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.selectric.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/lightgallery.min.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/jquery.mask.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/slick.js"></script>
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
<?php wp_footer(); ?>

</body>
</html>