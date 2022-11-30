<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Alerta,
    App\config\Redireccion,
    App\config\Complemento,
    PDO;
class Pabellon extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $pabellon,
                $numeroPabellon;

    public function Recinto()
    {
        parent::__construct();
    }
    public function mostrarTabla($tabla)
    {
        $sql = "SELECT * FROM $tabla";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function registrarPabellon($tabla, $numeroPabellon)
    {
        $sql = "INSERT INTO $tabla (`id`, `numero_pabellon`, `estado`, `created_at`, `updated_at`) 
                VALUES (NULL, '$numeroPabellon', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function actualizarPabellon($tabla, $numeroPabellon,$id)
    {
        $sql = "UPDATE $tabla SET numero_pabellon = '$numeroPabellon' 
                WHERE pabellon.id='$id'";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function eliminarPabellon($tabla, $idPabellon){
        $sql = "UPDATE $tabla SET estado=0 WHERE id=$idPabellon";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch(PDO::FETCH_LAZY);
        return $registros;
    }
    public function comparar($tabla, $numeroPabellon)
    {
        $registros = $this->ejecutarFetch("SELECT numero_pabellon FROM $tabla 
                                            WHERE numero_pabellon = '$numeroPabellon'");
        return $registros;
    }
}
?>