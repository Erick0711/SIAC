<?php

namespace App\Controlador;

use App\Modelo\Gasto;

class GastoControlador extends Gasto
{
    public function index()
    {
        $this->gasto = new Gasto();
        $resultados = $this->gasto->mostrarTipo("tipo_gasto");
        return $resultados;
    }
    public function mostrar_gasto()
    {
        $this->gasto = new Gasto();
        $resultados = $this->gasto->mostrar("gasto", "tipo_gasto");
        return $resultados;
    }
    /********************************************** TIPO GASTO ******************************************************/
    public function consulta()
    {
        switch (isset($_REQUEST)) {
            case isset($_POST['guardarTipo']):
                $this->gasto = new Gasto();
                $this->tipoGasto = $_POST['nombreTipo'];
                if (mb_strlen($this->tipoGasto) >= 4 && is_string($this->tipoGasto) && preg_match($this->minuscula, $this->tipoGasto)) {
                    $convertir = ucfirst($this->tipoGasto);
                    $dato = $this->gasto->compararTipo('tipo_gasto',  $convertir);
                    if (isset($dato['nombre']) && $dato['nombre'] == $convertir) {
                        echo $this->mensaje("danger","dark","Alerta!","Datos ya existentes dentro del sistema");
                    } else {
                        $this->gasto->registrarTipo("tipo_gasto", $convertir);
                        echo $this->redirectVista("gasto");
                    }
                } else {
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

            case isset($_POST['actualizarTipo']):
                $this->gasto = new Gasto();
                $this->idTipoGasto = $_POST['idTipoGasto'];
                $this->tipoGasto = $_POST['nombreTipoEdit'];
                if (mb_strlen($this->tipoGasto) >= 4 && is_string($this->tipoGasto) && preg_match($this->minuscula, $this->tipoGasto)) {
                    $convertir = ucfirst($this->tipoGasto);
                    $dato = $this->gasto->compararTipo('tipo_gasto',  $convertir);
                    if (isset($dato['nombre']) && $dato['nombre'] == $convertir) {
                        echo $this->mensaje("danger","dark","Alerta!","Datos ya existentes dentro del sistema");
                    } else {
                        $this->gasto->actualizarTipo("tipo_gasto", $this->idTipoGasto, $convertir);
                        echo $this->redirectVista("gasto");
                    }
                } else {
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

            case isset($_GET['eliminarTipo']):
                $idTipoGasto = $_GET['eliminarTipo'];
                $this->gasto = new Gasto();
                $this->gasto->eliminarTipo("tipo_gasto", $idTipoGasto);
                echo $this->redirectVista("gasto");
                break;

            case isset($_GET['activarTipo']):
                $idGasto = $_GET['activarTipo'];
                $this->gasto = new Gasto();
                $this->gasto->activarTipo("tipo_gasto", $idGasto);
                echo $this->redirectVista("gasto");
                break;
                /********************************************** GASTO ******************************************************/
            case isset($_POST['guardarGasto']):
                $this->gasto = new Gasto();
                $this->tipoGasto = $_POST['tipoGasto'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['monto'];
                    $dato = $this->gasto->comparar('gasto',  $this->descripcion, $this->monto);
                    if (isset($dato['descripcion']) && $dato['descripcion'] == $this->descripcion) {
                        echo $this->mensaje("danger","dark","Alerta!","Datos ya existentes dentro del sistema");
                    } else {
                        $this->gasto->registrar("gasto", $this->tipoGasto, $this->descripcion, $this->monto);
                        echo $this->redirectVista("gasto");
                    }
                break;

            case isset($_POST['actualizarGasto']):
                $this->gasto = new Gasto();
                $idGasto = $_POST['idGasto'];
                $this->tipoGasto = $_POST['tipoGastoEdit'];
                $this->descripcion = $_POST['descripcionGastoEdit'];
                $this->monto = $_POST['montoEdit'];
                if ($this->tipoGasto >= 1 && is_string($this->descripcion) && $this->monto > 0 && mb_strlen($this->monto) >= 1 && preg_match($this->minuscula, $this->descripcion)) {
                    $convertir = ucfirst($this->descripcion);
                    $dato = $this->gasto->compararTodo('gasto',  $convertir, $this->monto);
                    if (isset($dato['descripcion']) && $dato['descripcion'] == $convertir && $dato['monto_gasto'] == $this->monto) {
                        echo $this->mensaje("danger","dark","Alerta!","Datos ya existentes dentro del sistema");
                    } else {
                        $this->gasto->actualizar("gasto", $this->tipoGasto, $convertir, $this->monto, $idGasto);
                        echo $this->redirectVista("gasto");
                    }
                } else {
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

            case isset($_GET['eliminar']):
                $idGasto = $_GET['eliminar'];
                $this->gasto = new Gasto();
                $this->gasto->eliminarGasto("gasto", $idGasto);
                echo $this->redirectVista("gasto");
                break;

            case isset($_GET['activar']):
                $idGasto = $_GET['activar'];
                $this->gasto = new Gasto();
                $this->gasto->activar("gasto", $idGasto);
                echo $this->redirectVista("gasto");
                break;
            default:
                break;
        }
    }
}
