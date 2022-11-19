<?php 
namespace App\Controlador;
use App\Modelo\Usuario;
class UsuarioControlador extends Usuario
{
    public function index()
    {
        $this->usuario = new Usuario();
        $resultados = $this->usuario->mostrarTabla("usuario", "persona", "rol");
        return $resultados;
    }
    public function mostrarRol()
    {
        $this->usuario = new Usuario();
        $resultados = $this->usuario->mostrar("rol");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) {
            case isset($_POST['guardarUsuario']):
                $this->nombre = $_POST['nombre'];
                $this->apellido = $_POST['apellido'];
                $this->ci = $_POST['ci'];
                $this->complemento_ci = $_POST['complemento_ci'];
                $this->correo = $_POST['correo'];
                $this->telefono = $_POST['telefono'];
                $this->campo_usuario = $_POST['usuario'];
                $this->contrasenia = $_POST['contrasenia'];
                $this->rol = $_POST['rol'];
                if(strlen($this->nombre) > 2){
                    $this->usuario = new Usuario();
                    $resultados = $this->usuario->nuevoUsuario("persona", "usuario", $this->nombre, $this->apellido, $this->ci, 
                                                            $this->complemento_ci, $this->correo, $this->telefono, $this->campo_usuario, 
                                                            $this->contrasenia, $this->rol);
                    echo $this->redireccionar;
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
?>