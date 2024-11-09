<?php

use Auryn\Injector;
use http\Request;

require './vendor/autoload.php';
require "./http/app/server.php";

$injector = new Injector();
$injector->alias(Request::class, Request::class);
global $injector;

startServer();
