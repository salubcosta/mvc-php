<?php

require __DIR__.'/vendor/autoload.php';
$router = require __DIR__ .'/router.php';
$resolver = require __DIR__ .'/resolver.php';

$obj = $router->handler();

// $controller = new $obj['class'](new App\Models\User);
// $action = $obj['action'];
// echo $controller->$action();

// $controller = new CODE\Controller;
// echo $controller->handler();

// echo (new App\Controllers\UsersController)->handler();

$resolver->handler($obj['class'], $obj['action']);