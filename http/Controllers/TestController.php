<?php

namespace http\Controllers;

use html\PageGenerator;
use Database\Models\Post;
use http\Request;

class TestController
{
    public function test(Request $request): void
    {
        PageGenerator::render(
            'test', 
            ['test' => 'john doe', 'request' => $request]
        );
    }
}