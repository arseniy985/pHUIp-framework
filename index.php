<?php

use Auryn\Injector;
use Dotenv\Dotenv;
use http\Request;
use Illuminate\Database\Capsule\Manager;

require_once './vendor/autoload.php';
require_once "./http/app/server.php";
require_once "./http/app/helpers.php";

// создание контейнера зависимотей
$injector = new Injector();
// определение зависимостей
$injector->alias(Request::class, Request::class);
global $injector;

// инициализация переменных окружения
Dotenv::createImmutable(__DIR__  . '/')
    ->load();


// инициализация orm
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


startServer();


