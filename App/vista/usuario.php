<?php
include("./plantilla/session_start.php");
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
include(HEADER);
include(ASIDE);
?>
<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="font-italic"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp; Usuario</h1>
        </div>
    </div>
    <p>
        <?php 
        $consulta->consulta();
        $consultaRol->consulta();
        ?>
    </p>
    <p></p>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-9">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <button type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarUsuarioModal"><i class="fa-solid fa-user fa-2x"></i>&nbsp; Nuevo Usuario</button>
                        <!-- <button  type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#buscarPersonaModal"><i class="fa fa-user-plus"></i> Buscar Persona</button> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover" id="tabla">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>TELEFONO</th>
                                <th>CORREO</th>
                                <th>USUARIO</th>
                                <th class="ocult"></th>
                                <th>ROL</th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($usuarios as $usuario) {
                                
                            ?>
                                    <tr>
                                        <td><?php echo $usuario['id'] ?></td>
                                        <td><?php echo ucwords($usuario['nombre']) ?></td>
                                        <td><?php echo ucwords($usuario['apellido']) ?></td>
                                        <td><?php echo $usuario['telefono'] ?></td>
                                        <td><?php echo $usuario['correo'] ?></td>
                                        <td><?php echo $usuario['usuario'] ?></td>
                                        <td class="ocult"><?php echo $usuario['rol_id'] ?></td>
                                        <td><?php echo ucfirst($usuario['nombre_rol']) ?></td>
                                        <?php if($usuario['estado'] == 1) {?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa-solid fa-check"></i></button></td>
                                        <td class="text-center">
                                            <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            <a href="./usuario.php?eliminar=<?php echo $usuario['id'];?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php }elseif($usuario['estado'] == 0){?>
                                        <td class="text-center">
                                            <a href="./usuario.php?activar=<?php echo $usuario['id'];?>" class="btn btn-danger" name="activarTipo" onclick="advertenciaActivar(event)"><i class="fa-solid fa-power-off fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php };?>
                                    </tr>
                            <?php
                            }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <!-- <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarRolModal"><i class="fa fa-newspaper-o"></i> Rol</a> -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>ROL</th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($roles as $rol) { ?>
                            <tr>
                                        <td><?php echo $rol['id'];?></td>
                                        <td><?php echo ucfirst($rol['nombre_rol']);?></td>
                                        <?php if($rol['estado'] == 1) {?>
                                        <td class="text-center"><button class="btn btn-success" disabled><i class="fa-solid fa-check"></i></button></td>
                                        <td class="text-center">
                                            <!-- <a class="btn btn-warning-2 editarbtnTipo" data-toggle="modal" data-target="#editarModalTipo"><i class="fa fa-pencil-square" name="actualizarRol"></i></a> -->
                                            <a href="./usuario.php?eliminarRol=<?php echo $rol['id'];?>" class="btn btn-danger" name="eliminarRol" onclick="advertencia(event)"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php }elseif($rol['estado'] == 0){?>
                                        <td class="text-center">
                                            <a href="./usuario.php?activarTipo=<?php echo $rol['id'];?>" class="btn btn-danger" name="activarTipo" onclick="advertenciaActivar(event)"><i class="fa-solid fa-power-off fa-lg"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <!-- <a class="btn btn-light2" disabled><i class="fa fa-pencil-square"></i></a> -->
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php };?>
                                    </tr>
                        <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php
include("./Modal/usuario_modal.php");
include("./Modal/rol_modal.php");
include("./Modal/buscar_persona_modal.php");
?>
<script type="text/javascript" src="../../assets/validacion/usuario/usuario.js"></script>
<script type="text/javascript" src="../../assets/validacion/usuario/usuario_edit.js"></script>
<?php
include(FOOTER);
?>