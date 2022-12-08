<?php 
namespace App\Controlador;
use App\Modelo\Rol;
class RolControlador extends Rol
{
    public function index()
    {
        $this->rol = new Rol();
        $resultados = $this->rol->mostrar("rol");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) 
        {
            case isset($_POST['guardarRol']):
                $this->rol = new Rol();
                $this->nombreRol = $_POST['rol'];
                $this->descripcion = $_POST['descripcion'];

                if(mb_strlen($this->nombreRol) >= 1 && mb_strlen($this->descripcion) >= 1 && preg_match($this->minuscula, $this->nombreRol)){
                    $dato = $this->rol->comparar('rol', $this->nombreRol);
                    $convertir = ucfirst($this->nombreRol);
                    if(isset($dato['nombre_rol']) && $dato['nombre_rol'] == $convertir){
                        echo $this->alerta_igualdad;
                    }else{
                        $this->rol->registrarRol("rol", $convertir, $this->descripcion);
                        echo $this->redireccionarUsuario;
                    }
                }else{
                    echo $this->alerta_validacion;
                }
                break;


                case isset($_POST['actualizarRol']):
                    $this->rol = new Rol();
                    $id = $_POST['idRol'];
                    $this->nombreRol = $_POST['rol'];
                    $this->descripcion = $_POST['descripcion'];
                    if(mb_strlen($this->nombreRol) >= 1 && mb_strlen($this->descripcion) >= 1 && preg_match($this->minuscula, $this->nombreRol)){
                        $dato = $this->rol->comparar('rol', $this->nombreRol);
                        $convertir = ucfirst($this->nombreRol);
                        if(isset($dato['nombre_rol']) && $dato['nombre_rol'] == $convertir){
                            echo $this->alerta_igualdad;
                    }else{
                        $this->rol->actualizarRol("rol", $this->nombreRol, $this->descripcion, $id);
                        echo $this->redireccionarUsuario;
                    }
                    }else{
                        echo $this->alerta_validacion;
                    }
                    break;

                    case isset($_GET['eliminarRol']):
                        $id = $_GET['eliminarRol'];
                            $this->rol = new Rol();
                            $this->rol->eliminarRol("rol", $id);
                            echo $this->redireccionarUsuario;
                        break;
        
                    case isset($_GET['activarTipo']):
                        $id = $_GET['activarTipo'];
                            $this->rol = new Rol();
                            $this->rol->activarRol("rol", $id);
                            echo $this->redireccionarUsuario;
                        break;
            default:
                break;
        }
    }
}
