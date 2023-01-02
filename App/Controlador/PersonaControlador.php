<?php 
namespace App\Controlador;
use App\Modelo\Persona;
class PersonaControlador extends Persona
{
    public function index()
    {
        $this->persona = new Persona();
        $resultados = $this->persona->mostrar("v_persona");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) {
            case isset($_POST["guardarPersona"]):
                $this->persona = new Persona();
                $this->nombre = $_POST['nombre'];
                $this->apellido = $_POST['apellido'];
                $this->ci = $_POST['ci'];
                $this->complemento_ci = $_POST['complemento_ci'];
                $this->correo = $_POST['correo'];
                $this->telefono = $_POST['telefono'];
                if(strlen($this->nombre) > 2){
                    $this->persona = new Persona();
                    $this->persona->registrar("persona", $this->nombre, $this->apellido, 
                                                    $this->ci, $this->complemento_ci, $this->correo, $this->telefono);
                echo $this->redirectVista("persona");
                }else{
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

                case isset($_POST["actualizarPersona"]):
                    $this->persona = new Persona();
                    $id = $_POST['idPersona'];
                    $this->nombre = $_POST['nombreEdit'];
                    $this->apellido = $_POST['apellidoEdit'];
                    $this->ci = $_POST['ciEdit'];
                    $this->complemento_ci = $_POST['complemento_ci'];
                    $this->correo = $_POST['correoEdit'];
                    $this->telefono = $_POST['telefonoEdit'];
                        $this->persona = new Persona();
                        $this->persona->actualizar("persona", $this->nombre, $this->apellido, 
                                                        $this->ci, $this->complemento_ci, $this->correo, $this->telefono,$id);
                    echo $this->redirectVista("persona");
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                    break;

                case isset($_POST["registrarCopropietario"]):
                    $this->persona = new Persona();
                    $id = $_POST['idPerson'];
                    $apartamento = $_POST['apartamento'];
                    $residente = $_POST['residente'];
                    $mascota = $_POST['mascota'];
                        $this->persona = new Persona();
                        $this->persona->registrarCopropietario("copropietario", $apartamento, $residente,$mascota,$id);
                        $this->eliminar('apartamento', $apartamento);
                        echo $this->redirectVista("persona");
                    break;

                case isset($_POST["registrarUsuario"]):
                    $this->persona = new Persona();
                    $id = $_POST['idPerson'];
                    $rol = $_POST['rol'];
                    $usuario = $_POST['usuario'];
                    $contrasenia = $_POST['contrasenia'];
                    $contrasenia_hash = password_hash($contrasenia, PASSWORD_DEFAULT, ['cost' => 10]);
                        $this->persona = new Persona();
                        $this->persona->registrarUsuario("usuario",$rol ,$usuario, $contrasenia_hash,$id);
                    echo $this->redirectVista("persona");
                    break;

                case isset($_POST["registrarFuncionario"]):
                    $this->persona = new Persona();
                    $id = $_POST['idPerson'];
                    $cargo = $_POST['cargo'];
                    $salario = $_POST['salario'];
                        $this->persona = new Persona();
                        $this->persona->registrarFuncionario("funcionario",$cargo ,$salario,$id);
                    echo $this->redirectVista("persona");
                    break;

                case isset($_POST["busqueda"]):
                    $this->persona = new Persona();
                    $salida = "no se encontro nada de nada";

                    $consulta = $_POST['busqueda'];    
                    while ($persona = $this->persona->buscar($consulta)) {
                        print_r($persona);
                        die();
                        $salida = "- ".$persona[0]."<br>";
                    }
                    echo $salida;
                    // print_r($registros);
                    //     die();

                break;
            default:
                break;
        }
    }
}
?>
