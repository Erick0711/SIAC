<?php
namespace App\Modelo;
use App\config\Conexion;
use PDO;

class Usuario extends Conexion{
    protected   $usuario,
                $contrasenia;

    public function Usuario(){
        parent::__construct();
    }

    public function mostrarTabla($tabla,$tabla2,$tabla3){
        $sql = "SELECT persona.*, rol.*, usuario.* FROM $tabla 
        INNER JOIN $tabla2 on persona.id = usuario.id_persona
        INNER JOIN $tabla3 on rol.id = usuario.id_rol;";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarTipoRol($tabla,$nombre){
        $sql = "INSERT INTO $tabla (`id`, `nombre`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$nombre', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }

}
?>
