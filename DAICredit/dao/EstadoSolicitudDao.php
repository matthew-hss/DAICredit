<?php

include_once '../sql/ClasePDO.php';
include_once '../dto/EstadoSolicitudDto.php';

class EstadoSolicitudDao {
    
    public function agregar($dto){
        try {
            $pdo = new clasePDO();
            $estado = $dto->getEstado();
            $descripcion = $dto->getDescripcion();
            
            $insert = $pdo->prepare("INSERT INTO estado_solicitud(estado, descripcion) VALUES(?,?)");
            $insert->bindParam(1, $estado);
            $insert->bindParam(2, $descripcion);
            $insert->execute();
            return true;
        } catch (PDOException $ex) {
            echo "Error al agregar estado de solicitud: ".$ex->getMessage();
        }
        return false;
    }
    
    public function listar(){
        $lista = new ArrayObject();
        $dto = null;
        try {
            $pdo = new clasePDO();            
            $select = $pdo->prepare("SELECT * FROM estado_solicitud");            
            $select->execute();
            $fetch = $select->fetchAll();
            foreach ($fetch as $x) {
                $dto = new EstadoSolicitudDto();
                $dto->setId($x['id']);
                $dto->setEstado($x['estado']);
                $dto->setDescripcion($x['descripcion']);
                $lista->append($dto);
            }            
        } catch (PDOException $ex) {
            echo "Error al listar estados de solicitud: ".$ex->getMessage();
        }
        return $lista;
    }
}
