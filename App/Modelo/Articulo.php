<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    PDO;
class Articulo extends Conexion
{
    use Alerta,Redireccion;
    protected   $articulo,
                $tipoArticulo,
                $descripcion,
                $monto;

    public function Articulo()
    {
        parent::__construct();
    }
    /********************************************** TIPO DE ARTICULO ******************************************************/ 
    public function mostrarTabla($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarTipoArticulo($tabla,$tipoArticulo)
    {
        $sql = "INSERT INTO $tabla (`id`, `nombre_articulo`, `estado`, `created_at`, `updated_at`) 
                VALUES (NULL, '$tipoArticulo', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function actualizarTipoArticulo($tabla,$tipoArticulo,$id)
    {
        $sql = "UPDATE $tabla SET `nombre_articulo` = '$tipoArticulo' WHERE `tipo_articulo`.`id` = $id;";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function eliminarTipoArticulo($tabla, $id)
    {
        $sql = "UPDATE $tabla SET estado=0 WHERE id=$id";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch();
        return $registros;
    }
    /********************************************** ARTICULO ******************************************************/ 
    public function mostrarArticulo($tabla, $tabla2)
    {
        $sql = "SELECT tipo_articulo.id, tipo_articulo.nombre_articulo, articulo.id 
                AS articulo_id, articulo.descripcion, articulo.monto_expensa, articulo.estado 
                FROM $tabla INNER JOIN $tabla2 ON tipo_articulo.id = articulo.id_tipo_articulo";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarArticulo($tabla,$tipoArticulo,$descripcion,$monto)
    {
        $sql = "INSERT INTO $tabla (`id`, `id_tipo_articulo`, `descripcion`, 
                `monto_expensa`, `estado`, `created_at`, `updated_at`) 
                VALUES (NULL, '$tipoArticulo', '$descripcion', '$monto', '1', current_timestamp(), current_timestamp());";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function actualizarArticulo($tabla,$tipoArticulo,$descripcion, $monto, $id)
    {
        $sql = "UPDATE $tabla SET `id_tipo_articulo` = '$tipoArticulo', `descripcion` = '$descripcion', 
                `monto_expensa` = '$monto' WHERE `articulo`.`id` = $id";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function eliminarArticulo($tabla, $id)
    {
        $sql = "UPDATE $tabla SET estado=0 WHERE id=$id";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch();
        return $registros;
    }
}
?>
