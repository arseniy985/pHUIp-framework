<?php

namespace http\Middlewares;

use http\Request;

class TestMiddleware extends Middleware
{
    public function test(): bool
    {
        responseHtml(print_r(REQUEST, true), 200);
        return false;
    }
}