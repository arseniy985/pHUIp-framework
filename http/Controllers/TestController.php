<?php

namespace http\Controllers;

use http\Request;

class TestController
{
    public function test(Request $request) {
        generatePage('test', ['request' => $request]);
    }
}