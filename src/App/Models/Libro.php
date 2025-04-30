<?php

namespace Paw\App\Models;
use Paw\Core\Model;

class Libro extends Model {

    public $table = 'libro';
    private $id;
    private $nombre;
    private $idAutor;
    private $descripcion;
    private $precio;
    private $image;

    public function getNombre () {
        return $this->nombre;
    }

    public function getId () {
        return $this->id;
    }
    public function getIdAutor () {
        return $this->idAutor;
    }
    public function getImage () {
        return $this->image;
    }
    public function setImage ($image) {
        $this->image = $image;
    }

    public function getPrecio () {
        return $this->precio;
    }
    public function setPrecio ($precio) {
        $this->precio = $precio;
    }

    public function getDescripcion () {
        return $this->descripcion;
    }

    public function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    public function setId ($id) {
        $this->id = $id;
    }

    public function setIdAutor ($idAutor) {
        $this->idAutor = $idAutor;
    }

    public function setDescripcion ($descripcion) {
        $this->descripcion = $descripcion;
    }
    public function set(array $values)
    {
        foreach ($values as $field => $value) {
            #Creo el methodo y si existe lo ejecuto
            $method = "set" . ucfirst($field);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }
    public function getLibroById () {
        $result = $this->getByPrimaryKey($this->table, ['id' => $this->id]);
        return $result;
    }
}