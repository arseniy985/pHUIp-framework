<?php

namespace app\view;

class PageGenerator
{
    private static array $templateCache = [];
    private static array $pathCache = [];
    private static array $functionCache = [];
    private const string REGEX_PATTERN = '/\{\{\s*(?:\$([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*)|([a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff\\\\]*)\((.*?)\))\s*\}\}/';

    /**
    * Создает страницу
    * @param string $view имя контейнера `[name]`
    * @param array $params переменные, которые передаются на страницу
    * @include "./router/Page.php"
    */
    static public function render(string $view, array $params = []): void
    {
        // Кэшируем пути к файлам
        if (!isset(self::$pathCache[$view])) {
            $css = "./resources/pages/[$view]/css/";
            $javascript = "./resources/pages/[$view]/js/";
            $content = "./resources/pages/[$view]/page.php";
            
            self::$pathCache[$view] = [
                'css' => is_dir($css) ? $css . "page.css" : "./resources/pages/page.css",
                'js' => is_dir($javascript) ? $javascript . "page.js" : "./resources/js/page.js",
                'content' => $content,
                'globalCss' => "./resources/pages/global.css"
            ];
        }
        
        $paths = self::$pathCache[$view];
        
        // Кэширование шаблона
        if (!isset(self::$templateCache[$paths['content']])) {
            self::$templateCache[$paths['content']] = file_get_contents($paths['content']);
        }
        $html = self::$templateCache[$paths['content']];
        
        extract($params);

        $html = preg_replace_callback(
            self::REGEX_PATTERN, 
            function($matches) use ($params) {
                if (!empty($matches[1])) {
                    return htmlspecialchars($params[$matches[1]] ?? '', ENT_QUOTES, 'UTF-8');
                }
                
                $function = $matches[2];
                
                // Кэшируем проверку существования функции
                if (!isset(self::$functionCache[$function])) {
                    self::$functionCache[$function] = function_exists($function);
                }
                
                if (!self::$functionCache[$function]) {
                    return '';
                }

                $args = !empty($matches[3]) ? 
                    array_map(
                        static function($arg) use ($params) {
                            $arg = trim($arg);
                            $firstChar = $arg[0] ?? '';
                            
                            return match($firstChar) {
                                '$' => $params[substr($arg, 1)] ?? '',
                                '"', "'" => substr($arg, 1, -1),
                                default => is_numeric($arg) ? $arg + 0 : $arg
                            };
                        }, 
                        explode(',', $matches[3])
                    ) 
                    : [];

                try {
                    $result = $function(...$args);
                    return is_scalar($result) ? htmlspecialchars((string)$result, ENT_QUOTES, 'UTF-8') : '';
                } catch (\Throwable) {
                    return '';
                }
            }, 
            $html
        );

        echo $html;
    }
}