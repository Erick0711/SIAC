<?php
namespace App\Controlador;
use App\Modelo\Apartamento,
    App\libs\Modelo;
class ApartamentoControlador extends Apartamento
{

    public function index()
    {
        $this->apartamento = new Apartamento();
        $resultados = $this->apartamento->mostrar("apartamento");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) 
        {
            case isset($_POST['guardarApartamento']):
                $this->apartamento = new Apartamento();
                $this->numeroApartamento = $_POST['numeroApartamento'];
                if(mb_strlen($this->numeroApartamento) >= 2 && preg_match($this->cadenaMixta, $this->numeroApartamento)){
                $convertir = ucfirst($this->numeroApartamento);
                $dato = $this->apartamento->comparar('apartamento',  $convertir);
                    if(isset($dato['numero_apartamento']) && $dato['numero_apartamento'] ==  $convertir){
                        echo $this->mensaje("danger","dark","Alerta!","Datos ya existentes dentro del sistema");
                    }else{
                        $this->apartamento->registrar("apartamento", $convertir);
                        echo $this->redirectVista("apartamento");
                    }
                }else{
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

            case isset($_POST['actualizarApartamento']):
                $this->apartamento = new Apartamento();
                $id = $_POST['idApartamento'];
                $this->numeroApartamento = $_POST['numeroApartamentoEdit'];
                if(mb_strlen($this->numeroApartamento) >= 2 && preg_match($this->cadenaMixta, $this->numeroApartamento)){
                    $convertir = ucfirst($this->numeroApartamento);
                    $dato = $this->apartamento->comparar('apartamento', $convertir);
                    if(isset($dato['numero_apartamento']) && $dato['numero_apartamento'] == $convertir){
                        echo $this->mensaje("danger","dark","Alerta!","Datos ya existentes dentro del sistema");
                    }else{
                        $this->apartamento->actualizar("apartamento", $convertir, $id);
                        echo $this->redirectVista("apartamento");
                    }
                } else {
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

            case isset($_GET['eliminar']):
                $idApartamento = $_GET['eliminar'];
                $this->apartamento = new Apartamento();
                $this->apartamento->eliminar("apartamento", $idApartamento);
                echo $this->redirectVista("apartamento");
                break;

            case isset($_GET['activar']):
                $idApartamento = $_GET['activar'];
                $this->apartamento = new Apartamento();
                $this->apartamento->activar("apartamento", $idApartamento);
                echo $this->redirectVista("apartamento");
                break;
            default:
                break;
        }
    }
}
