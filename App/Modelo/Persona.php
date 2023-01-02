<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Complemento,
    App\config\Alerta,
    App\config\Redireccion,
    PDO;
class Persona extends Conexion{
    use Complemento,Redireccion,Alerta;
    protected   $persona,
                $nombre,
                $apellido,
                $ci,
                $complemento_ci,
                $correo,
                $telefono;
    public function Persona(){
        parent::__construct();
    }
    function mostrar($tabla)
    {
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    function registrar($tabla,$nombre, $apellido, $ci, $complemento_ci ="", $correo, $telefono)
    {
        $registros = $this->ejecutarFetchAll(
            "INSERT INTO $tabla 
            (`id`, `nombre`, `apellido`, `ci`, 
            `complemento_ci`, `correo`, `telefono`, 
            `estado`, `created_at`, `updated_at`) 
            VALUES (NULL, '$nombre', '$apellido', '$ci', 
            '$complemento_ci', '$correo', '$telefono', '1', 
            current_timestamp(), current_timestamp());");
        return $registros;
    }
    function actualizar($tabla,$nombre, $apellido, $ci, $complemento_ci, $correo, $telefono,$id)
    {
        $registros = $this->ejecutarFetchAll(
            "UPDATE $tabla 
            SET `nombre` = '$nombre', 
            `apellido` = '$apellido', 
            `ci` = '$ci', 
            `complemento_ci` = '$complemento_ci', 
            `correo` = '$correo', 
            `telefono` = '$telefono' 
            WHERE `persona`.`id` = $id; ");
        return $registros;
    }

    function registrarCopropietario($tabla,$apartamento, $residente, $mascota,$idPersona)
    {
        $registros = $this->ejecutarFetchAll(
            "INSERT INTO $tabla 
            (`id`, `id_persona`, `id_departamento`, `cant_residentes`, 
            `cant_mascotas`, `estado`, `created_at`, `updated_at`) 
            VALUES (NULL, 
                '$idPersona', 
                '$apartamento',
                '$residente', 
                '$mascota',
                '1', 
                current_timestamp(), 
                current_timestamp());");
        return $registros;
    }
    function registrarUsuario($tabla,$rol,$usuario, $contrasenia ,$idPersona)
    {
        $registros = $this->ejecutarFetchAll(
            "INSERT INTO $tabla 
            (`id`, `id_persona`, `id_rol`, `usuario`, 
            `contrasenia`, `estado`, `created_at`, `updated_at`) 
            VALUES (NULL, 
            '$idPersona', 
            '$rol', 
            '$usuario', 
            '$contrasenia', 
            '1', 
            current_timestamp(), 
            current_timestamp());");
        return $registros;
    }
    function registrarFuncionario($tabla,$cargo,$salario ,$idPersona)
    {
        $registros = $this->ejecutarFetchAll(
            "INSERT INTO $tabla
            (`id`, `id_persona`, `cargo`, `salario`, 
            `estado`, `created_at`, `updated_at`) 
            VALUES (NULL, 
            '$idPersona', 
            '$cargo', 
            '$salario',
            '1', 
            current_timestamp(), 
            current_timestamp());");
        return $registros;
    }
    public function eliminar($tabla, $id)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$id");
        return $registros;
    }
    function buscar($consulta){
        $sentencia = $this->conexion->prepare("SELECT * FROM persona WHERE nombre LIKE '%$consulta%' LIMIT 5");
        $sentencia->execute();  
        $resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $resultado;
    }
}
?>