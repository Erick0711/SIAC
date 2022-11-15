<?php 
namespace App\Controlador;
use App\Modelo\Gasto;

class GastoControlador extends Gasto{
    public $gasto;
    protected   $nombre,
                $descripcion,
                $monto,
                $location = "<script> window.location.href =  '../vista/gasto.php';</script>",
                $alertCompletar = "<div class='alert alert-warning alert-dismissible fade show' role='alert'><strong>Alerta!</strong> Debes completar los campos de correctamente.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";

    public function index(){
        $this->gasto = new Gasto();
        $resultados = $this->gasto->mostrarTabla("tipo_gasto");
        return $resultados;
    }
    public function mostrar_gasto(){
        $this->gasto = new Gasto();
        $resultados = $this->gasto->mostrarTablaGasto("gasto","tipo_gasto");
        return $resultados;
    }


    public function consulta(){
        switch (isset($_REQUEST)) {

            case isset($_POST['guardarTipo']):
                    $this->nombre = $_POST['nombre'];
                if(strlen($this->nombre) > 1){
                    $this->gasto = new Gasto();
                    $resultados = $this->gasto->registrarTipoGasto("tipo_gasto",$this->nombre);
                    echo $this->location; 
                }else{
                    echo $this->alertCompletar;
                }
                break;

            case isset($_POST['guardarGasto']):
                $tipoGasto = $_POST['tipo_gasto'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['monto'];
                
                if(strlen($tipoGasto) > 1 && strlen($this->descripcion) > 1 && is_numeric($this->monto)){
                    $this->gasto = new Gasto();
                    $resultados = $this->gasto->registrarGasto("gasto",$tipoGasto, $this->descripcion, $this->monto);
                    echo $this->location; 
                }else{
                    echo $this->alertCompletar;
                }
                break;

            case isset($_POST['actualizarGasto']):
                $idGasto = $_POST['idGasto'];
                $tipoGasto = $_POST['tipo_gasto'];
                $descripcion = $_POST['descripcion'];
                $monto = $_POST['monto'];
                if(strlen($idGasto) > 1 && strlen($tipoGasto) > 1 && strlen($this->descripcion) > 1 && is_numeric($this->monto)){
                    $this->gasto = new Gasto();
                    $resultados = $this->gasto->registrarGasto("gasto",$tipoGasto, $this->descripcion, $this->monto);
                    echo $this->location; 
                    
                }else{
                    echo $this->alertCompletar;
                }     
                break;

            case isset($_GET['eliminar']):
                $idGasto = $_GET['eliminar'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->eliminarGasto("gasto", $idGasto); 
                echo $this->location; 
                break;

            default:
            //
                break;
        }
    }

}
