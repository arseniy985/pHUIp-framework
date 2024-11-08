<?php

namespace http;

class Route
{
    private string $URI;
    private mixed $func;

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
     * @param string $URI - путь
     * @param callable|array $func - если принимает массив, то первый элемент - неймспейс класса, второй - метод класса. Действие функции - что будет происходить обращении по такому пути
     */
    public static function get(string $URI, callable|array $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (is_array($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } elseif (is_callable($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } else {
                response500();
                return null;
            }
            return new Route($URI, $func);
        }
        return null;
    }

    public static function post(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (is_array($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } elseif (is_callable($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } else {
                response500();
            }
            return new Route($URI, $func);
        }
        return null;
    }

    public static function put(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            if (is_array($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } elseif (is_callable($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } else {
                response500();
            }
            return new Route($URI, $func);
        }
        return null;
    }

    public static function patch(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
            if (is_array($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } elseif (is_callable($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } else {
                response500();
            }
            return new Route($URI, $func);
        }
        return null;
    }

    public static function delete(string $URI, $func): null|Route
    {
        if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            if (is_array($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } elseif (is_callable($func)) {
                $_SERVER["ROUTS"][$URI] = $func;
            } else {
                response500();
            }
            return new Route($URI, $func);
        }
        return null;
    }

    /**
     * Прослойка между контроллером и запросом
     * @param callable|array $middleware
     * @return Route
     */
    public function middleware(callable|array $middleware): Route
    {
        $_SERVER["ROUTS"][$this->URI] = function () use ($middleware) {
            try {
                if (is_array($middleware)) {
                    $result = call_user_func([new $middleware[0], $middleware[1]]);
                } elseif (is_callable($middleware)) {
                    $result = $middleware();
                } else {
                    throw new \Exception("Неверный формат middleware");
                }

                if ($result !== false) {
                    call_user_func($this->func);
                }
            } catch (\Exception $e) {
                echo "Ошибка в middleware: " . $e->getMessage();
            }
        };
        return $this;
    }
}