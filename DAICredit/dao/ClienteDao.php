<?php

include_once '../dto/ClienteDto.php';
include_once '../sql/ClasePDO.php';

class ClienteDao {

    public function agregar($dto) {
        try {
            $pdo = new clasePDO();
            $nombre = $dto->getNombre();
            $apellidoPaterno = $dto->getApellidoPaterno();
            $apellidoMaterno = $dto->getApellidoMaterno();
            $fechaNacimiento = $dto->getFechaNacimiento();
            $sexo = $dto->getSexo();
            $hijos = $dto->getHijos();
            $telefono = $dto->getTelefono();
            $email = $dto->getEmail();
            $comuna = $dto->getComuna()->getId();
            $direccion = $dto->getDireccion();            
            $educacion = $dto->getEducacion();
            $renta = $dto->getRenta();
            $sueldoLiquido = $dto->getSueldoLiquido();
            $enfermedadCronica = $dto->getEnfermedadCronica();
            $estadoCivil = $dto->getEstadoCivil()->getId();            

            $insert = $pdo->prepare("INSERT INTO comuna(nombre,apellido_paterno,apellido_materno,fecha_nacimiento,"
                    . "sexo,hijo,telefono,email,direccion,educacion,renta,sueldo_liquido,enfermedad_cronica,estado_civil_id,comuna_id)"
                    . " VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
            $insert->bindParam(1, $nombre);
            $insert->bindParam(2, $apellidoPaterno);
            $insert->bindParam(3, $apellidoMaterno);
            $insert->bindParam(4, $fechaNacimiento);
            $insert->bindParam(5, $sexo);
            $insert->bindParam(6, $hijos);
            $insert->bindParam(7, $telefono);
            $insert->bindParam(8, $email);
            $insert->bindParam(9, $direccion);
            $insert->bindParam(10, $educacion);
            $insert->bindParam(11, $renta);
            $insert->bindParam(12, $sueldoLiquido);
            $insert->bindParam(13, $enfermedadCronica);
            $insert->bindParam(14, $estadoCivil);            
            $insert->bindParam(15, $comuna);
            $insert->execute();
            return true;
        } catch (PDOException $ex) {
            echo "Error al agregar cliente: " . $ex->getMessage();
        }
        return false;
    }

    public function listar() {
        $lista = new ArrayObject();
        $dto = null;
        try {
            $pdo = new clasePDO();
            $select = $pdo->prepare("SELECT * FROM cliente");
            $select->execute();
            $fetch = $select->fetchAll();
            foreach ($fetch as $x) {
                $dto = new ClienteDto();
                $dto->setId($x['id']);
                $dto->setNombre($x['nombre']);
                $dto->setApellidoPaternope($x['apellido_paterno']);
                $dto->setApellidoMaterno($x['apellido_materno']);
                $dto->setFechaNacimiento($x['fecha_nacimiento']);
                $dto->setSexo($x['sexo']);
                $dto->setHijos($x['hijo']);
                $dto->setTelefono($x['telefono']);
                $dto->setEmail($x['email']);
                $dto->setDireccion($x['direccion']);
                $dto->setEducacion($x['educacion']);
                $dto->setRenta($x['renta']);
                $dto->setSueldoLiquido($x['sueldo_liquido']);
                $dto->setEnfermedadCronica($x['enfermedad_cronica']);
                $dto->setEstadoCivil().setId($x['estado_civil_id']);
                $dto->setComuna().setId($x['comuna_id']);
                
                $lista->append($dto);
            }
        } catch (PDOException $ex) {
            echo "Error al listar clientes: " . $ex->getMessage();
        }
        return $lista;
    }

}
