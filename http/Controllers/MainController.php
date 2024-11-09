<?php

namespace http\Controllers;

use Database\Models\Post;
use http\Request;

class MainController
{
    public function generateTestPage(): void
    {
        $posts = Post::all();
        generatePage('start', ['posts' => $posts]);
    }

    public function testInjection(Request $request): void
    {
        responseHtml(print_r($request, true), 200);
    }
}