<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta;
use PDO;
class Rol extends Conexion
{
    use Alerta,Redireccion;
    protected   $id,
                $rol,
                $nombreRol,
                $descripcion;
    public function Rol()
    {
        parent::__construct();
    }

    public function mostrar($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarRol($tabla,$nombre,$descripcion)
    {
        $sql = "INSERT INTO $tabla (`id`, `nombre_rol`, `descripcion`, `estado`, `created_at`, `updated_at`) 
                VALUES (NULL, '$nombre', '$descripcion', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
}
?>
