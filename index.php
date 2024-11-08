<?php

use http\Request;

require './vendor/autoload.php';
require "./vendor/server.php";

$injector = new \Auryn\Injector();
$injector->alias(Request::class, Request::class);

global $injector;

startServer();
