<?php

namespace html;

class PageGenerator
{
    private static $templateCache = [];
    private static $regexPattern = '/\{\{\s*(?:\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff\\\\]*)\((.*?)\))\s*\}\}/';

    /**
    * Создает страницу
    * @param string $view имя контейнера `[name]`
    * @param array $params переменные, которые передаются на страницу
    * @include "./router/Page.php"
    */
    static public function render(string $view, array $params = [])
    {
        $css = "./resources/pages/[$view]/css/";
        $javascript = "./resources/pages/[$view]/js/";
        $content = "./resources/pages/[$view]/page.php";
        if (is_dir($css)) {
            $css .= "page.css";
        } else {
            $css = "./resources/pages/page.css";
        }
        if (is_dir($javascript)) {
            $javascript .= "page.js";
        } else {
            $javascript = "./resources/js/page.js";
        }
        $globalCss = "./resources/pages/global.css";

        // Кэширование шаблона
        if (!isset(self::$templateCache[$content])) {
            self::$templateCache[$content] = file_get_contents($content);
        }
        $html = self::$templateCache[$content];
        
        extract($params);
        
        // Единый проход по шаблону для обработки и переменных, и функций
        $html = preg_replace_callback(self::$regexPattern, 
            function($matches) use ($params) {
                // Если это переменная ($matches[1])
                if (!empty($matches[1])) {
                    return htmlspecialchars($params[$matches[1]] ?? '', ENT_QUOTES, 'UTF-8');
                }
                
                // Если это функция ($matches[2] и $matches[3])
                $function = $matches[2];
                if (!function_exists($function)) {
                    return '';
                }

                $args = !empty($matches[3]) ? 
                    array_map(function($arg) use ($params) {
                        $arg = trim($arg);
                        if ($arg[0] === '$') {
                            return $params[substr($arg, 1)] ?? '';
                        }
                        if (is_numeric($arg)) {
                            return $arg + 0;
                        }
                        if ($arg[0] === '"' || $arg[0] === "'") {
                            return substr($arg, 1, -1);
                        }
                        return $arg;
                    }, explode(',', $matches[3])) 
                    : [];

                try {
                    $result = call_user_func_array($function, $args);
                    return is_scalar($result) ? htmlspecialchars((string)$result, ENT_QUOTES, 'UTF-8') : '';
                } catch (\Throwable $e) {
                    return '';
                }
            }, 
            $html
        );

        echo $html;
    }
}