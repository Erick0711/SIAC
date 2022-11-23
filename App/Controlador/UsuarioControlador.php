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
                $this->contrasenia_hash = password_hash($this->contrasenia, PASSWORD_DEFAULT, ['cost' => 10]);
                if(strlen($this->nombre) > 2){
                    $this->usuario = new Usuario();
                    $this->usuario->registrarUsuario("persona", "usuario", $this->nombre, $this->apellido, 
                                                            $this->ci, $this->complemento_ci, $this->correo, $this->telefono, 
                                                            $this->campo_usuario, $this->contrasenia_hash, $this->rol);
                    echo $this->redireccionarUsuario;
                }else{
                    echo $this->alerta_advertencia;
                }
                break;

            case isset($_POST['login']):
                $this->campo_usuario = $_POST['usuario'];
                $this->contrasenia = $_POST['contrasenia'];
                if(strlen($this->campo_usuario) && strlen($this->contrasenia)){
                    $this->usuario = new Usuario();
                    $resultados = $this->usuario->buscar($this->campo_usuario, $this->contrasenia);
                    if($resultados >= 1){
                        session_start();
                        $_SESSION['usuario'] = $resultados['usuario'];
                        $_SESSION['nombre_rol'] = $resultados['nombre_rol'];
                        if($_SESSION['nombre_rol'] == "SIAC" || $_SESSION['nombre_rol'] == "administrador"){
                            echo $this->rediccionarInicio;
                        }
                    }else{
                    echo $this->redireccionarLogin;
                    }
                }else{
                    echo $this->redireccionarLogin;
                }
                break;
            default:
                break;
        }
    }
}
?>