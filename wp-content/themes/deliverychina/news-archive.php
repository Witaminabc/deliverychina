<?php
/**

 * Template Name: News archive

 */
get_header(); ?>
    <main>

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
                        <span class="top_main__title top_main__title--modific">Новости</span>

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
                            'post_type'   => 'news',
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
                                            <p><?php  echo get_field('about_page_text'); ?></p>
                                        </div>
                                        <a href="<?php  echo get_permalink($post->ID) ?>">Узнать подробнее</a>
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
    </main>

<?php

get_footer(); ?>