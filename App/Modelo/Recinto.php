<?php

namespace App\Modelo;

use App\config\Conexion;
use PDO;

class Recinto extends Conexion
{
    protected   $recinto,
                $numeroPabellon,
                $location = "<script> window.location.href =  '../vista/recinto.php';</script>",
                $alertCompletar = "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Alerta!</strong> Debes completar los campos de correctamente.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
    public function Recinto()
    {
        parent::__construct();
    }

    public function mostrarTabla($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    
    public function mostrarTablaEstacionamiento($tabla, $tabla2)
    {
        $sql = "SELECT pabellon.*, estacionamiento.* FROM $tabla INNER JOIN $tabla2 ON pabellon.id = estacionamiento.id_pabellon";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarPabellon($tabla, $numeroPabellon)
    {
        $sql = "INSERT INTO $tabla (`id`, `numero_pabellon`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$numeroPabellon', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

    public function editarPabellon($tabla, $numeroPabellon,$id)
    {
        $sql = "UPDATE $tabla SET numero_pabellon = '$numeroPabellon' WHERE pabellon.id='$id'";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

    public function eliminarPabellon($tabla, $idPabellon){
        $sql = "UPDATE $tabla SET estado=0 WHERE id=$idPabellon";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch(PDO::FETCH_LAZY);
        return $registros;
    }

}
