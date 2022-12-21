<?php 
namespace App\Controlador;
use App\Modelo\Funcionario;
class FuncionarioControlador extends Funcionario
{
    public function index()
    {
        $this->usuario = new Funcionario();
        $resultados = $this->usuario->mostrar("funcionario", "persona");
        return $resultados;
    }
    
    public function consulta()
    {
        switch (isset($_REQUEST)) {
            case isset($_POST['guardarFuncionario']):
                $this->nombre = $_POST['nombre'];
                $this->apellido = $_POST['apellido'];
                $this->ci = $_POST['ci'];
                $this->complemento_ci = $_POST['complemento_ci'];
                $this->correo = $_POST['correo'];
                $this->telefono = $_POST['telefono'];
                $this->cargo = $_POST['cargo'];
                $this->salario = $_POST['salario'];
                    $this->funcionario = new Funcionario();
                    $this->funcionario->registrar("persona", "funcionario", $this->nombre, $this->apellido, 
                                                    $this->ci, $this->complemento_ci, $this->correo, $this->telefono, 
                                                    $this->cargo, $this->salario);
                echo $this->redirectVista("funcionario");
                break;

                case isset($_POST['actualizarFuncionario']):
                    $id = $_POST['idFuncionario'];
                    $this->cargo = $_POST['cargoEdit'];
                    $this->salario = $_POST['salarioEdit'];
                        $this->funcionario = new Funcionario();
                        $this->funcionario->actualizar("funcionario",$this->cargo, $this->salario, $id);
                        echo $this->redirectVista("funcionario");
                    break;

                case isset($_GET['eliminar']):
                    $id = $_GET['eliminar'];
                    $this->funcionario = new Funcionario();
                    $this->funcionario->eliminar("funcionario", $id);
                    echo $this->redirectVista("funcionario");
                    break;
    
                case isset($_GET['activar']):
                    $id = $_GET['activar'];
                    $this->funcionario = new Funcionario();
                    $this->funcionario->activar("funcionario", $id);
                    echo $this->redirectVista("funcionario");
                    break;
            }
    }
}
?>