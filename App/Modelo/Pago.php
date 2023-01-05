<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    App\config\Complemento,
    PDO;
class Pago extends Conexion
{
    use Alerta,Redireccion,Complemento;

    public function sumarExpensa($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT SUM(articulo.monto_expensa) FROM $tabla");
        return $registros;
    }
    public function contarCopropietario($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT COUNT(copropietario.id) FROM $tabla");
        return $registros;
    }
    public function contarPago($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT COUNT(copropietario.estado_deuda) 
        FROM $tabla
        WHERE estado_deuda='0'");
        return $registros;
    }
    public function contarPorCobrar($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT COUNT(copropietario.estado_deuda) 
        FROM $tabla
        WHERE estado_deuda='1'");
        return $registros;
    }
    public function sumarTotalPago($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT SUM(pago.total_expensa) FROM $tabla");
        return $registros;
    }
    public function sumarResidente($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT SUM(copropietario.cant_residentes) FROM $tabla");
        return $registros;
    }
    public function sumarMascota($tabla)
    {
        $registros = $this->ejecutarFetch("SELECT SUM(copropietario.cant_mascotas) FROM $tabla");
        return $registros;
    }


















    public function obtenerTipoPago($tabla)
    {
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    public function guardarPago($tabla,$id,$tipoPago,$totalExpensa)
    {
        $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, 
        `id_copropietario`, 
        `id_articulo`, 
        `id_tipo_pago`, 
        `total_expensa`,
        `estado`, 
        `created_at`,
        `updated_at`) 
        VALUES (NULL, 
        '$id',
        '1',  
        '$tipoPago',
        '$totalExpensa',
        'estado',  
        current_timestamp(), 
        current_timestamp())");
    }
    public function buscarCopropietario($tabla, $nombre, $apellido, $ci, $apartamento){
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla WHERE nombre='$nombre' AND apellido='$apellido' AND ci='$ci' AND numero_apartamento='$apartamento'");
        return $registros;
    }
    public function obtenerCopropietario($tabla, $id)
    {
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla WHERE id = $id");
        return $registros;
    }
    public function actualizarDeuda($tabla, $id){
        $this->ejecutarFetch("UPDATE $tabla SET estado_deuda=0 WHERE id=$id");
    }
}
?>
