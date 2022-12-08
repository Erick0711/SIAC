<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    App\config\Complemento,
    PDO;
class Rol extends Conexion
{
    use Alerta,Redireccion,Complemento;
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
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    public function registrarRol($tabla,$nombre,$descripcion)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `nombre_rol`, `descripcion`, `estado`, `created_at`, 
        `updated_at`) VALUES (NULL, '$nombre', '$descripcion', '1', current_timestamp(), current_timestamp())");
        return $registros;
    }
    public function actualizarRol($tabla,$rol,$descripcion,$id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET `nombre_rol` = '$rol', `descripcion` = '$descripcion' 
                                            WHERE `rol`.`id` = $id; ");
        return $registros;
    }
    public function eliminarRol($tabla,$idRol)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idRol");
        return $registros;
    }
    public function comparar($tabla, $nombreRol)
    {
        $registros = $this->ejecutarFetch("SELECT nombre_rol FROM $tabla 
                                            WHERE nombre_rol = '$nombreRol'");
        return $registros;
    }
    public function activarRol($tabla,$idRol)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id=$idRol");
        return $registros;
    }
}
?>
