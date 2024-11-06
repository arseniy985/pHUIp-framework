<?php

use app\controllers\MainController;

getRoute("/", [MainController::class, 'generateTestPage']);
getRoute("/test", function () {
	generatePage("test");
});
