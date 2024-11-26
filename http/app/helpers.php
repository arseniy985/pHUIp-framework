<?php
declare(strict_types=1);

use http\Request;

/**
 * Массивы с папками
 * @var array{css: array, js: array}
 */

/**
 * Путь к [name]
 */
define("PAGE_WRAPPER", explode("/", URIPath));

function responseContentType(string $filepath): void
{
	header("Content-type: " . getFileContentType($filepath));
}

/**
 * Возвращает код ответа 404
 */
function response404(): void
{
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 Not Found</h1>";
    echo "The page that you are looking for might have been removed, had its name changed, or is temporarily unavailable.";
    exit();
}

function response500(string $err = ""): void
{
    http_response_code(500);
    echo "<h1>$err</h1>";
    exit();
}

function responseJson(mixed $data, int $status): void
{
    header("Content-type: " . MIME_TYPES['js']);
    http_response_code($status);
    echo json_encode($data);
    exit();
}

function responseHtml(string $text, int $status) {
    header("Content-type " . MIME_TYPES['html']);
    http_response_code($status);
    echo $text;
    exit();
}

/**
 * Функция которая проверяет содержит ли запрос обращение к файлу
 * @param string $filename - путь к файлу и это путь должен начинаться с `/`ё
 */
function thisIsSourceFile(string $filename): bool
{
	if (strpos($filename, ".") == 0) {
		return false;
	} else {
		if (isset(PAGE_WRAPPER[2])) {
			return true;
		} else {
			$type = explode(".", $filename)[1]; // Тип файла
			return (bool)MIME_TYPES[$type];
		}
	}
}
/**
 * Возвращает `Content-type` для ответа пользователю
 * @param string $filename - путь к файлу и это путь должен начинаться с `/`
 * @return string - MIME_TYPE | `text/plain`
 */
function getFileContentType(string $filename): string
{

	$type = explode(".", $filename)[1]; // тип файла из запроса
	return MIME_TYPES[$type] ? MIME_TYPES[$type] : "text/plain";
}

function request(): Request {
    return new Request();
}