<?php
// Controlador generico

namespace Paw\Core;  // Cambiar PAW

use Paw\Core\Exceptions\RouteNotFoundException;     //cambiar PAW

class Router {

    public array $routes;

    public function loadRoutes($path, $action) {
        $this->routes[$path] = $action;
    }

    public function direct($path) {

        if (!array_key_exists($path, $this->routes)) {
            throw new RouteNotFoundException("Route not found for this path");
        }

        list($controller, $method) = explode('@', $this->routes[$path]);
        $controllerName = "Paw\\App\\Controllers\\{$controller}";                  // Cambiar PAW
        $objController = new $controllerName;
        $objController->$method();
    }

}