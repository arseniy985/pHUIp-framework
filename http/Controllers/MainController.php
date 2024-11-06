<?php

namespace http\Controllers;
class MainController
{
    public function generateTestPage(): void
    {
        generatePage('start');
    }
}