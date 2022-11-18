<?php
namespace App\Modelo;
use App\config\Conexion;
use PDO;
class Apartamento extends Conexion
{
    protected   $apartamento,
                $numeroApartamento,
                $location       = "<script> window.location.href =  '../vista/apartamento.php';</script>",
                $alertCompletar = "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Alerta!</strong> 
                                    Debes completar los campos de correctamente.<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                    <span aria-hidden='true'>&times;</span></button></div>";

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