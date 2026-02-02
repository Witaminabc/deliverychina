<?php

/***
 * Disables Gutenberg (the new block editor in WordPress).
 *
 * @version 2.0
 */

did_action('plugins_loaded')
    ? Kama_Disable_Gutenberg::init()
    : add_action('plugins_loaded', [Kama_Disable_Gutenberg::class, 'init']);

final class Kama_Disable_Gutenberg
{

    public static function init()
    {
        add_filter('use_block_editor_for_post_type', '__return_false', 100);

        // disable <style id='global-styles-inline-css'>body{--wp--preset--color--black: #000000; ...
        // see wp_enqueue_global_styles()
        remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
        remove_action('wp_footer', 'wp_enqueue_global_styles', 1);

        remove_theme_support('core-block-patterns'); // WP 5.5

        // disable basic css styles for blocks
        // IMPORTANT! when widgets on blocks or something else will be released, this line will need to be commented out.
        remove_action('wp_enqueue_scripts', 'wp_common_block_scripts_and_styles');

        // don't do noneeded operations
        remove_filter('the_content', 'do_blocks', 9);
        remove_filter('widget_block_content', 'do_blocks', 9);

        add_action('admin_init', [__CLASS__, 'on_admin_init']);

        self::remove_gutenberg_hooks();
    }

    public static function on_admin_init()
    {
        // Move the Privacy Policy help notice back under the title field.
        remove_action('admin_notices', [WP_Privacy_Policy_Content::class, 'notice']);
        add_action('edit_form_after_title', [WP_Privacy_Policy_Content::class, 'notice']);
    }

    /**
     * Copy from Classic Editor plugin v1.6.3.
     * @see https://plugins.svn.wordpress.org/classic-editor/trunk/classic-editor.php
     */
    private static function remove_gutenberg_hooks($remove = 'all')
    {
        remove_action('admin_menu', 'gutenberg_menu');
        remove_action('admin_init', 'gutenberg_redirect_demo');

        if ($remove !== 'all') {
            return;
        }

        // Gutenberg 5.3+
        remove_action('wp_enqueue_scripts', 'gutenberg_register_scripts_and_styles');
        remove_action('admin_enqueue_scripts', 'gutenberg_register_scripts_and_styles');
        remove_action('admin_notices', 'gutenberg_wordpress_version_notice');
        remove_action('rest_api_init', 'gutenberg_register_rest_widget_updater_routes');
        remove_action('admin_print_styles', 'gutenberg_block_editor_admin_print_styles');
        remove_action('admin_print_scripts', 'gutenberg_block_editor_admin_print_scripts');
        remove_action('admin_print_footer_scripts', 'gutenberg_block_editor_admin_print_footer_scripts');
        remove_action('admin_footer', 'gutenberg_block_editor_admin_footer');
        remove_action('admin_enqueue_scripts', 'gutenberg_widgets_init');
        remove_action('admin_notices', 'gutenberg_build_files_notice');

        remove_filter('load_script_translation_file', 'gutenberg_override_translation_file');
        remove_filter('block_editor_settings', 'gutenberg_extend_block_editor_styles');
        remove_filter('default_content', 'gutenberg_default_demo_content');
        remove_filter('default_title', 'gutenberg_default_demo_title');
        remove_filter('block_editor_settings', 'gutenberg_legacy_widget_settings');
        remove_filter('rest_request_after_callbacks', 'gutenberg_filter_oembed_result');

        // Previously used, compat for older Gutenberg versions.
        remove_filter('wp_refresh_nonces', 'gutenberg_add_rest_nonce_to_heartbeat_response_headers');
        remove_filter('get_edit_post_link', 'gutenberg_revisions_link_to_editor');
        remove_filter('wp_prepare_revision_for_js', 'gutenberg_revisions_restore');

        remove_action('rest_api_init', 'gutenberg_register_rest_routes');
        remove_action('rest_api_init', 'gutenberg_add_taxonomy_visibility_field');
        remove_filter('registered_post_type', 'gutenberg_register_post_prepare_functions');

        remove_action('do_meta_boxes', 'gutenberg_meta_box_save');
        remove_action('submitpost_box', 'gutenberg_intercept_meta_box_render');
        remove_action('submitpage_box', 'gutenberg_intercept_meta_box_render');
        remove_action('edit_page_form', 'gutenberg_intercept_meta_box_render');
        remove_action('edit_form_advanced', 'gutenberg_intercept_meta_box_render');
        remove_filter('redirect_post_location', 'gutenberg_meta_box_save_redirect');
        remove_filter('filter_gutenberg_meta_boxes', 'gutenberg_filter_meta_boxes');

        remove_filter('body_class', 'gutenberg_add_responsive_body_class');
        remove_filter('admin_url', 'gutenberg_modify_add_new_button_url'); // old
        remove_action('admin_enqueue_scripts', 'gutenberg_check_if_classic_needs_warning_about_blocks');
        remove_filter('register_post_type_args', 'gutenberg_filter_post_type_labels');

        // phpcs:disable Squiz.PHP.CommentedOutCode.Found
        // Keep
        // remove_filter( 'wp_kses_allowed_html', 'gutenberg_kses_allowedtags', 10, 2 ); // not needed in 5.0
        // remove_filter( 'bulk_actions-edit-wp_block', 'gutenberg_block_bulk_actions' );
        // remove_filter( 'wp_insert_post_data', 'gutenberg_remove_wpcom_markdown_support' );
        // remove_filter( 'the_content', 'do_blocks', 9 );
        // remove_action( 'init', 'gutenberg_register_post_types' );

        // Continue to manage wpautop for posts that were edited in Gutenberg.
        // remove_filter( 'wp_editor_settings', 'gutenberg_disable_editor_settings_wpautop' );
        // remove_filter( 'the_content', 'gutenberg_wpautop', 8 );
        // phpcs:enable Squiz.PHP.CommentedOutCode.Found

    }

}


