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
                $this->idPabellon = $_POST['idPabellon'];
                $this->numeroEstacionamiento = $_POST['numeroEstacionamiento'];
                if (strlen($this->numeroEstacionamiento) > 1) {
                    $this->estacionamiento = new Estacionamiento();
                    $this->estacionamiento->registrarEstacionamiento("estacionamiento",$this->idPabellon, 
                                                                    $this->numeroEstacionamiento);
                    echo $this->redireccionarRecinto;
                }else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['actualizarEstacionamiento']):
                $this->idPabellon = $_POST['idPabellon'];
                $this->numeroEstacionamiento = $_POST['numeroEstacionamiento'];
                $idEstacionamiento = $_POST['idEstacionamiento'];
                if (strlen($this->numeroEstacionamiento) > 1) {
                    $this->estacionamiento = new Estacionamiento();
                    $this->estacionamiento->actualizarEstacionamiento("estacionamiento", $this->idPabellon,
                                                                    $this->numeroEstacionamiento, $idEstacionamiento);
                    echo $this->redireccionarRecinto;
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

