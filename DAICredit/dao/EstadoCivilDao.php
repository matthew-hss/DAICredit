<?php

include_once '../sql/ClasePDO.php';
include_once '../dto/EstadoCivilDto.php';

class EstadoCivilDao {
    
    public function agregar($dto){
        try {
            $pdo = new clasePDO();
            $nombre = $dto->getNombre();
            
            $insert = $pdo->prepare("INSERT INTO estado_civil(nombre) VALUES(?)");
            $insert->bindParam(1, $nombre);
            $insert->execute();
            return true;
        } catch (PDOException $ex) {
            echo "Error al agregar estado civil: ".$ex->getMessage();
        }
        return false;
    }
    
    public function listar(){
        $lista = new ArrayObject();
        $dto = null;
        try {
            $pdo = new clasePDO();            
            $select = $pdo->prepare("SELECT * FROM estado_civil");            
            $select->execute();
            $fetch = $select->fetchAll();
            foreach ($fetch as $x) {
                $dto = new EstadoCivilDto();
                $dto->setId($x['id']);
                $dto->setNombre($x['nombre']);
                $lista->append($dto);
            }            
        } catch (PDOException $ex) {
            echo "Error al listar estados civiles: ".$ex->getMessage();
        }
        return $lista;
    }
}
