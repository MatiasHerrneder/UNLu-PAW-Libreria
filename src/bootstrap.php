<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Paw\Core\Router;                                    //cambiar PAW

$log = new Logger('mvc-app');
$log->pushHandler(new StreamHandler(__DIR__ . '/../logs/app.log', Logger::DEBUG));

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router;
// al router le paso: path, controlador @ metodo
$router->loadRoutes('/', 'PageController@index');
$router->loadRoutes('/about', 'PageController@about');
$router->loadRoutes('/contact', 'PageController@contact');
$router->loadRoutes('/not_found', 'ErrorController@notFound');
$router->loadRoutes('/internal_error', 'ErrorController@internalError');