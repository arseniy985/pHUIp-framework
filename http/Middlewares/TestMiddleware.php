<?php

namespace http\Middlewares;

use http\Request;

class TestMiddleware extends Middleware
{
    public function handle(): bool
    {
        if (true) {
            return true;
        }
        return false;
    }
}