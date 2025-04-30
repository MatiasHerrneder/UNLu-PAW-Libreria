<?php //PageController.php

namespace Paw\App\Controllers;

//use App\Core\Database\QueryBuilder;
use Paw\App\Models\Libro;
use Paw\Core\Controlador;
class LibroController extends Controlador
{
    public ?string $modelName = Libro::class;
    public function __construct()
    {
        parent::__construct();
    }

    public function libro() {
        
        $titulo = "Libro";
        if (isset($_GET["id_libro"])) {
            $this->model->setId($_GET["id_libro"]);
            $libro = $this->model->getLibroById();
            $libro = $libro[0];
            require $this->viewsDir . 'libro.view.php';
        }
    }
}