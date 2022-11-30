<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    App\config\Complemento,
    PDO;
class Gasto extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $gasto,
                $tipoGasto,
                $nombre,
                $descripcion,
                $monto;

    public function Gasto()
    {
        parent::__construct();
    }
    public function mostrarTipo($tabla)
    {
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    public function mostrar($tabla,$tabla2)
    {
        $registros = $this->ejecutarFetchAll("SELECT tipo_gasto.id AS tipo_gasto_id, tipo_gasto.nombre, gasto.id, 
                                            gasto.descripcion, gasto.monto_gasto, gasto.estado FROM $tabla2 
                                            INNER JOIN $tabla on tipo_gasto.id = gasto.id_tipo_gasto");
        return $registros;
    }
    /********************************************** TIPO DE GASTO ******************************************************/ 
    public function registrarTipo($tabla,$nombre)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `nombre`, `estado`, `created_at`, `updated_at`) 
                                            VALUES (NULL, '$nombre', '1', current_timestamp(), current_timestamp())");
        return $registros;
    }
    public function actualizarTipo($tabla, $idTipoGasto, $nombre)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET `nombre` = '$nombre' WHERE `tipo_gasto`.`id` = $idTipoGasto;");
        return $registros;
    }
    public function eliminarTipo($tabla, $idTipoGasto)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idTipoGasto");
        return $registros;
    }
    public function compararTipo($tabla, $tipoGasto)
    {
        $registros = $this->ejecutarFetch("SELECT nombre FROM $tabla 
                                            WHERE nombre = '$tipoGasto'");
        return $registros;
    }
    public function activarTipo($tabla, $idTipoGasto)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id= $idTipoGasto");
        return $registros;
    }
    /********************************************** GASTO ******************************************************/ 
    public function registrar($tabla,$tipoGasto,$descripcion,$monto)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `id_tipo_gasto`, `descripcion`, `monto_gasto`, `estado`, `created_at`, `updated_at`) VALUES (NULL, '$tipoGasto', '$descripcion', '$monto', '1', current_timestamp(), current_timestamp()) ");
        return $registros;
    }
    public function actualizar($tabla,$tipoGasto,$descripcion,$monto,$id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET `id_tipo_gasto` = '$tipoGasto', `descripcion` = '$descripcion', 
                                            `monto_gasto` = '$monto' WHERE `gasto`.`id` = $id");
        return $registros;
    }
    public function eliminarGasto($tabla, $idGasto)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idGasto");
        return $registros;
    }
    public function comparar($tabla, $descripcion, $monto)
    {
        $registros = $this->ejecutarFetch("SELECT * FROM $tabla WHERE descripcion = '$descripcion' 
                                            AND monto_gasto = '$monto'");
        return $registros;
    }
    public function activar($tabla, $idGasto)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id= $idGasto");
        return $registros;
    }
}
?>
