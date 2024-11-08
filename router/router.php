<?php

use http\Controllers\MainController;
use http\Middlewares\TestMiddleware;
use http\Route;

Route::get("/", [MainController::class, "generateTestPage"]);
Route::get("/testmiddleware", function () {
    print_r(REQUEST);
    generatePage('test');
})->middleware([TestMiddleware::class, "test"]); // вернет полностью реквест
