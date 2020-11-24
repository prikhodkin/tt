<?php

namespace App\Classes;

use Walker_Nav_Menu;

class CustomWalker extends Walker_Nav_Menu
{
    /**
     * @param object $element
     * @param array $children_elements
     * @param int $max_depth
     * @param int $depth
     * @param array $args
     * @param string $output
     */

    function display_element($element, &$children_elements, $max_depth, $depth = 0, $args, &$output)
    {
        $id_field = $this->db_fields['id'];
        if (is_object($args[0])) {
            $args[0]->has_children = ! empty($children_elements[$element->$id_field]);
        }
        return parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
    }

    function start_lvl(&$output, $depth)
    {
        $output .= '<ul class="menu__sub-list">';
    }

    function start_el(&$output, $item, $depth, $args)
    {
        global $wp_query;
        $indent = ( $depth ) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';
        $classes = ['menu__item'];

        if ($depth > 0) {
            $classes = ['menu__sub-item'];
        }

        if ($args->has_children) {
            $classes[] = 'menu__item--parent';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item));
        $class_names = ' class="'. esc_attr($class_names) . '"';
        $output .= $indent . '<li ' . $value . $class_names .'>';

        $attributes = ! empty($item->url) ? ' href="' . esc_attr($item->url) .'"' : '';

        $args->before = '<p>';
        $args->after = '<svg width="6" height="11" data-target="menu.trigger"><use xlink:href="' . get_template_directory_uri() . '/assets/img/sprites/sprite.svg#icon__arrow"></use></svg></p>';

        $item_output = ($args->has_children) ? $args->before : '';
        $item_output .= '<a'. $attributes .'>';
        $item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID);
        $item_output .= '</a>';
        $item_output .=  ($args->has_children) ? $args->after : '';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}
