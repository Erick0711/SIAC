<?php
namespace App\Modelo;
use App\config\Conexion,
    App\config\Redireccion,
    App\config\Alerta,
    App\config\Complemento;

class Apartamento extends Conexion
{
    use Alerta,Redireccion,Complemento;
    protected   $apartamento,
                $numeroApartamento;

    public function Apartamento()
    {
        parent::__construct();
    }

    public function mostrar($tabla)
    {
        $registros = $this->ejecutarFetchAll("SELECT * FROM $tabla");
        return $registros;
    }
    public function registrar($tabla, $numeroApartamento)
    {
        $registros = $this->ejecutarFetchAll("INSERT INTO $tabla (`id`, `numero_apartamento`, `estado`, `created_at`, `updated_at`) 
                                            VALUES (NULL, '$numeroApartamento', '1', current_timestamp(), current_timestamp())");
        return $registros;
    }
    public function actualizar($tabla, $numeroApartamento,$id)
    {
        $registros = $this->ejecutarFetchAll("UPDATE $tabla SET numero_apartamento = '$numeroApartamento' 
                                            WHERE apartamento.id='$id'");
        return $registros;
    }
    public function eliminar($tabla, $idApartamento){
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=0 WHERE id=$idApartamento");
        return $registros;
    }
    public function comparar($tabla, $numeroApartamento)
    {
        $registros = $this->ejecutarFetch("SELECT numero_apartamento FROM $tabla 
                                            WHERE numero_apartamento='$numeroApartamento'");
        return $registros;
    }
    public function activar($tabla, $idApartamento)
    {
        $registros = $this->ejecutarFetch("UPDATE $tabla SET estado=1 WHERE id=$idApartamento");
        return $registros;
    }
}
?>