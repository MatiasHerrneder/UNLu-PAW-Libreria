<?php //PageController.php

namespace Paw\App\Controllers;

//use App\Core\Database\QueryBuilder;
use Paw\Core\Controlador;
class PageController extends Controlador
{
    public function __construct()
    {
        parent::__construct();
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
        $libros = [
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

    //public function libro() {
    //    $titulo = "Libro";
    //    $params = $_GET;
    //    if (isset($params["id_libro"])) {
    //        require $this->viewsDir . 'libro.view.php';
    //    }
    //}
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

    public function register(bool $procesado = false) {
        $titulo = "Register";
        require $this->viewsDir . 'register.view.php';
    }

    public function registerProccess() {
        $resultados = $_POST;
        $this->register(true, $resultados);
    }

    public function tienda() {
        require $this->viewsDir . 'tienda.view.php';
    }

}