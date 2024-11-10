<?php

use Auryn\Injector;
use Dotenv\Dotenv;
use http\Request;
use Illuminate\Database\Capsule\Manager;

require './vendor/autoload.php';
require "./http/app/server.php";

// создание контейнера зависимотей
$injector = new Injector();
// определение зависимостей
$injector->alias(Request::class, Request::class);
global $injector;

// инициализация переменных окружения
$dotenv = Dotenv::createImmutable(__DIR__  . '/');
$dotenv->load();

// инициализация orm
$capsule = new Manager();
$capsule->addConnection([
        'driver'    => env('DB_DRIVER'),
        'host'      => env('DB_HOST'),
        'database'  => env('DB_NAME'),
        'username'  => env('DB_USER'),
        'password'  => env('DB_PASSWORD'),
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
$capsule->setAsGlobal();
$capsule->bootEloquent();

startServer();
