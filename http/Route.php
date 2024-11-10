<?php

namespace http;

use ReflectionFunction;
use ReflectionMethod;

class Route
{
    private string $URI;
    private $func;

    /**
     * @param string $URI
     * @param mixed $func
     */
    private function __construct(string $URI, mixed $func)
    {
        $this->URI = $URI;
        $this->func = $func;
    }

    private static function route(string $URI, callable|array $func): ?Route
    {
        global $injector;
        $arguments = [];
        $reflection = is_array($func) ?  new ReflectionMethod($func[0], $func[1]): new ReflectionFunction($func);
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
     * @param callable|array $func - если принимает массив, то первый элемент - неймспейс класса, второй - метод класса. Действие функции - что будет происходить обращении по такому пути
     */
    public static function get(string $URI, callable|array $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            return self::route($URI, $func);
        }
        return null;
    }

    public static function post(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            return self::route($URI, $func);
        }
        return null;
    }

    public static function put(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            return self::route($URI, $func);
        }
        return null;
    }

    public static function patch(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
            return self::route($URI, $func);
        }
        return null;
    }

    public static function delete(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            return self::route($URI, $func);
        }
        return null;
    }

    /**
     * Прослойка между контроллером и запросом
     * @param callable|string $middleware
     * @return Route
     */
    public function middleware(callable|string $middleware): Route
    {
        $method = "handle";
        global $injector;
        $arguments = [];
        $reflection = is_array($middleware) ? new ReflectionMethod($middleware, $method): new ReflectionFunction($middleware);
        foreach ($reflection->getParameters() as $parameter) {
            $class = $parameter->getType()->getName();
            if ($class) {
                $arguments[] = $injector->make($class);
            }
        }

        $callback = function () use ($method, $arguments, $injector, $middleware) {
            return is_array($middleware) ?
                call_user_func_array([$injector->make($middleware), $method], $arguments) :
                call_user_func_array($middleware, $arguments);
        };
        $_SERVER['ROUTS'][$this->URI] = function () use ($callback) {
            if ($callback()) {
                call_user_func($this->func);
            }
        };
        return $this;
    }
}