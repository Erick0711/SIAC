<?php 
namespace App\libs;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    App\config\Complemento,
    PDO;

class Modelo extends Conexion{

    function Modelo()
    {
        parent::__construct();
    }

    function mostrar($tabla, $mostrar = '*')
    {
        if(is_array($mostrar)){
            $resultado = implode(",", $mostrar);
            $sentencia = $this->conexion->prepare("SELECT {$resultado} FROM $tabla");
            $sentencia->execute();
            $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $registros;
        }else{
            $sentencia = $this->conexion->prepare("SELECT {$mostrar} FROM $tabla");
            $sentencia->execute();
            $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
            return $registros;
        }
    }
}
?>