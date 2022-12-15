<?php 
namespace App\Controlador;

use App\Modelo\Copropietario;
class CopropietarioControlador extends Copropietario
{
    public function index()
    {
        $this->copropietario = new Copropietario();
        $resultados = $this->copropietario->mostrar("v_copropietario");
        return $resultados;
    }
    public function apartamento()
    {
        $this->copropietario = new Copropietario();
        $resultados = $this->copropietario->mostrar("v_apartamento");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) {
            case isset($_POST['guardarCopropietario']):
                $this->nombre = $_POST['nombre'];
                $this->apellido = $_POST['apellido'];
                $this->ci = $_POST['ci'];
                $this->complemento_ci = $_POST['complemento_ci'];
                $this->correo = $_POST['correo'];
                $this->telefono = $_POST['telefono'];
                $this->apartamento = $_POST['apartamento'];
                $this->residente = $_POST['residente'];
                $this->mascota = $_POST['mascota'];
                if(strlen($this->nombre) > 2){
                    $this->copropietario = new Copropietario();
                    $this->copropietario->registrar("persona", "copropietario", $this->nombre, $this->apellido, 
                                                    $this->ci, $this->complemento_ci, $this->correo, $this->telefono, 
                                                    $this->apartamento, $this->residente,$this->mascota);
                echo $this->redirectVista("copropietario");
                }else{
                    echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                }
                break;

                case isset($_POST['actualizarCopropietario']):
                    $this->copropietario = new Copropietario();
                    $id = $_POST['idCopropietario'];
                    $this->apartamento = $_POST['apartamento'];
                    $this->residente = $_POST['residente'];
                    $this->mascota = $_POST['mascota'];
                    if(strlen($this->residente) > 0){
                        $this->copropietario->actualizar("copropietario",$this->apartamento, $this->residente,$this->mascota, $id);
                    echo $this->redirectVista("copropietario");
                    }else{
                        echo $this->mensaje("warning","dark","Validación","Por favor rellene todos los campos");
                    }
                    break;

                case isset($_GET['eliminar']):
                    $id = $_GET['eliminar'];
                    $this->copropietario = new Copropietario();
                    $this->copropietario->eliminar("copropietario", $id);
                    echo $this->redirectVista("copropietario");
                    break;
    
                case isset($_GET['activar']):
                    $id = $_GET['activar'];
                    $this->copropietario = new Copropietario();
                    $this->copropietario->activar("copropietario", $id);
                    echo $this->redirectVista("copropietario");
                    break;
            }
    }
}
?>