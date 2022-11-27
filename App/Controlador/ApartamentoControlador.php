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
                $this->numeroApartamento = $_POST['numero_apartamento'];
                if (strlen($this->numeroApartamento) > 1) {
                    $this->apartamento = new Apartamento();
                    $this->apartamento->registrar("apartamento", $this->numeroApartamento);
                    echo $this->redireccionarApartamento;
                } else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['editarApartamento']):
                $id = $_POST['idApartamento'];
                $this->numeroApartamento = $_POST['numero_apartamento'];
                if (strlen($this->numeroApartamento) > 1) {
                    $this->apartamento = new Apartamento();
                    $this->apartamento->actualizar("apartamento", $this->numeroApartamento, $id);
                    echo $this->redireccionarApartamento;
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
