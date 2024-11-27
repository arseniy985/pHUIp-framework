<?php

use http\Request;

/**
 * возвращает строку пути запроса к файлу или страницы без query string
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

    // Получаем объект Request из контейнера
    global $injector;
    $request = $injector->make(Request::class);

    // Проверяем все маршруты на соответствие
    foreach ($_SERVER["ROUTS"] as $pattern => $handler) {
        // Преобразуем шаблон маршрута в регулярное выражение
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

            // Выполняем обработчик маршрута
            if (is_array($handler)) {
                list($className, $method) = $handler;
                $instance = $injector->make($className);
                call_user_func(array($instance, $method), $request);
            } else {
                $handler($request);
            }
            return;
        }
    }

    // Если не найден подходящий маршрут
    response404();
}

?>
