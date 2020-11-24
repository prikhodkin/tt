<?php

namespace App\Controllers;

use App\Classes\CustomWalker;
use Sober\Controller\Controller;
use function App\template;

class App extends Controller
{
    public function siteName()
    {
        return get_bloginfo('name');
    }

    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Search Results for %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }


    public static function mainMenu()
    {
        $args = array(
            'theme_location' => 'main_navigation',
            'container'      => false,
            'items_wrap' => ' <ul class="menu__list" data-target="menu.list">%3$s</ul>',
            'walker' => new CustomWalker()
        );
        return wp_nav_menu($args);
    }

    public static function footerMenu()
    {
        $menu_list = '';
        if ($menu_items = wp_get_nav_menu_items('Меню в футере')) { // "Меню для шапки" - это название моего меню. Вы можете также использовать ID или ярлык
            foreach ((array)$menu_items as $key => $menu_item) {
                $title = $menu_item->title; // заголовок элемента меню (анкор ссылки)
                $url = $menu_item->url; // URL ссылки
                $menu_list .= template('partials.footer-item', compact('title', 'url'));
            }
        }
        return $menu_list;
    }

    public static function printRepeatorField($field_name, $template, $option = '')
    {
        $rows = get_field($field_name, $option);
        $result = '';

        foreach ($rows as $key => $row) {
            $result .= template($template, compact('key', 'row'));
        }

        return $result;
    }
}

