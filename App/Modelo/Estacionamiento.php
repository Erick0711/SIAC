<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Alerta,
    App\config\Redireccion,
    App\config\Complemento,
    PDO;
class Estacionamiento extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $estacionamiento,  
                $numeroEstacionamiento,
                $idPabellon;

    public function Estacionamiento()
    {
        parent::__construct();
    }
    public function mostrarTabla($tabla, $tabla2)
    {
        $registros = $this->ejecutarFetchAll("SELECT pabellon.id, pabellon.numero_pabellon, estacionamiento.id 
        as estacionamiento_id, estacionamiento.numero_estacionamiento, estacionamiento.estado 
        FROM $tabla INNER JOIN $tabla2 ON pabellon.id = estacionamiento.id_pabellon");
        return $registros;
    }
    public function registrarEstacionamiento($tabla, $numeroPabellon, $numeroEstaciomiento)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `id_pabellon`, `numero_estacionamiento`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$numeroPabellon', '$numeroEstaciomiento','1', current_timestamp(), current_timestamp())");
        return $registros;
    }
    public function actualizarEstacionamiento($tabla, $idPabellon ,$numeroEstaciomiento, $id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET `id_pabellon` = '$idPabellon', `numero_estacionamiento`=        '$numeroEstaciomiento' WHERE `estacionamiento`.`id` = $id");
        return $registros;
    }
    public function eliminarEstacionamiento($tabla, $idEstacionamiento){
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idEstacionamiento");
        return $registros;
    }
    public function comparar($tabla, $numeroEstaciomiento, $idPabellon)
    {
        $registros = $this->ejecutarFetch("SELECT * FROM $tabla WHERE numero_estacionamiento = '$numeroEstaciomiento' 
                                            AND  id_pabellon = $idPabellon");
        return $registros;
    }
    public function activar($tabla, $idEstacionamiento){
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id=$idEstacionamiento");
        return $registros;
    }
}
?>