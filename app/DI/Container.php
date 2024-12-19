<?php

namespace App\DI;

use Exception;

class Container
{
    private array $bindings;

    public function bind(string $allias, string $binding): void
    {
        $this->bindings[$allias] = $binding;
    }

    public function singleton(string $allias, string $binding): void
    {
        $this->bindings[$allias] = new $binding;
    }

    /**
     * @throws Exception
     */
    public function make(string $allias): object
    {
        $class = $this->bindings[$allias];
        if (!$class) {
            throw new Exception('Класс не найден');
        };

        return is_object($class) ?
            $class : new $class;
    }
}