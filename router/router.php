<?php

use http\Controllers\MainController;
use http\Middlewares\TestMiddleware;
use http\Route;

Route::get("/", [MainController::class, "generateTestPage"]);
Route::get("/injectiontest", [MainController::class, "testInjection"]);
Route::get("/testmiddleware", function () {
    print_r(REQUEST);
    generatePage('test');
})->middleware([TestMiddleware::class, "test"]); // вернет то что в мидлевейре
