<?php

use App\Mvc;
use App\Controllers\HomeController;

$mvc = new Mvc();
$router = $mvc->getRouter();

$router->get('/', HomeController::class, 'index');

$router->dispatch();