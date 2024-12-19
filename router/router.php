<?php

use app\http\Request;
use app\http\Route;
use app\http\RouteGroup;
use app\view\PageGenerator;
use http\Controllers\TestController;
use http\Middlewares\TestMiddleware;

Route::get("/{id}", function (Request $request) {
    PageGenerator::render(
        'test',
        ['id' => $request->param('id')]
    );
});
Route::get("/", [TestController::class, "test"])
    ->middleware(TestMiddleware::class);

Route::group('', function (RouteGroup $group) {
    $group->post('/user', function () {
        echo 'pidor';
    });
    $group->get('/users', function () {
        responseJson('adsad', 200);
    });
});