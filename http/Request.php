<?php

namespace http;

class Request
{
    private array $post;
    private array $get;
    private array $server;
    private array $cookie;
    private array $files;
    private string $method;
    private string $uri;
    private array $routeParams = [];

    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
        $this->server = $_SERVER;
        $this->cookie = $_COOKIE;
        $this->files = $_FILES;
        $this->uri = $_SERVER['REQUEST_URI'] ?? '/';
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function header(string $key, string $default = null): string
    {
        return $_SERVER["HTTP_" . strtoupper($key)] ?? $default;
    }

    /**
     * Получить значение из $_GET
     * @param string $key
     * @return string|null
     */
    public function get(string $key): ?string
    {
        return $this->get[$key] ?? null;
    }

    /**
     * Получить значение из $_POST
     * @param string $key
     * @return string|null
     */
    public function post(string $key): ?string
    {
        return $this->post[$key] ?? null;
    }

    public function file(string $key)
    {
        return $this->files[$key];
    }

    public function method(): string
    {
        return $this->method;
    }

    public function server(string $key = null): string|array
    {
        if ($key === null) {
            return $this->server;
        }
        return $this->server[$key] ?? '';
    }

    /**
     * Установить параметры маршрута
     * @param array $params
     */
    public function setRouteParams(array $params): void
    {
        $this->routeParams = $params;
    }

    /**
     * Получить значение параметра из URL
     * @param string $name Имя параметра
     * @return string|null Значение параметра или null, если параметр не найден
     */
    public function param(string $name): ?string
    {
        return $this->routeParams[$name] ?? null;
    }

    /**
     * Получить все параметры маршрута
     * @return array Массив параметров
     */
    public function params(): array
    {
        return $this->routeParams;
    }

    public function cookie(string $key, $default = null)
    {
       return $this->cookie[$key] ?? $default;
    }

    public function uri(): string
    {
        return $this->uri;
    }

    /**
     * Получить все значения из $_GET
     * @return array
     */
    public function getAll(): array
    {
        return $_GET;
    }

    /**
     * Получить все значения из $_POST
     * @return array
     */
    public function postAll(): array
    {
        return $_POST;
    }
}