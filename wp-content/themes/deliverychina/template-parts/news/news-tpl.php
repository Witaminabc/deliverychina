<?php

get_header(); ?>
<?php
while ( have_posts() ) : the_post(); ?>
    <main>
        <div class="m__about_us">
            <div class="container--mini">
                <div class="m_about_us__wrap">
                    <span class="top_main__title"><?php echo get_field('about_page_title') ?></span>
                    <img src="<?php echo get_field('about_page_img') ?>" alt="img">
                    <div class="m_about_us__info">
                        <?php echo get_field('about_page_text') ?></div>
                </div>
            </div>
        </div>
    </main>
<!--    --><?//
//    $args = array(
//        'post_type'	=> 'news',
//        'order'		=> 'DESC',
//        'orderby' => 'date'
//    );
//    ?>
<!--    --><?php
//    $posts = query_posts( $args );?>
<!--    --><?//if ( $posts ) : ?>
<!--        --><?php
//        foreach( $posts as $post ) {
//            setup_postdata( $post );
//                ?>
<!--             <main>-->
<!--        <div class="m__about_us">-->
<!--            <div class="container--mini">-->
<!--                <div class="m_about_us__wrap">-->
<!--                    <span class="top_main__title">--><?php //echo get_field('about_page_title') ?><!--</span>-->
<!--                    <img src="--><?php //echo get_field('about_page_img') ?><!--" alt="img">-->
<!--                    <div class="m_about_us__info">-->
<!--                        --><?php //echo get_field('about_page_text') ?><!--</div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </main>-->
<?php
//        }
//        wp_reset_postdata();
//        ?>
<!--    --><?php
//    else :
//        echo 'none';
//    endif;
//    ?>
<?php endwhile; ?>

<?php

get_footer(); ?>