<?php

require __DIR__ . '/../src/bootstrap.php';

use Paw\Core\Exceptions\RouteNotFoundException;

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];

$log->info("Peticion {$method} a: {$path}");

try {
    $router->direct($path, $method);
    
    $log->info("Status Code: 200 - {$path}");

} catch (RouteNotFoundException $e) {
    $router->direct('not_found');
    
    $log->info("Status Code: 404 - Route not Found", ["Error" => $path]);

} catch (Exception $e) {
    $router->direct('internal_error');
    
    $log->error("Status Code: 500 - Internal Server Error", ["Error" => $e]);
}