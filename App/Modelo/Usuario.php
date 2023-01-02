<?php
namespace App\Modelo;
use App\config\Alerta,
    App\config\Redireccion,
    App\config\Conexion,
    App\config\Complemento,
    PDO;
class Usuario extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   
                $nombre,
                $apellido,
                $ci,
                $complemento_ci,
                $correo,
                $telefono,                  // AREGLAR LAS CLASES QUE SE EXTIENDEN PARA COLOCAR UN SOLO MODELO DE LIBS MODELO
                $usuario,
                $campo_usuario,
                $contrasenia,
                $contrasenia_hash,
                $rol;
                
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
    public function mostrarTabla($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarUsuario($tabla, $tabla2,$nombre, $apellido, $ci, $complemento_ci, 
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
            // }else{
            //     echo $this->alerta_fallo;
            }
        } 
    } 
    public function actualizarUsuario($tabla,$contrasenia_hash,$rol, $id) 
    {
            $sql = "UPDATE $tabla SET id_rol = '$rol', contrasenia = '$contrasenia_hash' WHERE usuario.id = $id";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $registros;   
    } 
    public function eliminar($tabla, $id)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$id");
        return $registros;
    }
    public function activar($tabla, $id)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id= $id");
        return $registros;
    }
    /********************************************** LOGIN ******************************************************/ 
    public function buscar($usuario, $contrasenia)
    {
        $sql = "SELECT usuario.usuario, usuario.contrasenia, rol.nombre_rol
                FROM usuario INNER JOIN rol ON rol.id = usuario.id_rol
                WHERE usuario.usuario = '$usuario'";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            $registros = $sentencia->fetch(PDO::FETCH_ASSOC);
            $hash = $registros['contrasenia'];
            if(password_verify($contrasenia, $hash)){
                return $registros;
            }
    }
}
?>