<?php

namespace http\Middlewares;

use http\Request;

class TestMiddleware extends Middleware
{
    public function test(Request $request): bool
    {
        responseHtml(print_r($request, true), 200);
        return false;
    }
}