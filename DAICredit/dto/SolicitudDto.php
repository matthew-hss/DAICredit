<?php


class SolicitudDto {
    private $id;
    private $cliente;
    private $estadoSolicitud;
    private $fechaIngreso;
    
    public function __construct() {
        $this->id = null;
        $this->cliente = null;
        $this->estadoSolicitud = null;
        $this->fechaIngreso = null;
    }
    
    function getId() {
        return $this->id;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getEstadoSolicitud() {
        return $this->estadoSolicitud;
    }

    function getFechaIngreso() {
        return $this->fechaIngreso;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setEstadoSolicitud($estadoSolicitud) {
        $this->estadoSolicitud = $estadoSolicitud;
    }

    function setFechaIngreso($fechaIngreso) {
        $this->fechaIngreso = $fechaIngreso;
    }
}
