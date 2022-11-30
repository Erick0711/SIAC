<?php
namespace App\Controlador;
use App\Modelo\Apartamento;
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
                $this->numeroApartamento = $_POST['numero_apartamento'];
                if(mb_strlen($this->numeroApartamento) >= 2 && preg_match($this->cadenaMixta, $this->numeroApartamento)){
                $convertir = ucfirst($this->numeroApartamento);
                $dato = $this->apartamento->comparar('apartamento',  $convertir);
                    if(isset($dato['numero_apartamento']) && $dato['numero_apartamento'] ==  $convertir){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->apartamento->registrar("apartamento", $convertir);
                        echo $this->redireccionarApartamento;
                    }
                }else{
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['editarApartamento']):
                $this->apartamento = new Apartamento();
                $id = $_POST['idApartamento'];
                $this->numeroApartamento = $_POST['numero_apartamento'];
                if(mb_strlen($this->numeroApartamento) >= 2 && preg_match($this->cadenaMixta, $this->numeroApartamento)){
                    $convertir = ucfirst($this->numeroApartamento);
                    $dato = $this->apartamento->comparar('apartamento', $convertir);
                    if(isset($dato['numero_apartamento']) && $dato['numero_apartamento'] == $convertir){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->apartamento->actualizar("apartamento", $convertir, $id);
                        echo $this->redireccionarApartamento;
                    }
                } else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_GET['eliminar']):
                $idApartamento = $_GET['eliminar'];
                $this->apartamento = new Apartamento();
                $this->apartamento->eliminar("apartamento", $idApartamento);
                echo $this->redireccionarApartamento;
                break;
            default:
                break;
        }
    }
}
