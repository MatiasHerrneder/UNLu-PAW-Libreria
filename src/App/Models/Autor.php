<?php

namespace Paw\App\Models;
use Paw\Core\Model;

class Autor extends Model {

    public $table = 'autor';
    private $id;
    private $nombre;

    public function getNombre () {
        return $this->nombre;
    }

    public function getId () {
        return $this->id;
    }

    public function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    public function setId ($id) {
        $this->id = $id;
    }
}