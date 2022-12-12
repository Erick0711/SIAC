<?php
namespace App\Modelo;
use App\config\Alerta,
    App\config\Redireccion,
    App\config\Conexion,
    App\config\Complemento,
    PDO;
class Funcionario extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $funcionario,
                $nombre,
                $apellido,
                $ci,
                $complemento_ci,
                $correo,
                $telefono,                  // AREGLAR LAS CLASES QUE SE EXTIENDEN PARA COLOCAR UN SOLO MODELO DE LIBS MODELO
                $cargo,
                $salario;
                
    public function Funcionario()
    {
        parent::__construct();
    }
    // public function mostrar($tabla)
    // {
    //     $sql = "SELECT * FROM $tabla";
    //     $sentencia = $this->conexion->prepare($sql);
    //     $sentencia->execute();
    //     $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    //     return $registros;
    // }
    public function mostrar($tabla,$tabla2)
    {
        $sql = "SELECT persona.id AS persona_id, persona.nombre, persona.apellido, persona.ci, persona.complemento_ci, 
                persona.correo,persona.telefono, funcionario.id AS funcionario_id, funcionario.cargo, funcionario.salario, 
                funcionario.estado FROM $tabla INNER JOIN $tabla2 on persona.id = funcionario.id_persona";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrar($tabla, $tabla2,$nombre, $apellido, $ci, $complemento_ci, 
                                $correo, $telefono, $cargo, $salario)
    {
        $sql = "INSERT INTO $tabla (`id`, `nombre`, `apellido`, `ci`, `complemento_ci`, `correo`, 
                            `telefono`, `estado`, `created_at`, `updated_at`) 
                            VALUES (NULL, '$nombre' , '$apellido', '$ci', '$complemento_ci', '$correo', '$telefono', '1', 
                            current_timestamp(), current_timestamp());";
        $sentencia = $this->conexion->prepare($sql);
        if($sentencia->execute()){
            $id_persona = $this->conexion->lastInsertId();
            $sql = "INSERT INTO $tabla2 (`id`, `id_persona`, `cargo`, `salario`, 
                                `estado`, `created_at`, `updated_at`) 
                                VALUES (NULL, '$id_persona', '$cargo', '$salario','1', 
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
    public function actualizar($tabla,$cargo, $salario,$id)
    {
            $sql = "UPDATE $tabla SET `cargo` = '$cargo', `salario` = '$salario' WHERE `funcionario`.`id` = $id; ";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->execute();
            $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $registros;   
    } 
    public function eliminar($tabla, $idFuncionario)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idFuncionario");
        return $registros;
    }
    public function activar($tabla, $idFuncionario)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id= $idFuncionario");
        return $registros;
    }
}
?>