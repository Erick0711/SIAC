<?php
namespace App\Modelo;
use App\config\Alerta,
    App\config\Redireccion,
    App\config\Conexion,
    App\config\Complemento,
    PDO;
class Copropietario extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $copropietario,
                $nombre,
                $apellido,
                $ci,
                $complemento_ci,
                $correo,
                $telefono,                  // AREGLAR LAS CLASES QUE SE EXTIENDEN PARA COLOCAR UN SOLO MODELO DE LIBS MODELO
                $apartamento,
                $residente,
                $mascota;
                
    public function Copropietario()
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
    public function registrar($tabla, $tabla2,$nombre, $apellido, $ci, $complemento_ci, 
                                $correo, $telefono, $apartamento, $residentes, $mascotas)
    {
        $sql = "INSERT INTO $tabla (`id`, `nombre`, `apellido`, `ci`, `complemento_ci`, `correo`, 
                            `telefono`, `estado`, `created_at`, `updated_at`) 
                            VALUES (NULL, '$nombre' , '$apellido', '$ci', '$complemento_ci', '$correo', '$telefono', '1', 
                            current_timestamp(), current_timestamp());";
        $sentencia = $this->conexion->prepare($sql);
        if($sentencia->execute()){
            $id_persona = $this->conexion->lastInsertId();
            $sql = "INSERT INTO $tabla2 (`id`, `id_persona`, `id_departamento`, `cant_residentes`, 
                                        `cant_mascotas`, `estado`, `created_at`, `updated_at`) 
                                        VALUES (NULL, '$id_persona', '$apartamento','$residentes', '$mascotas','1', 
                                        current_timestamp(), current_timestamp());";
            $sentencia = $this->conexion->prepare($sql);
            if($sentencia->execute()){
            $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $registros;   
            }else{
                echo $this->mensaje("danger","dark","Alerta!","Fallo en el registro de funcionario");
            }
        } 
    } 
    public function actualizar($tabla,$apartamento, $residente, $mascota, $id)
    {
            $sql = "UPDATE $tabla SET `id_departamento` = '$apartamento', `cant_residentes` = '$residente', `cant_mascotas` = '$mascota' WHERE `copropietario`.`id` = $id;";
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
}
?>