<?php

include_once '../dto/ClienteDto.php';
include_once '../sql/ClasePDO.php';

class ClienteDao {
    
    public function agregar($dto){
        try {
            $pdo = new clasePDO();
            $nombre = $dto->getNombre();
            
            $insert = $pdo->prepare("INSERT INTO comuna(nombre) VALUES(?)");
            $insert->bindParam(1, $nombre);
            $insert->execute();
            return true;
        } catch (PDOException $ex) {
            echo "Error al agregar comuna: ".$ex->getMessage();
        }
        return false;
    }
    
    public function listar(){
        $lista = new ArrayObject();
        $dto = null;
        try {
            $pdo = new clasePDO();            
            $select = $pdo->prepare("SELECT * FROM comuna");            
            $select->execute();
            $fetch = $select->fetchAll();
            foreach ($fetch as $x) {
                $dto = new ComunaDto();
                $dto->setId($x['id']);
                $dto->setNombre($x['nombre']);
                $lista->append($dto);
            }            
        } catch (PDOException $ex) {
            echo "Error al listar comunas: ".$ex->getMessage();
        }
        return $lista;
    }
}
