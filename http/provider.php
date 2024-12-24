<?php

use app\Container;
use app\http\Request;

$injector = new Container();

// Регистрация зависимостей
$injector->singleton(Request::class, Request::class);