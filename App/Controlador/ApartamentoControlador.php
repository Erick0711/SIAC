<?php

namespace App\Controlador;

use App\Modelo\Apartamento;

class ApartamentoControlador extends Apartamento
{

    public function index()
    {
        $this->apartamento = new Apartamento();
        $resultados = $this->apartamento->mostrarTabla("apartamento");
        return $resultados;
    }

    public function consulta(){

        switch (isset($_REQUEST)) {
            case isset($_POST['guardarApartamento']):
                $this->numeroApartamento = $_POST['numero_apartamento'];
                if (strlen($this->numeroApartamento) > 1) {
                    $this->apartamento = new Apartamento();
                    $resultados = $this->apartamento->registrarApartamento("apartamento", $this->numeroApartamento);
                    echo $this->location;
                } else {
                    echo $this->alertCompletar;
                }
                break;

            case isset($_POST['editarApartamento']):
                $id = $_POST['idApartamento'];
                $this->numeroApartamento = $_POST['numero_apartamento'];
                if (strlen($this->numeroApartamento) > 1) {
                    $this->apartamento = new Apartamento();
                    $resultados = $this->apartamento->editarApartamento("apartamento", $this->numeroApartamento, $id);
                    echo $this->location;
                    return $resultados;
                } else {
                    echo $this->alertCompletar;
                }
                break;

            case isset($_GET['eliminar']):
                $idApartamento = $_GET['eliminar'];
                    $this->apartamento = new Apartamento();
                    $resultados = $this->apartamento->eliminarApartamento("apartamento", $idApartamento);
                    echo $this->location;
                break;
                
            default:
                //
                break;
        }
    }

}
