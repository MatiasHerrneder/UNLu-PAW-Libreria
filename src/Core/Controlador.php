<?php

namespace Paw\Core;

use Paw\Core\Model;
use Paw\Core\Database\QueryBuilder;
use Paw\Core\Traits\Loggable;

class Controlador
{
    public string $viewsDir;
    public array $menu;
    public ?string $modelName = null;
    public array $social_networks;
    public array $contactos;
    
    use Loggable;
    protected $model;

    public $qb;

    public function __construct() {
        global $connection, $log;
        $this->viewsDir = __DIR__ . "/../App/Views/";
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
        $qb = new QueryBuilder($connection, $log);
        $this->qb = $qb;

        if (!is_null($this->modelName)) {
            
            $model = new $this->modelName;
            $model->setQueryBuilder($qb);
            $this->setModel($model);
        }
    }

    public function setModel(Model $model)
    {
        $this->model = $model;
    }

    public function getQb(){
        return $this->qb;
    }


}