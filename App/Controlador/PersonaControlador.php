<?php 
namespace App\Controlador;
use App\Modelo\Persona;
class PersonaControlador extends Persona
{
    public function index()
    {
        $this->persona = new Persona();
        $resultados = $this->persona->mostrar("persona");
        return $resultados;
    }
    public function consulta()
    {
        switch (isset($_REQUEST)) {
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
