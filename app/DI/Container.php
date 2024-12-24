<?php

namespace app;

use Exception;

class Container
{
    private array $bindings;
    private static object $instance;

    public function __construct()
    {
        self::$instance = $this;
    }

    public function bind(string $allias, string|callable $binding): void
    {
        $this->bindings[$allias] = $binding;
    }

    public function singleton(string $allias, string|callable $binding): void
    {
        $this->bindings[$allias] = is_callable($binding) ?
            $binding() : new $binding;
    }

    /**
     * @throws Exception
     */
    public static function make(string $allias): object
    {
        $class = self::$instance->bindings[$allias] ?? null;
        if ($class == null) {
            throw new Exception('Класс не найден');
        };

        if (is_object($class)) {
            return $class;
        }
        if (is_callable($class)) {
            return $class();
        }
        return new $class;
    }
}