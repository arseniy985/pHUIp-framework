<?php
require './vendor/autoload.php';
require "./vendor/server.php";

use http\Request;

$request = new Request();

startServer();
