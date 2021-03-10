<?php

require __DIR__.'/vendor/autoload.php';

// $controller = new CODE\Controller;
// echo $controller->handler();

echo (new App\Controllers\UsersController)->handler();