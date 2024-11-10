<?php

namespace http\Middlewares;

use http\Request;

class TestMiddleware extends Middleware
{
    public function handle(Request $request): bool
    {
        if (true) {
            return true;
        }
        return false;
    }
}