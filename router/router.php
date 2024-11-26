<?php

use http\Controllers\TestController;
use http\Middlewares\TestMiddleware;
use http\Route;

Route::get("/{id}", function () {
    echo "Hello World!";
});
Route::get("/", [TestController::class, "test"])
    ->middleware(TestMiddleware::class);
