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
        switch (isset($_REQUEST)) {
            case isset($_POST['guardarRol']):
                $this->nombreRol = $_POST['rol'];
                $this->descripcion = $_POST['descripcion'];
                if(strlen($this->nombreRol) > 2 && strlen($this->descripcion) > 2){
                    $this->rol = new Rol();
                    $this->rol->registrarRol("rol", $this->nombreRol, $this->descripcion);
                    echo $this->redireccionarUsuario;
                }else{
                    echo $this->alerta_advertencia;
                }
                break;
            default:
                # code...
                break;
            }
        }
}
