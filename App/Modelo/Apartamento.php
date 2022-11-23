<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    PDO;
class Apartamento extends Conexion
{
    use Alerta,Redireccion;
    protected   $apartamento,
                $numeroApartamento;

    public function Apartamento()
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
    public function registrarApartamento($tabla, $numeroApartamento)
    {
        $sql = "INSERT INTO $tabla (`id`, `numero_apartamento`, `estado`, `created_at`, `updated_at`) 
                VALUES (NULL, '$numeroApartamento', '1', current_timestamp(), current_timestamp())";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function editarApartamento($tabla, $numeroApartamento,$id)
    {
        $sql = "UPDATE $tabla SET numero_apartamento = '$numeroApartamento' 
                WHERE apartamento.id='$id'";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetchAll(PDO::FETCH_ASSOC);
        return $registros;
    }
    public function eliminarApartamento($tabla, $idApartamento){
        $sql = "UPDATE $tabla SET estado=0 WHERE id=$idApartamento";
        $sentencia = $this->conexion->prepare($sql);
        $sentencia->execute();
        $registros = $sentencia->fetch(PDO::FETCH_LAZY);
        return $registros;
    }
}
?>