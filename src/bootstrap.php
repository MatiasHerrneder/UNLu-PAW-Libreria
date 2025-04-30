<?php

require __DIR__ . '/../vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Paw\Core\Router;
use Paw\Core\Database\ConnectionBuilder;
use Dotenv\Dotenv;
use Paw\Core\Config;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv->load();

$config = new Config;

$log = new Logger('mvc-app');
$handler = new StreamHandler($config->get("LOG_PATH"));
$handler->setLevel($config->get("LOG_LEVEL"));
$log->pushHandler($handler);

$connectionBuilder = new ConnectionBuilder;
$connectionBuilder->setLoggeable($log);
$connection = $connectionBuilder->make($config);

$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new Router;

// al router le paso: path, controlador @ metodo
$router->loadRoutes('/', 'PageController@index');
$router->loadRoutes('/about', 'PageController@about');
$router->loadRoutes('/carrito', 'PageController@carrito');
$router->loadRoutes('/contact', 'PageController@contact');
$router->get('/libro', 'LibroController@libro');
$router->get('/login', 'PageController@login');
$router->post('/login', 'PageController@loginProccess');
$router->loadRoutes('/medioPago', 'PageController@medioPago');
$router->get('/register', 'PageController@register');
$router->post('/register', 'PageController@registerProccess');
$router->loadRoutes('/tienda', 'PageController@tienda');
$router->loadRoutes('not_found', 'ErrorController@notFound');
$router->loadRoutes('internal_error', 'ErrorController@internalError');