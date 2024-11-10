<?php

use http\Controllers\TestController;
use http\Middlewares\TestMiddleware;
use http\Route;

Route::get("/", function () {
    echo "Hello World!";
});
Route::get("/testroute", [TestController::class, "test"])
    ->middleware(TestMiddleware::class);
