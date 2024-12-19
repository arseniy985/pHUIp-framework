<?php

namespace app\http;

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

    public function header(string $key, string $default = null): ?string
    {
        return $_SERVER["HTTP_" . str_replace('-', '_', ucwords($key, '-'))] ?? $default;
    }

    public function get(string $key, $default = null)
    {
        return $this->get[$key] ?? $default;
    }

    public function post(string $key, $default = null)
    {
        return $this->post[$key] ?? $default;
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
     * Устанавливает параметры маршрута
     * @param array $params
     */
    public function setRouteParams(array $params): void
    {
        $this->routeParams = $params;
    }

    /**
     * Получает значение параметра маршрута
     * @param string $key Имя параметра
     * @param mixed $default Значение по умолчанию
     * @return mixed
     */
    public function param(string $key, mixed $default = null): mixed
    {
        return $this->routeParams[$key] ?? $default;
    }

    /**
     * Возвращает все параметры маршрута
     * @return array
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
}