<?php
include("./plantilla/header.php");
include("./plantilla/session_siac.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);
use App\Controlador\UsuarioControlador;
use App\Controlador\RolControlador;
$consulta = new UsuarioControlador;
$consultaRol = new RolControlador;
$roles = $consultaRol->index();
$usuarios = $consulta->index();
?>
<!-- HEADER -->
<?php
include("./plantilla/aside.php");
?>
<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Usuario</h1>
            <p><?php 
            $consulta->consulta();
            $consultaRol->consulta();
            ?></p>
        </div>
    </div>
    <p></p>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-8">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarUsuarioModal"><i class="fa fa-user-plus"></i> Usuario</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabla">
                        <thead class="text-center">
                            <tr>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>TELEFONO</th>
                                <th>CORREO</th>
                                <th>USUARIO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario) {
                                if ($usuario['estado'] == 1) {
                            ?>
                                    <tr>
                                        <td><?php echo $usuario['nombre'] ?></td>
                                        <td><?php echo $usuario['apellido'] ?></td>
                                        <td><?php echo $usuario['telefono'] ?></td>
                                        <td><?php echo $usuario['correo'] ?></td>
                                        <td><?php echo $usuario['usuario'] ?></td>
                                        <td>
                                            <a class="btn btn-warning-2" data-toggle="modal" data-target=""><i class="fa fa-pencil-square"></i></a>
                                            <a href="" class="btn btn-danger btnEliminar" name="eliminar" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                                        </td>
                                    </tr>
                            <?php
                                };
                            }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarRolModal"><i class="fa fa-newspaper-o"></i> Rol</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabla2">
                        <thead class="text-center">
                            <tr>
                                <th>ROL</th>
                                <th>DESCRIPCION</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($roles as $rol) { ?>
                            <tr>
                                <td><?php echo $rol['nombre_rol'] ?></td>
                                <td><?php echo $rol['descripcion'] ?></td>
                                <td>
                                <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target=""><i class="fa fa-pencil-square"></i></a>
                                <a href="" class="btn btn-danger btnEliminar" name="eliminar" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                                </td>
                            </tr>
                        <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
<td>
<!-- VENTANA MODAL -->
<?php
include("./plantilla/footer.php");
include("./Modal/usuario_modal.php");
include("./Modal/rol_modal.php");
//  FOOTER
?>