<?php //PageController.php

namespace Paw\App\Controllers;

class PageController
{
    public string $viewsDir;
    public array $menu;
    public array $social_networks;
    public array $contactos;
    public array $libros;

    public function __construct() {
        $this->viewsDir = __DIR__ . "/../Views/";
        $this->libros = [
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
            [ "href" => "/tienda", "name" => "Libros", ],
            [ "href" => "/contact", "name" => "Contacto", ],
            [ "href" => "/tienda", "name" => "Ficcion", ],
            [ "href" => "/tienda", "name" => "Terror", ],
            [ "href" => "/tienda", "name" => "Fantasia", ],
            [ "href" => "/about",  "name" => "Quienes Somos", ],
        ];
    }

    public function about() {
        $titulo = "Sobre Nosotros";
        $main = "Pagina Institucional";
        require $this->viewsDir . 'about.view.php';
    }

    public function carrito() {
        require $this->viewsDir . 'carrito.view.php';
    }

    public function compraDestino() {
        require $this->viewsDir . 'compra_destino.view.php';
    }

    public function contact() {
        $titulo = "Contacto";
        $main = "Formas de contacto";
        require $this->viewsDir . 'contact.view.php';
    }

    public function index() {
        $titulo = "Inicio";
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
        $titulo = "Libro";
        $libro = $_GET;
        require $this->viewsDir . 'libro.view.php';
    }
    // Borrar parametro $resultados
    public function login(bool $procesado = false, $resultados = null) {
        $titulo = "Login";
        require $this->viewsDir . 'login.view.php';
    }

    public function loginProccess() {
        $resultados = $_POST;
        $this->login(true, $resultados);
    }

    public function medioPago() {
        require $this->viewsDir . 'medio_pago.view.php';
    }

    public function register(bool $procesado = false, 
        array $resultados = null) {

        $titulo = "Register";
        require $this->viewsDir . 'register.view.php';
    }

    public function registerProccess() {
        $resultados = $_POST;
        $this->register(true, $resultados);
    }

    public function tienda() {
        $categoriasFiltro = [
            [
                "href" => "#",
                "categoria" => "Artes",
            ],
            [
                "href" => "#",
                "categoria" => "Bibliotecología y museología",
            ],
            [
                "href" => "#",
                "categoria" => "Ciencias de la Tierra",
            ],
            [
                "href" => "#",
                "categoria" => "Computación",
            ],
            [
                "href" => "#",
                "categoria" => "Tecnología de la información",
            ],
            [
                "href" => "#",
                "categoria" => "Ciencia Ficción",
            ],
            [
                "href" => "#",
                "categoria" => "Historia",
            ],
            [
                "href" => "#",
                "categoria" => "Arqueología",
            ],
            [
                "href" => "#",
                "categoria" => "Infantil",
            ],
            [
                "href" => "#",
                "categoria" => "Juvenil",
            ],
        ];

        $opcionesOrdenamiento = [
            [
                "value" => "popularidad",
                "descripcion" => "Popularidad",
            ],
            [
                "value" => "menor-precio",
                "descripcion" => "Menor precio",
            ],
            [
                "value" => "mayor-precio",
                "descripcion" => "Mayor precio",
            ],
        ];
        require $this->viewsDir . 'tienda.view.php';
    }

}