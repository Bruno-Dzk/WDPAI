<?php


require 'Routing.php';
$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('main', 'DefaultController');
Routing::get('knots', 'KnotsController');
Routing::get('test', 'DefaultController');
Routing::post('register', 'SecurityController');
Routing::post('login', 'SecurityController');
Routing::post('addProject', 'KnotsController');
Routing::run($path) ;