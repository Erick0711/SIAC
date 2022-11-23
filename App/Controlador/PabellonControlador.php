<?php
namespace App\Controlador;
use App\Modelo\Pabellon;
class PabellonControlador extends Pabellon
{
    public function index()
    {
        $this->pabellon = new Pabellon();
        $resultados = $this->pabellon->mostrarTabla("pabellon");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST))
        {
            case isset($_POST['guardarPabellon']):
                $this->numeroPabellon = $_POST['numero_pabellon'];
                if (strlen($this->numeroPabellon) > 1) {
                    $this->pabellon = new Pabellon();
                    $this->pabellon->registrarPabellon("pabellon", $this->numeroPabellon);
                    echo $this->redireccionarRecinto;
                }else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['editarPabellon']):
                $id = $_POST['idPabellon'];
                $this->numeroPabellon = $_POST['numero_pabellon'];
                if (strlen($this->numeroPabellon) > 1) {
                    $this->pabellon = new Pabellon();
                    $this->pabellon->actualizarPabellon("pabellon", $this->numeroPabellon, $id);
                    echo $this->redireccionarRecinto;
                }else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_GET['eliminar']):
                $idAPabellon = $_GET['eliminar'];
                    $this->pabellon = new Pabellon();
                    $this->pabellon->eliminarPabellon("pabellon", $idAPabellon);
                    echo $this->redireccionarRecinto;
                break;
            default:
                break;
        }
    }
}
