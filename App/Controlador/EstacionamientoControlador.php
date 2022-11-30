<?php
namespace App\Controlador;
use App\Modelo\Estacionamiento;
class EstacionamientoControlador extends Estacionamiento
{
    public function index()
    {
        $this->estacionamiento = new Estacionamiento();
        $resultados = $this->estacionamiento->mostrarTabla("estacionamiento", "pabellon");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST))
        {
            case isset($_POST['guardarEstacionamiento']):
                $this->estacionamiento = new Estacionamiento();
                $this->idPabellon = $_POST['idPabellon'];
                $this->numeroEstacionamiento = $_POST['numeroEstacionamiento'];
                $dato = $this->estacionamiento->comparar('estacionamiento', $this->numeroEstacionamiento, $this->idPabellon);
                if($this->numeroEstacionamiento >= 1 && preg_match($this->numeros, $this->numeroEstacionamiento)){
                    if(isset($dato['numero_estacionamiento']) && $dato['numero_estacionamiento'] == $this->numeroEstacionamiento){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->estacionamiento->registrarEstacionamiento("estacionamiento",$this->idPabellon, 
                        $this->numeroEstacionamiento);
                        echo $this->redireccionarRecinto;
                    }
                }else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['actualizarEstacionamiento']):
                $this->estacionamiento = new Estacionamiento();
                $this->idPabellon = $_POST['idPabellon'];
                $this->numeroEstacionamiento = $_POST['numeroEstacionamiento'];
                $idEstacionamiento = $_POST['idEstacionamiento'];
                $dato = $this->estacionamiento->comparar('estacionamiento', $this->numeroEstacionamiento, $this->idPabellon);
                if($this->numeroEstacionamiento >= 1 && preg_match($this->numeros, $this->numeroEstacionamiento)){
                    if(isset($dato['numero_estacionamiento']) && $dato['numero_estacionamiento'] == $this->numeroEstacionamiento){
                    echo $this->alerta_igualdad;
                }else{
                    $this->estacionamiento->actualizarEstacionamiento("estacionamiento", $this->idPabellon,
                                                                    $this->numeroEstacionamiento, $idEstacionamiento);
                    echo $this->redireccionarRecinto;
                }
                }else {
                    echo $this->alerta_validacion;
                }
                break;

                case isset($_GET['eliminarEstacionamiento']):
                    $idEstacionamiento = $_GET['eliminarEstacionamiento'];
                        $this->estacionamiento = new Estacionamiento();
                        $this->estacionamiento->eliminarEstacionamiento("estacionamiento", $idEstacionamiento);
                        echo $this->redireccionarRecinto;
                    break;
            default:
                break;
        }
    }
}

