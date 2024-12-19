<?php

namespace http\Controllers;

use app\http\Request;
use app\view\PageGenerator;

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