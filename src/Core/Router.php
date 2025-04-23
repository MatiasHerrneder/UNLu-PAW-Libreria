<?php

namespace Paw\Core;

use Paw\Core\Exceptions\RouteNotFoundException;

class Router {
    // Dado un metodo, tenemos un conjunto de rutas
    public array $routes = [
        "GET" => [],
        "POST" => []
    ];

    // La asignacion de valores x defecto evitan que tengamos que reescribir
    // todas las llamadas a este metodo.
    public function loadRoutes(string $path, string $action, string $method = "GET"):void
    {
        $this->routes[$method][$path] = $action;
    }

    private function exists(string $path, string $http_method)
    {
        return array_key_exists($path, $this->routes[$http_method]);
    }

    private function getController(string $path, string $http_method): array
    {
        return explode('@', $this->routes[$http_method][$path]);
    }

    // Esta abstraccion simplifica la refactorizacion
    public function get(string $path, string $action)
    {
        $this->loadRoutes($path, $action, "GET");
    }

    public function post(string $path, string $action)
    {
        $this->loadRoutes($path, $action, "POST");
    }

    public function direct(string $path, string $method = "GET"):void
    {
        echo $this->routes;
        if(!$this->exists($path, $method))
        {
            throw new RouteNotFoundException("No hay ruta para este path");
        }

        list($controller, $method) = $this->getController($path, $method);

        // Con el nombre del controlador lo instancio.

        $controller_name = "Paw\\App\\Controllers\\{$controller}";

        // Notar que se usa '$method' y no 'method'
        // De esta manera se evalua el nombre del metodo y luego se lo invoca.
        // Esto, entonces, invoca de manera generica a cualquier metodo, de cualquier controlador.
        $objController = new $controller_name;
        $objController->$method();
    }
}
