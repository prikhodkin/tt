<?php

namespace App;

use Roots\Sage\Container;

/**
 * Get the sage container.
 *
 * @param string $abstract
 * @param array  $parameters
 * @param Container $container
 * @return Container|mixed
 */
function sage($abstract = null, $parameters = [], Container $container = null)
{
    $container = $container ?: Container::getInstance();
    if (!$abstract) {
        return $container;
    }
    return $container->bound($abstract)
        ? $container->makeWith($abstract, $parameters)
        : $container->makeWith("sage.{$abstract}", $parameters);
}

/**
 * Get / set the specified configuration value.
 *
 * If an array is passed as the key, we will assume you want to set an array of values.
 *
 * @param array|string $key
 * @param mixed $default
 * @return mixed|\Roots\Sage\Config
 * @copyright Taylor Otwell
 * @link https://github.com/laravel/framework/blob/c0970285/src/Illuminate/Foundation/helpers.php#L254-L265
 */
function config($key = null, $default = null)
{
    if (is_null($key)) {
        return sage('config');
    }
    if (is_array($key)) {
        return sage('config')->set($key);
    }
    return sage('config')->get($key, $default);
}

/**
 * @param string $file
 * @param array $data
 * @return string
 */
function template($file, $data = [])
{
    return sage('blade')->render($file, $data);
}

/**
 * Retrieve path to a compiled blade view
 * @param $file
 * @param array $data
 * @return string
 */
function template_path($file, $data = [])
{
    return sage('blade')->compiledPath($file, $data);
}

/**
 * @param $asset
 * @return string
 */
function asset_path($asset)
{
    return sage('assets')->getUri($asset);
}

/**
 * @param string|string[] $templates Possible template files
 * @return array
 */
function filter_templates($templates)
{
    $paths = apply_filters('sage/filter_templates/paths', [
        'views',
        'resources/views'
    ]);
    $paths_pattern = "#^(" . implode('|', $paths) . ")/#";

    return collect($templates)
        ->map(function ($template) use ($paths_pattern) {
            /** Remove .blade.php/.blade/.php from template names */
            $template = preg_replace('#\.(blade\.?)?(php)?$#', '', ltrim($template));

            /** Remove partial $paths from the beginning of template names */
            if (strpos($template, '/')) {
                $template = preg_replace($paths_pattern, '', $template);
            }

            return $template;
        })
        ->flatMap(function ($template) use ($paths) {
            return collect($paths)
                ->flatMap(function ($path) use ($template) {
                    return [
                        "{$path}/{$template}.blade.php",
                        "{$path}/{$template}.php",
                    ];
                })
                ->concat([
                    "{$template}.blade.php",
                    "{$template}.php",
                ]);
        })
        ->filter()
        ->unique()
        ->all();
}

/**
 * @param string|string[] $templates Relative path to possible template files
 * @return string Location of the template
 */
function locate_template($templates)
{
    return \locate_template(filter_templates($templates));
}

/**
 * Determine whether to show the sidebar
 * @return bool
 */
function display_sidebar()
{
    static $display;
    isset($display) || $display = apply_filters('sage/display_sidebar', false);
    return $display;
}


/**
 * Преобразовывает внешний json в массив
 * @return array
 */

function convert_out_json($link)
{
    $json = file_get_contents("$link");
    $result = json_decode($json, true);

    return $result;
}

/**
 * Получаен данные из манифеста
 * @return string
 */

function get_manifest_link($target, $link)
{
    $arr = \App\convert_out_json($link);
    $result = $arr[$target];

    return $result;
}

/**
 * Функция фильтрует строку и устанавливает формат вывода телефонного номера
 * @param string $phone Строка с телефоном
 * @return string
 */

function set_format_phone($phone)
{
    $phone = preg_replace("/[^0-9]/", "", $phone);

    if (strlen($phone) == 7) {
        $phone = preg_replace("/([0-9]{3})([0-9]{2})([0-9]{2})/", "$1-$2-$3", $phone);
    } elseif (strlen($phone) == 10) {
        $phone = preg_replace("/([0-9]{3})([0-9]{3})([0-9]{4})/", "($1)$2-$3", $phone);
    } elseif (strlen($phone) == 11) {
        $phone = preg_replace("/([0-9])([0-9]{3})([0-9]{3})([0-9]{4})/", "$1($2)$3-$4", $phone);
        $first = substr($phone, 0, 1);
        if (in_array($first, array(7, 8))) {
            $phone = '+7'. substr($phone, 1);
        }
    }

    return $phone;
}
