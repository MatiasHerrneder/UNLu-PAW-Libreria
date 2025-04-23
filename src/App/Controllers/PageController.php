<?php //PageController.php

namespace Paw\App\Controllers;

class PageController
{
    public string $viewsDir;
    public array $menu;
    public array $social_networks;

    public function __construct() {
        $this->viewsDir = __DIR__ . "/../views/";
        $this->contactos = [
            [
                "href" => "mailto/milibreria@gmail.com",
                "data" => "mailto/milibreria@gmail.com",
            ],
            [
                "href" => "/contact",
                "data" => "Escribinos",
            ],
        ];
        $this->social_networks = [
            [
                "href" => "https://www.instagram.com/milibreria",
                "name" => "instagram",
            ],
            [
                "href" => "https://www.facebook.com/milibreria",
                "name" => "facebook",
            ],
        ];
        $this->menu = [
            [
                "href" => "/tienda",
                "name" => "Libros",
            ],
            [
                "href" => "/contact",
                "name" => "Contacto",
            ],
            [
                "href" => "/tienda",
                "name" => "Ficcion",
            ],
            [
                "href" => "/tienda",
                "name" => "Terror",
            ],
            [
                "href" => "/tienda",
                "name" => "Fantasia",
            ],
            [
                "href" => "/about", 
                "name" => "Quienes Somos",
            ],
        ];
    }

    public function about() {
        $titulo = "Sobre Nosotros";
        $main = "Pagina Institucional";
        require $this->viewsDir . 'about.view.php';
    }

    public function carrito() {
        require $this->viewsDir . 'register.view.php';
    }

    public function compraDestino() {
        require $this->viewsDir . 'register.view.php';
    }

    public function contact() {
        $titulo = "Contacto";
        $main = "Formas de contacto";
        require $this->viewsDir . 'contact.view.php';
    }

    public function index() {
        $titulo = "index";
        require $this->viewsDir . 'index.view.php';
    }

    public function libro() {
        require $this->viewsDir . 'register.view.php';
    }

    public function login() {
        require $this->viewsDir . 'login.view.php';
    }

    public function medioPago() {
        require $this->viewsDir . 'register.view.php';
    }

    public function register() {
        require $this->viewsDir . 'register.view.php';
    }

    public function tienda() {
        require $this->viewsDir . 'tienda.view.php';
    }

}