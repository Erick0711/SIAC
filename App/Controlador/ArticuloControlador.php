<?php
namespace App\Controlador;
use App\Modelo\Articulo;

class ArticuloControlador extends Articulo
{
    public function index()
    {
        $this->articulo = new Articulo();
        $resultados = $this->articulo->mostrarTipo("tipo_articulo");
        return $resultados;
    }
    public function indexArticulo()
    {
        $this->articulo = new Articulo();
        $resultados = $this->articulo->mostrar("tipo_articulo","articulo");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) 
        {
            /**********************************************TIPO DE ARTICULOS******************************************************/ 
            case isset($_POST['registrarTipo']):
                $this->articulo = new Articulo();
                $this->tipoArticulo = $_POST['tipoArticulo'];
                if(mb_strlen($this->tipoArticulo) >= 4 && is_string($this->tipoArticulo) && preg_match($this->minuscula, $this->tipoArticulo)){
                    $convertir = ucfirst($this->tipoArticulo);
                    $dato = $this->compararTipo("tipo_articulo",$convertir, "nombre_articulo");
                    if(isset($dato['nombre_articulo']) && $dato['nombre_articulo'] == $convertir){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->articulo->registrarTipo("tipo_articulo", $convertir);
                        echo $this->redireccionarArticulo;
                    }
                }else{
                    echo $this->alerta_solo_texto;
                    echo $this->alerta_solo_minuscula;
                }
                break;

            case isset($_POST['actualizarTipo']):
                $this->articulo = new Articulo();
                $this->idTipoArticulo = $_POST['idTipoArticulo'];
                $this->tipoArticulo = $_POST['tipoArticulo'];
                if(mb_strlen($this->tipoArticulo) >= 4 && is_string($this->tipoArticulo) 
                    && preg_match($this->minuscula, $this->tipoArticulo)){
                    $convertir = ucfirst($this->tipoArticulo);
                    $dato = $this->compararTipo("tipo_articulo", $convertir, "nombre_articulo");
                    if(isset($dato['nombre_articulo']) && $dato['nombre_articulo'] == $convertir){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->articulo->actualizarTipo("tipo_articulo", $convertir, 
                                                        $this->idTipoArticulo);
                        echo $this->redireccionarArticulo;
                    }
                } else {
                    echo $this->alerta_solo_texto;
                    echo $this->alerta_solo_minuscula;
                }
                break;
            
            case isset($_GET['eliminarTipo']):
                $idArticulo = $_GET['eliminarTipo'];
                $this->articulo = new Articulo();
                $this->articulo->eliminar("tipo_articulo", $idArticulo);
                echo $this->redireccionarArticulo;
                break;

            case isset($_GET['activarTipo']):
                $idArticulo = $_GET['activarTipo'];
                $this->articulo = new Articulo();
                $this->articulo->activarTipo("tipo_articulo", $idArticulo);
                echo $this->redireccionarArticulo;
                break;
    /**********************************************ARTICULOS******************************************************/ 
            case isset($_POST['registrarArticulo']):
                $this->articulo = new Articulo();
                $this->tipoArticulo = $_POST['tipoArticulo'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['montoArticulo'];
                if($this->tipoArticulo >= 1 && mb_strlen($this->descripcion) >= 1 && is_string($this->descripcion) && $this->monto > 0 && 
                    mb_strlen($this->monto) >= 1 && preg_match($this->minuscula, $this->descripcion)){
                    $convertir = ucfirst($this->descripcion);
                    $dato = $this->articulo->comparar('articulo',  $convertir);
                    if (isset($dato['descripcion']) && $dato['descripcion'] == $convertir) {
                        echo $this->alerta_igualdad;
                    } else {
                        $this->articulo->registrar("articulo", $this->tipoArticulo,
                        $convertir, $this->monto);
                        echo $this->redireccionarArticulo;
                    }
                } else {
                    echo $this->alerta_validacion;
                    echo $this->alerta_solo_minuscula;
                }
                break;

            case isset($_POST['actualizarArticulo']):
                $this->articulo = new Articulo();
                $id = $_POST['idArticulo'];
                $this->tipoArticulo = $_POST['tipoArticulo'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['montoArticulo'];
                if($this->tipoArticulo >= 1 && mb_strlen($this->descripcion) >= 1 && is_string($this->descripcion) && $this->monto > 0  && 
                    mb_strlen($this->monto) >= 1 && preg_match($this->minuscula, $this->descripcion)){
                    $convertir = ucfirst($this->descripcion);
                    $dato = $this->articulo->compararTodo('articulo',  $convertir, $this->monto);
                    if (isset($dato['descripcion']) && $dato['descripcion'] == $convertir && $dato['monto_expensa'] == $this->monto) {
                        echo $this->alerta_igualdad;
                    } else {
                    $this->articulo->actualizar("articulo", $this->tipoArticulo,
                                                $convertir, $this->monto, $id);
                    echo $this->redireccionarArticulo;
                }
                } else {
                    echo $this->alerta_validacion;
                    echo $this->alerta_solo_minuscula;
                }
                break;

            case isset($_GET['eliminarArticulo']):
                $idArticulo = $_GET['eliminarArticulo'];
                $this->articulo = new Articulo();
                $this->articulo->eliminar("articulo", $idArticulo);
                echo $this->redireccionarArticulo;
                break;

            case isset($_GET['activar']):
                $idArticulo = $_GET['activar'];
                $this->articulo = new Articulo();
                $this->articulo->activar("articulo", $idArticulo);
                echo $this->redireccionarArticulo;
                break;
            default:
                break;
        }
    }
}
