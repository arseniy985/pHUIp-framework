<?php

use html\PageGenerator;
use http\Controllers\TestController;
use http\Middlewares\TestMiddleware;
use http\Route;
use http\Request;

Route::get("/{id}", function (Request $request) {
    PageGenerator::render(
        'test',
        ['id' => $request->param('id'), 'test' => 123]
    );
});
Route::get("/", [TestController::class, "test"])
    ->middleware(TestMiddleware::class);
