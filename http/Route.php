<?php

namespace http;

use ReflectionFunction;
use ReflectionMethod;

class Route
{
    private string $URI;
    private $func;
    private array $middleware = [];

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
     * Внутренний метод для создания маршрута с указанным методом
     * @param string $method HTTP метод (GET, POST, etc)
     * @param string $URI путь
     * @param callable|array $func обработчик
     * @return Route|null
     */
    public static function addRoute(string $method, string $URI, callable|array $func): ?Route
    {
        if ($_SERVER['REQUEST_METHOD'] === $method) {
            return self::route($URI, $func);
        }
        return null;
    }

    private static function route(string $URI, callable|array $func): ?Route
    {
        global $injector;
        $arguments = [];
        $reflection = is_array($func) ? new ReflectionMethod($func[0], $func[1]): new ReflectionFunction($func);
        foreach ($reflection->getParameters() as $parameter) {
            $class = $parameter->getType()->getName();
            if ($class) {
                $arguments[] = $injector->make($class);
            }
        }

        $callback = function () use ($arguments, $injector, $func) {
            is_array($func) ?
                call_user_func_array([$injector->make($func[0]), $func[1]], $arguments) :
                call_user_func_array($func, $arguments);
        };

        $_SERVER['ROUTS'][$URI] = $callback;

        return new Route($URI, $callback);
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
     * Прослойка между контроллером и запросом
     * @param string $middleware Класс middleware с методом handle
     * @return Route
     */
    public function middleware(string $middleware): Route
    {
        $method = "handle";
        global $injector;
        $arguments = [];
        
        $reflection = new ReflectionMethod($middleware, $method);
        foreach ($reflection->getParameters() as $parameter) {
            $class = $parameter->getType()->getName();
            if ($class) {
                $arguments[] = $injector->make($class);
            }
        }

        $callback = function () use ($method, $arguments, $injector, $middleware) {
            return call_user_func_array([$injector->make($middleware), $method], $arguments);
        };

        $this->middleware[] = $callback;
        
        $_SERVER['ROUTS'][$this->URI] = function () {
            foreach ($this->middleware as $middleware) {
                if (!$middleware()) {
                    return;
                }
            }
            call_user_func($this->func);
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