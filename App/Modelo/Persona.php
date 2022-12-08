<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Complemento,
    PDO;
class Persona extends Conexion{
    use Complemento;
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
    function mostrar($tabla){
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla ORDER BY id DESC");
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