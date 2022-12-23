<?php 
namespace App\Controlador;
use App\Modelo\Usuario;
class UsuarioControlador extends Usuario
{
    public function index()
    {
        $this->usuario = new Usuario();
        $resultados = $this->usuario->mostrarTabla("v_usuario");
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
                echo $this->redirectVista("usuario");
                }else{
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

            case isset($_POST['actualizar']):
                $this->usuario = new Usuario();
                $idUsuario = $_POST['idUsuario'];
                $this->contrasenia = $_POST['contraseniaEdit'];
                $this->rol = $_POST['rolEdit'];
                $this->contrasenia_hash = password_hash($this->contrasenia, PASSWORD_DEFAULT, ['cost' => 10]);
                $this->usuario->actualizarUsuario("usuario", $this->contrasenia_hash, $this->rol, $idUsuario);
                echo $this->redirectVista("usuario");
                break;

            case isset($_GET['eliminar']):
                $id = $_GET['eliminar'];
                $this->usuario = new usuario();
                $this->usuario->eliminar("usuario", $id);
                echo $this->redirectVista("usuario");
                break;

            case isset($_GET['activar']):
                $id = $_GET['activar'];
                $this->usuario = new usuario();
                $this->usuario->activar("usuario", $id);
                echo $this->redirectVista("usuario");
                break;

            case isset($_POST['login']):
                $this->usuario = new Usuario();
                $this->campo_usuario = $_POST['usuario'];
                $this->contrasenia = $_POST['contrasenia'];
                $resultados = $this->usuario->buscar($this->campo_usuario, $this->contrasenia);
                    if($resultados >= 1){
                        session_start();
                        $_SESSION['usuario'] = $resultados['usuario'];
                        $_SESSION['nombre_rol'] = $resultados['nombre_rol'];
                        $rol = $_SESSION['nombre_rol'];
                        switch (empty($rol) && isset($rol)) {
                            case $rol == "SIAC":
                                header("location: ./inicio.php");
                                break;
                            case $rol == "Administrador":
                                header("location: ./inicio.php");
                                break;
                            case $rol == "Copropietario":
                                header("location: ./copropietario.php");
                                break;
                            default:
                            header("location: ./login.php");
                                break;
                        }
                        // echo match(empty($rol) && isset($rol)){
                        //     $rol == "SIAC" => header("location: ./inicio.php"),
                        //     $rol == "Administrador" => header("location: ./inicio.php"),
                        //     $rol == "Copropietario" => header("location: ./copropietario.php"),
                        //     default => header("location: ./login.php")
                        // };
                    }
            default:
                break;
        }
    }
}
?>