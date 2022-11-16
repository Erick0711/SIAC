<?php 
namespace App\Controlador;
use App\Modelo\Usuario;

class UsuarioControlador extends Usuario{

    public function index(){
        $this->usuario = new Usuario();
        $resultados = $this->usuario->mostrarTabla("usuario", "persona", "rol");
        return $resultados;
    }
}

?>