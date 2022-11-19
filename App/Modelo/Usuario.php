<?php
namespace App\Modelo;
use App\Modelo\Alerta;
use App\Modelo\Persona;
use App\config\Conexion;
use PDO;
class Usuario extends Conexion
{
    use Alerta,Persona;
    protected   $usuario,
                $campo_usuario,
                $contrasenia,
                $rol,
                $redireccionar = "<script> window.location.href =  '../vista/usuario.php';</script>";
    public function Usuario()
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
    public function mostrarTabla($tabla,$tabla2,$tabla3)
    {
        $sql = "SELECT persona.*, rol.*, usuario.* FROM $tabla 
                INNER JOIN $tabla2 on persona.id = usuario.id_persona
                INNER JOIN $tabla3 on rol.id = usuario.id_rol;";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarTipoRol($tabla,$nombre)
    {
        $sql = "INSERT INTO $tabla (`id`, `nombre`, `estado`, `created_at`, `updated_at`) 
                VALUES (NULL, '$nombre', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function nuevoUsuario($tabla, $tabla2,$nombre, $apellido, $ci, $complemento_ci, 
                                $correo, $telefono, $usuario, $contrasenia, $rol)
    {
        $sql = "INSERT INTO $tabla (`id`, `nombre`, `apellido`, `ci`, `complemento_ci`, `correo`, 
                            `telefono`, `estado`, `created_at`, `updated_at`) 
                            VALUES (NULL, '$nombre' , '$apellido', '$ci', '$complemento_ci', '$correo', '$telefono', '1', 
                            current_timestamp(), current_timestamp());";
        $sentencia = $this->conexion->prepare($sql);
        if($sentencia->execute()){
            $id_persona = $this->conexion->lastInsertId();
            $sql = "INSERT INTO $tabla2 (`id`, `id_persona`, `id_rol`, `usuario`, 
                                `contrasenia`, `estado`, `created_at`, `updated_at`) 
                                VALUES (NULL, '$id_persona', '$rol', '$usuario', '$contrasenia', '1', 
                                current_timestamp(), current_timestamp());";
            $sentencia = $this->conexion->prepare($sql);
            if($sentencia->execute()){
            $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $registros;   
            }else{
                echo $this->alerta_fallo;
            }
        } 
    } 
}

?>
