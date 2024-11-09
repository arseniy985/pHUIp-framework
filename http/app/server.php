<?php

use http\Request;

/**
 * возвращает строку пути запроса к файлу или страницы без query string
 */
function getUriPath(string $str): string
{
	return explode("?", $str)[0];
}

/**
 * @param callable $func та функция замер которой производится
 * @return mixed значение которое возвращает переданная коллбек функция
 * Замеряет сколько выполняется код в microtime
 */
function debugTime(callable $func): mixed
{
    $startTime = microtime(true);
    $res = $func();
    $endTime = microtime(true);
    return $endTime-$startTime;
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
    require("./http/app/routerFunction.php");
    $_SERVER["ROUTS"] = [];

    include_once("./router/router.php");

    if (isset($_SERVER["ROUTS"][URIPath])) {
        if (is_array($_SERVER["ROUTS"][URIPath])) {
            list($className, $method) = $_SERVER["ROUTS"][URIPath];
            call_user_func(array(new $className, $method));
        } else {
            $_SERVER["ROUTS"][URIPath]();
        }
    } else {
        response404();
    }
}
