<?php 
namespace App\Controlador;
use App\Modelo\Rol;

class RolControlador extends Rol{
    protected   $rol,
                $usuario,
                $contrasenia,
                $location = "<script> window.location.href =  '../vista/inicio.php';</script>";
    public function validar(){
        
        if(isset($_POST['login'])){
            $this->usuario = $_POST['usuario'];
            $this->contrasenia = $_POST['contrasenia'];

            if(strlen($this->usuario) && strlen($this->contrasenia)){
                $this->rol = new Rol();
                $resultados = $this->rol->buscar($this->usuario, $this->contrasenia);

                if($resultados >= 1){
                $_SESSION['usuario'] = $resultados['usuario'];
                $_SESSION['nombre_rol'] = $resultados['nombre_rol'];

                if($_SESSION['nombre_rol'] == "SIAC"){
                    echo $this->location;
                }
                if($_SESSION['nombre_rol'] == "Administrador"){
                    echo $this->location;
                }

                }else{
                echo "<script> window.location.href =  '../vista/login.php';</script>";
                }
            }else{
                echo "<script> window.location.href =  '../vista/login.php';</script>";
            }
        }    
    }
    // TERMINA LA CLASE
}
