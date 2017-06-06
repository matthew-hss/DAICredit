<?php

class ClienteDto {

    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $fechaNacimiento;
    private $sexo;
    private $hijos;
    private $telefono;
    private $email;
    private $comuna;
    private $direccion;
    private $educacion;
    private $renta;
    private $sueldoLiquido;
    private $enfermedadCronica;
    private $estadoCivil;    

    public function __construct() {
        $this->id = null;
        $this->nombre = null;
        $this->apellidoPaterno = null;
        $this->apellidoMaterno = null;
        $this->fechaNacimiento = null;
        $this->sexo = null;
        $this->hijos = null;
        $this->telefono = null;
        $this->email = null;
        $this->comuna = new ComunaDto();
        $this->direccion = null;        
        $this->educacion = null;
        $this->renta = null;
        $this->sueldoLiquido = null;
        $this->enfermedadCronica = false;
        $this->estadoCivil = new EstadoCivilDto();        
    }
    function getComuna() {
        return $this->comuna;
    }

    function setComuna($comuna) {
        $this->comuna = $comuna;
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

    function getFechaNacimiento() {
        return $this->fechaNacimiento;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getHijos() {
        return $this->hijos;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getEducacion() {
        return $this->educacion;
    }

    function getRenta() {
        return $this->renta;
    }

    function getSueldoLiquido() {
        return $this->sueldoLiquido;
    }

    function getEnfermedadCronica() {
        return $this->enfermedadCronica;
    }

    function getEstadoCivil() {
        return $this->estadoCivil;
    }

    function getEstadoSolicitud() {
        return $this->estadoSolicitud;
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

    function setFechaNacimiento($fechaNacimiento) {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setHijos($hijos) {
        $this->hijos = $hijos;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setEducacion($educacion) {
        $this->educacion = $educacion;
    }

    function setRenta($renta) {
        $this->renta = $renta;
    }

    function setSueldoLiquido($sueldoLiquido) {
        $this->sueldoLiquido = $sueldoLiquido;
    }

    function setEnfermedadCronica($enfermedadCronica) {
        $this->enfermedadCronica = $enfermedadCronica;
    }

    function setEstadoCivil($estadoCivil) {
        $this->estadoCivil = $estadoCivil;
    }

    function setEstadoSolicitud($estadoSolicitud) {
        $this->estadoSolicitud = $estadoSolicitud;
    }
}
