<?php
namespace App\Modelo;
use App\config\Conexion;
use PDO;

class Gasto extends Conexion{
    
    public function Gasto(){
        parent::__construct();
    }
    public function mostrarTabla($tabla){
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function mostrarTablaGasto($tabla,$tabla2){
        $sql = "SELECT tipo_gasto.nombre, gasto.id, gasto.descripcion, gasto.monto_gasto, gasto.estado FROM $tabla2 INNER JOIN $tabla on tipo_gasto.id = gasto.id_tipo_gasto";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarTipoGasto($tabla,$nombre){
        $sql = "INSERT INTO $tabla (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$nombre', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    public function registrarGasto($tabla,$tipoGasto,$descripcion,$monto){
        $sql = "INSERT INTO $tabla (`id`, `id_tipo_gasto`, `descripcion`, `monto_gasto`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$tipoGasto', '$descripcion', '$monto', '1', current_timestamp(), current_timestamp()) ";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }

    public function editarGasto($tabla,$tipoGasto,$descripcion,$monto,$id){
        $sql = "UPDATE $tabla SET `id_tipo_gasto` = '$tipoGasto', `descripcion` = '$descripcion', `monto_gasto` = '$monto' WHERE `gasto`.`id` = $id";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    }
    public function eliminarGasto($tabla,$idGasto){
        $sql = "UPDATE $tabla SET estado=0 WHERE id=$idGasto";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch();
        return $registros;
    }
    
}
?>
