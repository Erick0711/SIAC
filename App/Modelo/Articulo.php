<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    App\config\Complemento;

class Articulo extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $articulo,
                $tipoArticulo,
                $descripcion,
                $monto;

    public function Articulo()
    {
        parent::__construct();
    }
    /********************************************** TIPO DE ARTICULO ******************************************************/ 
    public function mostrarTipo($tabla)
    {
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    public function registrarTipo($tabla, $tipoArticulo)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `nombre_articulo`, `estado`, `created_at`, `updated_at`) 
                                            VALUES (NULL, '$tipoArticulo', '1', current_timestamp(), current_timestamp())");
        return $registros;
    }
    public function actualizarTipo($tabla,$tipoArticulo,$id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET `nombre_articulo` = '$tipoArticulo' 
                                                WHERE `tipo_articulo`.`id` = $id;");
        return $registros;
    }
    public function compararTipo($tabla, $numeroApartamento,$columna)
    {
        $registros = $this->ejecutarFetch("SELECT $columna FROM $tabla 
                                            WHERE $columna='$numeroApartamento'");
        return $registros;
    }
    public function activarTipo($tabla, $id)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id= $id");
        return $registros;
    }
    /********************************************** ARTICULO ******************************************************/ 
    public function mostrar($tabla, $tabla2)
    {
        $registros = $this->ejecutarFetchAll("SELECT tipo_articulo.id, tipo_articulo.nombre_articulo, articulo.id 
                                            AS articulo_id, articulo.descripcion, articulo.monto_expensa, articulo.estado 
                                            FROM $tabla INNER JOIN $tabla2 ON tipo_articulo.id = articulo.id_tipo_articulo");
        return $registros;
    }
    public function registrar($tabla,$tipoArticulo,$descripcion,$monto)
    {
        $registros = $this->ejecutarFetchAll( "INSERT INTO $tabla (`id`, `id_tipo_articulo`, `descripcion`, `monto_expensa`, 
                                            `estado`, `created_at`, `updated_at`) VALUES (NULL, '$tipoArticulo', '$descripcion', 
                                            '$monto', '1', current_timestamp(), current_timestamp());");
        return $registros;
    }
    public function actualizar($tabla,$tipoArticulo,$descripcion, $monto, $id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET `id_tipo_articulo` = '$tipoArticulo', 
                                            `descripcion` = '$descripcion', `monto_expensa` = '$monto' 
                                            WHERE `articulo`.`id` = $id");
        return $registros;
    }
    public function eliminar($tabla, $id)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$id");
        return $registros;
    }
    public function comparar($tabla, $descripcion)
    {
        $registros = $this->ejecutarFetch("SELECT * FROM $tabla WHERE descripcion = '$descripcion'");
        return $registros;
    }
    public function compararTodo($tabla, $descripcion, $monto)
    {
        $registros = $this->ejecutarFetch("SELECT * FROM $tabla WHERE descripcion = '$descripcion' 
                                            AND monto_expensa = '$monto'");
        return $registros;
    }
    public function activar($tabla, $id)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id= $id");
        return $registros;
    }
}
?>
