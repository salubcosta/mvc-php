<?php

$resolver = new CODE\Resolver;

$resolver['PDO'] = function($r){
    return new PDO('mysql:host=localhost;dbname=dbmoodle','root', '123', [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
};

return $resolver;