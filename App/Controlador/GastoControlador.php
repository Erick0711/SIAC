<?php 
namespace App\Controlador;
use App\Modelo\Gasto;

class GastoControlador extends Gasto{
    public $gasto;

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
        $location = "<script> window.location.href =  '../vista/gasto.php';</script>";
        $locationDelay = "<script> setTimeout('location.href = '../vista/gasto.php';',1500);</script>";
        switch (isset($_REQUEST)) {

            case isset($_POST['guardarTipo']):
                $nombre = $_POST['nombre'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->registrarTipoGasto("tipo_gasto",$nombre);
                echo $location;  
                break;

            case isset($_POST['guardarGasto']):
                $tipoGasto = $_POST['tipo_gasto'];
                $descripcion = $_POST['descripcion'];
                $monto = $_POST['monto'];
                if(mb_strlen($tipoGasto) > 1 && mb_strlen($descripcion) > 1){
                $this->gasto = new Gasto();
                $resultados = $this->gasto->registrarGasto("gasto",$tipoGasto, $descripcion, $monto);
                echo $location; 
                }else{
                    echo "<div class='alert alert-warning' role='alert'>Completar lo campos correctamente!</div>";
                }
                break;

            case isset($_POST['actualizarGasto']):
                $idGasto = $_POST['idGasto'];
                $tipoGasto = $_POST['tipo_gasto'];
                $descripcion = $_POST['descripcion'];
                $monto = $_POST['monto'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->editarGasto("gasto",$tipoGasto, $descripcion, $monto,$idGasto);      
                echo $location;        
                break;

            case isset($_GET['eliminar']):
                $idGasto = $_GET['eliminar'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->eliminarGasto("gasto", $idGasto);
                echo $location;       
                break;

            default:
            //
                break;
        }
    }
}   
?>



