<?php
namespace App\config;
use PDO;

trait Integral{
    public function ejecutarFetchAll($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

    public function ejecutarFetch($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $registros;
    }

    public function ejecutarFetchColumn($sql){
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchColumn(PDO::FETCH_ASSOC);
        return $registros;
    }
}
?>