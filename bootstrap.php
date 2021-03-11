<?php

require __DIR__.'/vendor/autoload.php';
$router = require __DIR__ .'/router.php';

$obj = $router->handler();

$controller = new $obj['class'];
$action = $obj['action'];
echo $controller->$action();

// $controller = new CODE\Controller;
// echo $controller->handler();

// echo (new App\Controllers\UsersController)->handler();