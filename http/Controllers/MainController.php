<?php

namespace http\Controllers;
use http\Request;

class MainController
{
    public function generateTestPage(): void
    {
        generatePage('start');
    }
}