<?php


class ComunaDto {
    private $id;
    private $nombre;
    
    public function __construct() {
        $this->id = null;
        $this->nombre = null;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
