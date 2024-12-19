<?php

use app\http\Request;
use Auryn\Injector;

$injector = new Injector();

// Регистрация зависимостей
$injector->alias(Request::class, Request::class);

global $injector;