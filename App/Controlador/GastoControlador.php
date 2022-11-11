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
        switch (isset($_POST)) {

            case isset($_POST['guardarTipo']):
                $nombre = $_POST['nombre'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->registrarTipoGasto("tipo_gasto",$nombre);
                echo "<script> window.location.href =  '../vista/gasto.php';</script>";
                break;

            case isset($_POST['guardarGasto']):
                $tipoGasto = $_POST['tipo_gasto'];
                $descripcion = $_POST['descripcion'];
                $monto = $_POST['monto'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->registrarGasto("gasto",$tipoGasto, $descripcion, $monto);
                echo "<script> window.location.href =  '../vista/gasto.php';</script>";
                break;

            case isset($_POST['actualizarGasto']):
                $idGasto = $_POST['idGasto'];
                $tipoGasto = $_POST['tipo_gasto'];
                $descripcion = $_POST['descripcion'];
                $monto = $_POST['monto'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->editarGasto("gasto",$tipoGasto, $descripcion, $monto,$idGasto);
                echo "<script> window.location.href =  '../vista/gasto.php';</script>";            
                break;

            case isset($_GET['eliminar']):
                $idGasto = $_GET['eliminar'];
                $this->gasto = new Gasto();
                $resultados = $this->gasto->eliminarGasto("gasto", $idGasto);
                echo "<script> window.location.href =  '../vista/gasto.php';</script>";          
                break;

            default:
                break;
        }
    }
    // public function guardarTipoGasto(){
    //     if(isset($_POST['guardarTipo'])){
    //         $nombre = $_POST['nombre'];
    //         $this->gasto = new Gasto();
    //         $resultados = $this->gasto->registrarTipoGasto("tipo_gasto",$nombre);
    //         echo "<script> window.location.href =  '../vista/gasto.php';</script>";
    //     }
    // public function guardarGasto(){
    //     if(isset($_POST['guardarGasto'])){
    //         $tipoGasto = $_POST['tipo_gasto'];
    //         $descripcion = $_POST['descripcion'];
    //         $monto = $_POST['monto'];
    //         $this->gasto = new Gasto();
    //         $resultados = $this->gasto->registrarGasto("gasto",$tipoGasto, $descripcion, $monto);
    //         echo "<script> window.location.href =  '../vista/gasto.php';</script>";
    //     }
    // }
    // public function actualizarGasto(){
    //     if(isset($_POST['actualizarGasto'])){
    //         $idGasto = $_POST['idGasto'];
    //         $tipoGasto = $_POST['tipo_gasto'];
    //         $descripcion = $_POST['descripcion'];
    //         $monto = $_POST['monto'];
    //         $this->gasto = new Gasto();
    //         $resultados = $this->gasto->editarGasto("gasto",$tipoGasto, $descripcion, $monto,$idGasto);
    //         echo "<script> window.location.href =  '../vista/gasto.php';</script>";
    //     }    
    // }

    // public function eliminar(){
    //     if(isset($_GET['eliminar'])){
    //         $idGasto = $_GET['eliminar'];
    //         $this->gasto = new Gasto();
    //         $resultados = $this->gasto->eliminarGasto("gasto", $idGasto);
    //         echo "<script> window.location.href =  '../vista/gasto.php';</script>";
    //     }    
    // }
}   
?>



