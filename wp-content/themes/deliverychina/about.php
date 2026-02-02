<?php
/**

 * Template Name: About

 */
get_header(); ?>
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
<?php

get_footer(); ?>