<?php

// инициализация orm
use Illuminate\Database\Capsule\Manager;

$capsule = new Manager();
$capsule->addConnection([
    'driver'    => config('DB_DRIVER'),
    'host'      => config('DB_HOST'),
    'database'  => config('DB_NAME'),
    'username'  => config('DB_USER'),
    'password'  => config('DB_PASSWORD'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);
$capsule->setAsGlobal();
$capsule->bootEloquent();