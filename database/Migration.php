<?php

namespace Database;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Schema\Blueprint;

abstract class Migration
{
    protected $capsule;

    public function __construct()
    {
        $this->capsule = new Capsule;
        $this->capsule->addConnection([
            'driver'    => config('DB_DRIVER'),
            'host'      => config('DB_HOST'),
            'database'  => config('DB_NAME'),
            'username'  => config('DB_USER'),
            'password'  => config('DB_PASSWORD'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]);
        $this->capsule->setAsGlobal();
        $this->capsule->bootEloquent();
    }

    /**
     * Запуск миграции
     */
    abstract public function up(): void;

    /**
     * Откат миграции
     */
    abstract public function down(): void;

    /**
     * Создает новую таблицу
     */
    protected function create(string $table, callable $callback): void
    {
        $this->capsule::schema()->create($table, $callback);
    }

    /**
     * Изменяет существующую таблицу
     */
    protected function table(string $table, callable $callback): void
    {
        $this->capsule::schema()->table($table, $callback);
    }

    /**
     * Удаляет таблицу
     */
    protected function drop(string $table): void
    {
        $this->capsule::schema()->dropIfExists($table);
    }
}
