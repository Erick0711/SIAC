<?php
namespace App\Controlador;
use App\Modelo\Articulo;

class ArticuloControlador extends Articulo
{
    public function index()
    {
        $this->articulo = new Articulo();
        $resultados = $this->articulo->mostrarTabla("tipo_articulo");
        return $resultados;
    }
    public function indexArticulo()
    {
        $this->articulo = new Articulo();
        $resultados = $this->articulo->mostrarArticulo("tipo_articulo","articulo");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) 
        {
            /**********************************************TIPO DE ARTICULOS******************************************************/ 
            case isset($_POST['registrarTipo']):
                $this->tipoArticulo = $_POST['tipoArticulo'];
                if (strlen($this->tipoArticulo) > 1) {
                    $this->articulo = new Articulo();
                    $this->articulo->registrarTipoArticulo("tipo_articulo", $this->tipoArticulo);
                    echo $this->redireccionarArticulo;
                }else{
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['actualizarTipo']):
                $this->idTipoArticulo = $_POST['idTipoArticulo'];
                $this->tipoArticulo = $_POST['tipoArticulo'];
                if (strlen($this->tipoArticulo) > 1) {
                    $this->articulo = new Articulo();
                    $this->articulo->actualizarTipoArticulo("tipo_articulo", $this->tipoArticulo, 
                                                            $this->idTipoArticulo);
                    echo $this->redireccionarArticulo;
                } else {
                    echo $this->alerta_validacion;
                }
                break;
            
            case isset($_GET['eliminarTipo']):
                $idArticulo = $_GET['eliminarTipo'];
                $this->articulo = new Articulo();
                $this->articulo->eliminarTipoArticulo("tipo_articulo", $idArticulo);
                echo $this->redireccionarArticulo;
                break;
    /**********************************************ARTICULOS******************************************************/ 
            case isset($_POST['registrarArticulo']):
                $this->tipoArticulo = $_POST['tipoArticulo'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['montoArticulo'];
                if (strlen($this->descripcion) > 1) {
                    $this->articulo = new Articulo();
                    $this->articulo->registrarArticulo("articulo", $this->tipoArticulo,$this->descripcion, 
                                                        $this->monto);
                    echo $this->redireccionarArticulo;
                } else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_POST['actualizarArticulo']):
                $id = $_POST['idArticulo'];
                $this->tipoArticulo = $_POST['tipoArticulo'];
                $this->descripcion = $_POST['descripcion'];
                $this->monto = $_POST['montoArticulo'];
                if (strlen($this->descripcion) > 1) {
                    $this->articulo = new Articulo();
                    $this->articulo->actualizarArticulo("articulo", $this->tipoArticulo,
                                                        $this->descripcion, $this->monto, $id);
                    echo $this->redireccionarArticulo;
                } else {
                    echo $this->alerta_validacion;
                }
                break;

            case isset($_GET['eliminarArticulo']):
                $idArticulo = $_GET['eliminarArticulo'];
                $this->articulo = new Articulo();
                $this->articulo->eliminarArticulo("articulo", $idArticulo);
                echo $this->redireccionarArticulo;
                break;
            default:
                break;
        }
    }
}
