<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\PersonaControlador;
use App\Controlador\RolControlador;
use App\Controlador\ApartamentoControlador;

$consulta = new PersonaControlador;
$privilegio = new RolControlador;
$apartamento = new ApartamentoControlador;
$apartamentos = $apartamento->index();
$roles = $privilegio->index();
$personas = $consulta->index();
?>
<!-- HEADER -->
<?php
include(HEADER);
include(ASIDE);
?>

<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content ">
    <div class="app-title">
        <div>
            <h1 class="font-italic"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp; Persona</h1>
        </div>
    </div>
    <p>
        <?php
        $consulta->consulta();
        ?>
    </p>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarPersonaModal"><i class="fa-solid fa-universal-access fa-2x"></i> Nueva Persona</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover" id="tabla">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>CI</th>
                                <th>COMPLEMENTO CI</th>
                                <th>CORREO</th>
                                <th>TELEFONO</th>
                                <th>ACCION</th>
                                <th>AGREGAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($personas as $persona) { ?>
                                <tr>
                                    <td><?php echo $persona['id']; ?></td>
                                    <td><?php echo ucwords($persona['nombre']); ?></td>
                                    <td><?php echo ucwords($persona['apellido']); ?></td>
                                    <td><?php echo $persona['ci']; ?></td>
                                    <td><?php echo strtoupper($persona['complemento_ci']); ?></td>
                                    <td><?php echo $persona['correo']; ?></td>
                                    <td><?php echo $persona['telefono']; ?></td>
                                    <td class="text-center">
                                        <a href="" class="btn btn-warning text-dark editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                    </td>
                                    <td class="text-center">
                                        <a data-toggle="modal" data-target="#registrarCopropietarioModal" class="btn btn-success text-white editarCopropietario"><i class="fa-solid fa-person-shelter fa-lg"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#registrarUsuarioModal" class="btn btn-info text-white editarUsuario"><i class="fa-solid fa-user fa-lg"></i>
                                        </a>
                                        <a data-toggle="modal" data-target="#registrarFuncionarioModal" class="btn btn-brown text-white editarFuncionario"><i class="fa-solid fa-briefcase fa-lg"></i>
                                        </a>
                                    </td>
                                </tr>
                            <?php  }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- VENTANA MODAL -->
    <?php
    include("./Modal/persona_modal.php");
    include("./Modal/personas_modal.php");
    ?>
    <script type="text/javascript" src="../../assets/validacion/persona/persona.js"></script>
    <script type="text/javascript" src="../../assets/validacion/persona/persona_edit.js"></script>
    <?php
    include(FOOTER);
    ?>