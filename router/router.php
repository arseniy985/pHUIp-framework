<?php

use http\Controllers\MainController;

getRoute("/", [MainController::class, 'generateTestPage']);
getRoute("/test", function () {
	generatePage("test");
});
