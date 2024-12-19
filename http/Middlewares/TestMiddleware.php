<?php

namespace http\Middlewares;

use app\http\Middleware;

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