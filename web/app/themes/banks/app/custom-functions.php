<?php
/*
 * Удаляет подключение стилей и скриптов от WP | Del WP Styles
 *
 */

use function App\get_manifest_link;

function disable_wp_emojis_in_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array( 'wpemoji' ));
    } else {
        return array();
    }
}

function wpassist_remove_block_library_css()
{
    wp_dequeue_style('wp-block-library');
}

function remove_recent_comments_css()
{
    global $wp_widget_factory;
    remove_action('wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
}

remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_resource_hints', 2);
remove_filter('the_content_feed', 'wp_staticize_emoji');
remove_filter('comment_text_rss', 'wp_staticize_emoji');
remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
add_filter('tiny_mce_plugins', 'disable_wp_emojis_in_tinymce');
add_action('widgets_init', 'remove_recent_comments_css');
add_action('wp_enqueue_scripts', 'wpassist_remove_block_library_css');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head');

/*
 * END Del WP Styles
 */

add_filter('upload_mimes', 'svg_upload_allow');

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow($mimes)
{
    $mimes['svg']  = 'image/svg+xml';

    return $mimes;
}

add_filter('wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5);

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type($data, $file, $filename, $mimes, $real_mime = '')
{

    // WP 5.1 +
    if (version_compare($GLOBALS['wp_version'], '5.1.0', '>=')) {
        $dosvg = in_array($real_mime, [ 'image/svg', 'image/svg+xml' ]);
    } else {
        $dosvg = ( '.svg' === strtolower(substr($filename, -4)) );
    }

    // mime тип был обнулен, поправим его
    // а также проверим право пользователя
    if ($dosvg) {
        // разрешим
        if (current_user_can('manage_options')) {
            $data['ext']  = 'svg';
            $data['type'] = 'image/svg+xml';
        }
        // запретим
        else {
            $data['ext'] = $type_and_ext['type'] = false;
        }
    }

    return $data;
}

add_filter('wp_prepare_attachment_for_js', 'show_svg_in_media_library');

# Формирует данные для отображения SVG как изображения в медиабиблиотеке.
function show_svg_in_media_library($response)
{
    if ($response['mime'] === 'image/svg+xml') {
        // С выводом названия файла
        $response['image'] = [
            'src' => $response['url'],
        ];
    }

    return $response;
}

/**
 * Удалить пустые элементы из массива
 * @param array $array
 * @param array $symbols удаляемые значения
 * @return array
 */
function array_delete(array $array, array $symbols = array(''))
{
    return array_diff($array, $symbols);
}

function get_current_slug()
{
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $arr = array_delete(explode('/', $url));
    $arrReverse = array_reverse($arr);
    $slug = $arrReverse[0];
    return $slug;
}


function add_individual_style()
{
    $slug = get_current_slug();

    if (!is_front_page()) {
        wp_enqueue_style(
            $slug,
            get_template_directory_uri() . '/assets/dist/' . get_manifest_link("css/". $slug . ".min.css", get_template_directory_uri() . '/assets/dist/rev-manifest.json'),
            null,
            null
        );
    }
}


