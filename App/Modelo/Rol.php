<?php
namespace App\Modelo;
use App\config\Conexion;
use PDO;
class Rol extends Conexion
{
    protected   $usuario,
                $contrasenia;

    public function Rol()
    {
        parent::__construct();
    }
    public function buscar($usuario, $contrasenia)
    {
        $sql = "SELECT usuario.usuario, usuario.contrasenia, rol.nombre_rol
                FROM usuario INNER JOIN rol ON rol.id = usuario.id_rol
                WHERE usuario.usuario = '$usuario' AND usuario.contrasenia = '$contrasenia'";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch(PDO::FETCH_ASSOC);
        return $registros;
    }
}
?>
