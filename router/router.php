<?php

use http\Controllers\MainController;
use http\Middlewares\TestMiddleware;
use http\Route;

Route::get("/", [MainController::class, "generateTestPage"]);
Route::get("/injectiontest", function (\http\Request $request) {
    responseHtml(print_r($request, true), 200);
});
Route::get("/testmiddleware", function () {
    print_r(REQUEST);
    generatePage('test');
})->middleware([TestMiddleware::class, "test"]); // вернет то что в мидлевейре
