<?php

require __DIR__."/vendor/autoload.php";

$path_info = $_SERVER['REQUEST_METHOD'] ?? '/';
$path_method = $_SERVER['PATH_INFO'] ?? 'GET';

$router = new Fit\Router\Router($path_info, $path_method);

$router->get('/hello', function () {
    return 'ok';
});
$router->rum();
$result = $router->rum();
echo $result['callback'];
