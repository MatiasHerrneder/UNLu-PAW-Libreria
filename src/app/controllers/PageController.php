<?php

namespace Paw\App\Controllers;

class PageController{
    public string $viewsDir;

    public function __construct() {
        $this->viewsDir = __DIR__ . "/../views";
        $this->menu = [
            [
                "href" => "/",
                "name" => "Home",
            ],
            [
                "href" => "/about", 
                "name" => "Quienes Somos",
            ],
            [
                "href" => "/contact",
                "name" => "Contactos",
            ],
        ];
    }

    public function index() {
        $titulo = htmlspecialchars($_GET["nombre"] ?? "PAW");
        require $this->viewsDir . '/index.view.php';
    }

    public function about() {
        $titulo = "Sobre Nosotros";
        $main = "Pagina Institucional";
        require $this->viewsDir . '/about.view.php';
    }

    public function contact() {
        $titulo = "Contacto";
        $main = "Formas de contacto";
        require $this->viewsDir . '/contact.view.php';
    }
}