<?php

namespace http\Controllers;

use html\PageGenerator;
use http\Request;

class TestController
{
    public function test(Request $request): void
    {
        PageGenerator::render('test', [
            'id' => $request->param('id'),
            'test' => 123
        ]);
    }
}