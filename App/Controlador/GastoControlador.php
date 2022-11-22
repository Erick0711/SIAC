<?php 
namespace App\Controlador;
use App\Modelo\Gasto;
class GastoControlador extends Gasto
{
    public function index()
    {
        $this->gasto = new Gasto();
        $resultados = $this->gasto->mostrarTabla("tipo_gasto");
        return $resultados;
    }
    public function mostrar_gasto()
    {
        $this->gasto = new Gasto();
        $resultados = $this->gasto->mostrarTablaGasto("gasto","tipo_gasto");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) 
        {
            case isset($_POST['guardarTipo']):
                    $this->nombre = $_POST['tipoGasto'];
                if(strlen($this->nombre) > 1){
                    $this->gasto = new Gasto();
                    $this->gasto->registrarTipoGasto("tipo_gasto",$this->nombre);
                    echo $this->redireccionarGasto; 
                }else{
                    echo $this->alerta_validacion;
                }
                break;

                // QUEDARA PARA REALIZAR CRUD DE TIPO GASTO
                case isset($_POST['actualizarTipo']):
                    $this->idTipoGasto = $_POST['idTipoGasto'];
                    $this->nombre = $_POST['tipoGasto'];
                if(strlen($this->nombre) > 1){
                    $this->gasto = new Gasto();
                    $this->gasto->actualizarTipoGasto("tipo_gasto",$this->idTipoGasto,$this->nombre);
                    echo $this->redireccionarGasto; 
                }else{
                    echo $this->alerta_validacion;
                }
                break;

                case isset($_GET['eliminarTipo']):
                    $idTipoGasto = $_GET['eliminarTipo'];
                    $this->gasto = new Gasto();
                    $this->gasto->eliminarGasto("tipo_gasto", $idTipoGasto); 
                    echo $this->redireccionarGasto; 
                    break;
    
            case isset($_POST['guardarGasto']):
                $tipoGasto = $_POST['tipo_gasto'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['monto'];
                
                if(strlen($tipoGasto) > 1 && strlen($this->descripcion) > 1 && is_numeric($this->monto)){
                    $this->gasto = new Gasto();
                    $this->gasto->registrarGasto("gasto",$tipoGasto, $this->descripcion, $this->monto);
                    echo $this->redireccionarGasto; 
                }else{
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['actualizarGasto']):
                $idGasto = $_POST['idGasto'];
                $tipoGasto = $_POST['tipo_gasto'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['monto'];
                if(strlen($idGasto) > 1 && strlen($tipoGasto) > 1 && strlen($this->descripcion) > 1 && is_numeric($this->monto)){
                    $this->gasto = new Gasto();
                    $this->gasto->editarGasto("gasto",$tipoGasto, $this->descripcion, $this->monto, $idGasto);
                    echo $this->redireccionarGasto; 
                }else{
                    echo $this->alerta_validacion;
                }     
                break;

            case isset($_GET['eliminar']):
                $idGasto = $_GET['eliminar'];
                $this->gasto = new Gasto();
                $this->gasto->eliminarGasto("gasto", $idGasto); 
                echo $this->redireccionarGasto; 
                break;

            default:
                break;
        }
    }
}
