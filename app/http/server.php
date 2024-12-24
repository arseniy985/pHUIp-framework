<?php

use app\Container;
use app\http\Request;

/**
 * Возвращает строку пути запроса к файлу или страницы без query string
 */
function getUriPath(string $str): string
{
    return explode("?", $str)[0];
}

function startServer(): void
{
    /**
     * Путь к файлу без query string
     */
    define("URIPath", getUriPath($_SERVER['REQUEST_URI']));

    /**
     * Массив Content-types
     */
    define("MIME_TYPES", array(
        'txt' => 'text/plain',
        'htm' => 'text/html',
        'html' => 'text/html',
        'php' => 'text/html',
        'css' => 'text/css',
        'js' => 'application/javascript',
        'json' => 'application/json',
        'xml' => 'application/xml',
        'swf' => 'application/x-shockwave-flash',
        'flv' => 'video/x-flv',

        // images
        'png' => 'image/png',
        'jpe' => 'image/jpeg',
        'jpeg' => 'image/jpeg',
        'jpg' => 'image/jpeg',
        'gif' => 'image/gif',
        'bmp' => 'image/bmp',
        'ico' => 'image/vnd.microsoft.icon',
        'tiff' => 'image/tiff',
        'tif' => 'image/tiff',
        'svg' => 'image/svg+xml',
        'svgz' => 'image/svg+xml',
    ));

    $_SERVER["ROUTS"] = [];
    include_once("./router/router.php");

    $request = Container::make(Request::class);

    // Проверяем все маршруты на соответствие
    foreach ($_SERVER["ROUTS"] as $pattern => $handler) {
        $routePattern = preg_replace('/\{([^}]+)\}/', '(?P<$1>[^/]+)', $pattern);
        $routePattern = str_replace('/', '\/', $routePattern);
        $routePattern = '/^' . $routePattern . '$/';

        // Проверяем соответствие текущего URL шаблону
        if (preg_match($routePattern, URIPath, $matches)) {
            if (count($matches) > 1) {
                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                unset($params[0]);
                $request->setRouteParams($params);
            }

            if (is_array($handler)) {
                list($className, $method) = $handler;
                $instance = Container::make($className);

                // Получаем аргументы метода
                $reflectionMethod = new ReflectionMethod($instance, $method);
                $methodParams = $reflectionMethod->getParameters();

                // Создаем массив аргументов для вызова метода
                $arguments = [];
                foreach ($methodParams as $param) {
                    $paramClass = $param->getType();
                    if ($paramClass) {
                        $arguments[] = Container::make($paramClass->getName());
                    } elseif ($param->isDefaultValueAvailable()) {
                        $arguments[] = $param->getDefaultValue();
                    } else {
                        $arguments[] = null;
                    }
                }

                // Вызываем метод с аргументами
                call_user_func_array([$instance, $method], $arguments);
            } else {
                $handler($request);
            }
            return;
        }
    }

    // Если не найден подходящий маршрут
    response404();
}
