<?php

namespace http;

use ReflectionFunction;
use ReflectionMethod;

class Route
{
    private string $URI;
    private $func;
    private array $middleware = [];
    private static array $reflectionCache = [];
    private static array $instanceCache = [];

    /**
     * @param string $URI
     * @param mixed $func
     */
    private function __construct(string $URI, mixed $func)
    {
        $this->URI = $URI;
        $this->func = $func;
    }

    /**
     * Внутренний метод для создания маршрута с указанным методом
     * @param string $method HTTP метод (GET, POST, etc)
     * @param string $URI путь
     * @param callable|array $func обработчик
     * @return Route|null
     */
    public static function addRoute(string $method, string $URI, callable|array $func): ?Route
    {
        if ($_SERVER['REQUEST_METHOD'] !== $method) {
            return null;
        }
        $_SERVER['ROUTS'][$URI] = $func;
        return new Route($URI, $func);
    }

    /**
     * @param string $URI - путь
     * @param callable|array $func - если принимает массив, то первый элемент - неймспейс класса, второй - метод класса
     */
    public static function get(string $URI, callable|array $func): ?Route
    {
        return self::addRoute('GET', $URI, $func);
    }

    public static function post(string $URI, callable|array $func): ?Route
    {
        return self::addRoute('POST', $URI, $func);
    }

    public static function put(string $URI, callable|array $func): ?Route
    {
        return self::addRoute('PUT', $URI, $func);
    }

    public static function patch(string $URI, callable|array $func): ?Route
    {
        return self::addRoute('PATCH', $URI, $func);
    }

    public static function delete(string $URI, callable|array $func): ?Route
    {
        return self::addRoute('DELETE', $URI, $func);
    }

    /**
     * Создает группу маршрутов с общим префиксом
     * @param string $prefix Префикс для всех маршрутов в группе
     * @param callable $callback Функция, определяющая маршруты группы
     * @return RouteGroup
     */
    public static function group(string $prefix, callable $callback): RouteGroup
    {
        $group = new RouteGroup($prefix);
        $callback($group);
        return $group;
    }

    /**
     * Прослойка между контроллером и запросом
     * @param string $middleware Класс middleware с методом handle
     * @return Route
     */
    public function middleware(string $middleware): Route
    {
        $this->middleware[] = $middleware;
        
        $_SERVER['ROUTS'][$this->URI] = function (Request $request) {
            foreach ($this->middleware as $middleware) {
                global $injector;
                $instance = $injector->make($middleware);
                if (!$instance->handle($request)) {
                    return;
                }
            }
            if (is_array($this->func)) {
                list($className, $method) = $this->func;
                global $injector;
                $instance = $injector->make($className);
                call_user_func(array($instance, $method), $request);
            } else {
                ($this->func)($request);
            }
        };
        
        return $this;
    }
}

class RouteGroup
{
    private string $prefix;

    public function __construct(string $prefix)
    {
        $this->prefix = $prefix;
    }

    public function get(string $URI, callable|array $func): ?Route
    {
        return Route::get($this->prefix . $URI, $func);
    }

    public function post(string $URI, callable|array $func): ?Route
    {
        return Route::post($this->prefix . $URI, $func);
    }

    public function put(string $URI, callable|array $func): ?Route
    {
        return Route::put($this->prefix . $URI, $func);
    }

    public function patch(string $URI, callable|array $func): ?Route
    {
        return Route::patch($this->prefix . $URI, $func);
    }

    public function delete(string $URI, callable|array $func): ?Route
    {
        return Route::delete($this->prefix . $URI, $func);
    }
}