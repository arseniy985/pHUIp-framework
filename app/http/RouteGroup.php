<?php

namespace app\http;

class RouteGroup
{
    private string $prefix;
    private string $middleware = '';
    private array $routes = [];

    public function __construct(string $prefix = '')
    {
        $this->prefix = $prefix;
    }

    /**
     * Устанавливает middleware для всей группы маршрутов
     * @param string $middleware Класс middleware с методом handle
     * @return self
     */
    public function middleware(string $middleware): self
    {
        $this->middleware = $middleware;
        return $this;
    }

    /**
     * Создает вложенную группу маршрутов
     * @param string $prefix Префикс для вложенной группы
     * @param callable $callback Функция для определения маршрутов
     * @return self
     */
    public function group(string $prefix, callable $callback): self
    {
        $group = new self($this->prefix . $prefix);
        if ($this->middleware) {
            $group->middleware($this->middleware);
        }
        $callback($group);
        $this->routes = array_merge($this->routes, $group->routes);
        return $this;
    }

    /**
     * Добавляет маршрут в группу
     * @param string $method HTTP метод
     * @param string $uri URI маршрута
     * @param callable|array $action Обработчик маршрута
     * @return Route
     */
    public function addRoute(string $method, string $uri, callable|array $action): Route
    {
        $route = Route::addRoute($method, $this->prefix . $uri, $action);
        if ($this->middleware) {
            $route->middleware($this->middleware);
        }
        $this->routes[] = $route;
        return $route;
    }

    public function get(string $uri, callable|array $action): Route
    {
        return $this->addRoute('GET', $uri, $action);
    }

    public function post(string $uri, callable|array $action): Route
    {
        return $this->addRoute('POST', $uri, $action);
    }

    public function put(string $uri, callable|array $action): Route
    {
        return $this->addRoute('PUT', $uri, $action);
    }

    public function patch(string $uri, callable|array $action): Route
    {
        return $this->addRoute('PATCH', $uri, $action);
    }

    public function delete(string $uri, callable|array $action): Route
    {
        return $this->addRoute('DELETE', $uri, $action);
    }
}
