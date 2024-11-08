<?php

namespace http\Controllers;

use http\Request;

class MainController
{
    public function generateTestPage(): void
    {
        generatePage('start');
    }

    public function testInjection(Request $request): void
    {
        responseHtml(print_r($request, true), 200);
    }
}