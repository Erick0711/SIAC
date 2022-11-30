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
                $this->pabellon = new Pabellon();
                $this->numeroPabellon = $_POST['numero_pabellon'];
                if($this->numeroPabellon >= 1 && preg_match($this->numeros, $this->numeroPabellon)){
                    $dato = $this->pabellon->comparar('pabellon', $this->numeroPabellon);
                    if(isset($dato['numero_pabellon']) && $dato['numero_pabellon'] == $this->numeroPabellon){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->pabellon->registrarPabellon("pabellon", $this->numeroPabellon);
                        echo $this->redireccionarRecinto;
                    }
                }else {
                    echo $this->alerta_validacion;
                    echo $this->alerta_numero;
                }
                break;

            case isset($_POST['editarPabellon']):
                $this->pabellon = new Pabellon();
                $id = $_POST['idPabellon'];
                $this->numeroPabellon = $_POST['numero_pabellon'];
                $dato = $this->pabellon->comparar('pabellon', $this->numeroPabellon);
                if($this->numeroPabellon >= 1 && preg_match($this->numeros, $this->numeroPabellon)){
                    if(isset($dato['numero_pabellon']) && $dato['numero_pabellon'] == $this->numeroPabellon){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->pabellon->actualizarPabellon("pabellon", $this->numeroPabellon, $id);
                        echo $this->redireccionarRecinto;
                    }
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
