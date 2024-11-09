<?php

namespace http\Controllers;

use Database\Models\Post;
use http\Request;

class MainController
{
    public function generateTestPage(): void
    {
        $post = Post::create([
            'title' => "huihuihuhiu",
            'content' => "sdfosdfp[ofp[dsdfsf"
        ]);
        generatePage('start', ['post' => $post]);
    }

    public function testInjection(Request $request): void
    {
        responseHtml(print_r($request, true), 200);
    }
}