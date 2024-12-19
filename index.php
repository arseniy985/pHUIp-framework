<?php

use app\http\Request;
use Auryn\Injector;
use Dotenv\Dotenv;
use Illuminate\Database\Capsule\Manager;

require_once './vendor/autoload.php';
require_once "./http/app/server.php";
require_once "./http/app/helpers.php";

require_once 'http/provider.php';

Dotenv::createImmutable(__DIR__  . '/')
    ->load();

require_once 'app/database/eloquent_init.php';


startServer();