add_action( 'init', 'register_post_types' );

function register_post_types(){

    register_post_type( 'news', [
        'label'  => null,
        'labels' => [
            'name'               => 'Новости', // основное название для типа записи
            'singular_name'      => 'Новость', // название для одной записи этого типа
            'add_new'            => 'Добавить Новость', // для добавления новой записи
            'add_new_item'       => 'Добавление Новости', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Новости', // для редактирования типа записи
            'new_item'           => 'Новая Новость', // текст новой записи
            'view_item'          => 'Смотреть Новость', // для просмотра записи этого типа.
            'search_items'       => 'Искать Новость', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Новости', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );
    register_post_type( 'solutions', [
        'label'  => null,
        'labels' => [
            'name'               => 'Отраслевое решение', // основное название для типа записи
            'singular_name'      => 'Отраслевое решение', // название для одной записи этого типа
            'add_new'            => 'Добавить Отраслевое решение', // для добавления новой записи
            'add_new_item'       => 'Добавление Отраслевого решения', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование Отраслевого решения', // для редактирования типа записи
            'new_item'           => 'Новая Отраслевое решение', // текст новой записи
            'view_item'          => 'Смотреть Отраслевое решение', // для просмотра записи этого типа.
            'search_items'       => 'Искать Отраслевое решение', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Отраслевые решения', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}
add_filter('template_include', 'my_template_news');
function my_template_news( $template ) {
    # шаблон для архива произвольного типа "news"
    global $posts;
    if( is_post_type_archive('news') ){
        return get_stylesheet_directory() . '/template-parts/news/news-arhive-tpl.php';
    }
    # шаблон для страниц произвольного типа "news"
    global $post;
    if(isset($post->post_type) && $post->post_type == 'news' ){
        return get_stylesheet_directory() . '/template-parts/news/news-tpl.php';

//        return get_template_directory_uri()() . '/template-parts/news/news-tpl.php';
    }
    return $template;
}
add_filter('template_include', 'my_template_solutions');
function my_template_solutions( $template ) {
    # шаблон для архива произвольного типа "news"
    global $posts;
    if( is_post_type_archive('solutions') ){
        return get_stylesheet_directory() . '/template-parts/solutions/solutions-arhive-tpl.php';
    }
    # шаблон для страниц произвольного типа "news"
    global $post;
    if(isset($post->post_type) && $post->post_type == 'solutions' ){
        return get_stylesheet_directory() . '/template-parts/solutions/solutions-tpl.php';

//        return get_template_directory_uri()() . '/template-parts/news/news-tpl.php';
    }
    return $template;
}



add_action( 'after_setup_theme', function(){
    register_nav_menus( [
        'header_menu' => 'Меню в шапке',
        'footer_menu' => 'Меню в подвале'
    ] );
} );