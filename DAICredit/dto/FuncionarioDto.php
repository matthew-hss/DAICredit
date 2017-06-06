<?php

class FuncionarioDto {
    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $rut;
    private $password;
    
    public function __construct() {
        $this->id = null;
        $this->nombre = null;
        $this->apellidoPaterno = null;
        $this->apellidoMaterno = null;
        $this->rut = null;
        $this->password = null;
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidoPaterno() {
        return $this->apellidoPaterno;
    }

    function getApellidoMaterno() {
        return $this->apellidoMaterno;
    }

    function getRut() {
        return $this->rut;
    }

    function getPassword() {
        return $this->password;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidoPaterno($apellidoPaterno) {
        $this->apellidoPaterno = $apellidoPaterno;
    }

    function setApellidoMaterno($apellidoMaterno) {
        $this->apellidoMaterno = $apellidoMaterno;
    }

    function setRut($rut) {
        $this->rut = $rut;
    }

    function setPassword($password) {
        $this->password = $password;
    }
}
