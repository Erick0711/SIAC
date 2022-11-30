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
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    public function registrarPabellon($tabla, $numeroPabellon)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `numero_pabellon`, `estado`, `created_at`, `updated_at`) 
                                            VALUES (NULL, '$numeroPabellon', '1', current_timestamp(), current_timestamp())");
        return $registros;
    }
    public function actualizarPabellon($tabla, $numeroPabellon,$id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET numero_pabellon = '$numeroPabellon' 
                                            WHERE pabellon.id='$id'");
        return $registros;
    }
    public function eliminarPabellon($tabla, $idPabellon){
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idPabellon");
        return $registros;
    }
    public function comparar($tabla, $numeroPabellon)
    {
        $registros = $this->ejecutarFetch("SELECT numero_pabellon FROM $tabla 
                                            WHERE numero_pabellon = '$numeroPabellon'");
        return $registros;
    }
    public function activarTipo($tabla, $idPabellon){
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id=$idPabellon");
        return $registros;
    }
}
?>