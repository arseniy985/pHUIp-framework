<?php

use http\Controllers\MainController;
use http\Middlewares\TestMiddleware;
use http\Route;

// ПРИ ИСПОЛЬЗОВАНИИ MIDDLEWARE УКАЗЫВАТЬ В КОНТРОЛЛЕРЕ ПЕРВЫМ АРГУМЕНТОМ Request

Route::get("/", [MainController::class, "generateTestPage"]);
Route::get("/testmiddleware", function () {
    print_r(REQUEST);
    generatePage('test');
})->middleware([TestMiddleware::class, "test"]); // вернет полностью реквест
