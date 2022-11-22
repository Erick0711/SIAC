<?php
namespace App\Controlador;
use App\Modelo\Recinto;
class RecintoControlador extends Recinto
{
    public function index()
    {
        $this->recinto = new Recinto();
        $resultados = $this->recinto->mostrarTabla("pabellon");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST))
        {
            case isset($_POST['guardarPabellon']):
                $this->numeroPabellon = $_POST['numero_pabellon'];
                if (strlen($this->numeroPabellon) > 1) {
                    $this->recinto = new recinto();
                    $this->recinto->registrarPabellon("pabellon", $this->numeroPabellon);
                    echo $this->location;
                }else {
                    echo $this->alertCompletar;
                }
                break;

                case isset($_POST['editarPabellon']):
                    $id = $_POST['idPabellon'];
                    $this->numeroPabellon = $_POST['numero_pabellon'];
                    if (strlen($this->numeroPabellon) > 1) {
                        $this->recinto = new Recinto();
                        $this->recinto->editarPabellon("pabellon", $this->numeroPabellon, $id);
                        echo $this->location;
                    }else {
                        echo $this->alertCompletar;
                    }
                    break;

                case isset($_GET['eliminar']):
                    $idAPabellon = $_GET['eliminar'];
                        $this->recinto = new Recinto();
                        $this->recinto->eliminarPabellon("pabellon", $idAPabellon);
                        echo $this->location;
                    break;
            default:
                break;
        }
    }
}
