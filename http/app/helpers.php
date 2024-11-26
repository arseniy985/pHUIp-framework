<?php
declare(strict_types=1);

use http\Request;

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

function request(): Request {
    return new Request();
}

/**
 * @param callable $func та функция замер которой производится
 * @return mixed значение которое возвращает переданная коллбек функция
 * Замеряет сколько выполняется код в microtime
 */
function debugTime(callable $func): float
{
    $startTime = microtime(true);
    $res = $func();
    $endTime = microtime(true);
    return $endTime-$startTime;
}

function config(string $key)
{
    return $_ENV[$key];
}