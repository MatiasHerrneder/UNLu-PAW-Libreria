<?php //PageController.php

namespace Paw\App\Controllers;

class PageController
{
    public string $viewsDir;
    public array $menu;
    public array $social_networks;
    public array $contactos;

    public function __construct() {
        $this->viewsDir = __DIR__ . "/../Views/";
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
        $libros = [ // Para poner ejemplos variados, poner mas aca
            [
                "src" => "/assets/img/libro.jpg",
                "titulo" => "Dracula",
                "autor" => "Abraham Stoker",
                "precio" => 123123.99
            ],
            [
                "src" => "/assets/img/libro.jpg",
                "titulo" => "Farenheit 451",
                "autor" => "Ray Bradbury",
                "precio" => 123123.99
            ],
            [
                "src" => "/assets/img/libro.jpg",
                "titulo" => "El hombre de la mascara de hierro",
                "autor" => "Alexander Dumas",
                "precio" => 123123.99
            ],
            [
                "src" => "/assets/img/libro.jpg",
                "titulo" => "Orgullo y prejuicio",
                "autor" => "Jane Austen",
                "precio" => 123123.99
            ],
        ];
        $slides = [ // Para poner ejemplos variados, poner mas aca
            [
                "src" => "/assets/img/publicar-libros-online.jpg",
                "alt" => "Imagen de promoción 1",
            ],
            [
                "src" => "/assets/img/publicar-libros-online2.jpg",
                "alt" => "Imagen de promoción 2",
            ],
            [
                "src" => "/assets/img/publicar-libros-online3.jpg",
                "alt" => "Imagen de promoción 3",
            ],
        ];
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