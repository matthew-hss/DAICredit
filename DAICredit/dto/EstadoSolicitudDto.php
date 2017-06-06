<?php


class EstadoSolicitudDto {
    private $id;
    private $estado;
    private $descripcion;
    
    public function __construct() {
        $this->id = null;
        $this->estado = null;
        $this->decripcion = null;
    }
    
    function getId() {
        return $this->id;
    }

    function getEstado() {
        return $this->estado;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }


}
