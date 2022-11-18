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
                $nombre = $_POST['nombre'];
                $apellido = $_POST['apellido'];
                $ci = $_POST['ci'];
                $complemento_ci = $_POST['complemento_ci'];
                $correo = $_POST['correo'];
                $telefono = $_POST['telefono'];
                $usuario = $_POST['usuario'];
                $contrasenia = $_POST['contrasenia'];
                $rol = $_POST['rol'];

                $this->usuario = new Usuario();
                $resultados = $this->usuario->nuevoUsuario("persona", "usuario",$nombre, $apellido, $ci, $complemento_ci, 
                                                            $correo, $telefono, $usuario, $contrasenia, $rol);
                echo "<script> window.location.href =  '../vista/usuario.php';</script>";
                break;
            
            default:
                # code...
                break;
            }
        }
}
?>