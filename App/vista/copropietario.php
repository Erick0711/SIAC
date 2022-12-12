<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);
use App\Controlador\CopropietarioControlador;
$consulta = new CopropietarioControlador();
$copropietarios = $consulta->index();
$apartamentos = $consulta->apartamento();
include(HEADER);
include(ASIDE);
?>
<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="font-italic"><i class="fa fa-th-list font-italic"></i> Copropietario</h1>
        </div>
    </div>
    <p><?php $consulta->consulta();?></p>
    <div class="content">
        <div class="row">
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="title-item">
                        <div class="text-center">
                            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarCopropietarioModal"><i class="fa fa-plus"></i> Nuevo Copropietario</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-opacity table-hover" id="tabla2">
                            <thead class="text-center table-blue text-light">
                                <tr>
                                    <th>#</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>CI</th>
									<th>COMPLEMENTO CI</th>
									<th>CORREO</th>
									<th>TELEFONO</th>
									<th>DEPARTAMENTO</th>
									<th>RESIDENTES</th>
                                    <th>MASCOTAS</th>
                                    <th class="">IDAparta</th>
									<th>ESTADO</th>
									<th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($copropietarios as $copropietario) { ?>
                                    <tr>
                                        <td><?php echo $copropietario['copropietario_id']; ?></td>
                                        <td><?php echo $copropietario['nombre']; ?></td>
										<td><?php echo $copropietario['apellido']; ?></td>
										<td><?php echo $copropietario['ci']; ?></td>
										<?php if ($copropietario['complemento_ci'] == "") { ?>
											<td>Null</td>
										<?php }else{?>
											<td><?php echo $copropietario['complemento_ci']; ?></td>
											<?php }?>
										<td><?php echo $copropietario['correo']; ?></td>
										<td><?php echo $copropietario['telefono']; ?></td>
										<td><?php echo $copropietario['numero_apartamento']; ?></td>
										<td><?php echo $copropietario['cant_residentes']; ?></td>
                                        <td><?php echo $copropietario['cant_mascotas']; ?></td>
                                        <td class=""><?php echo $copropietario['apartamento_id']; ?></td>
                                        <?php if ($copropietario['estado'] == 1) { ?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa fa-check-square-o"></i></button></td>
                                            <td>
                                                <!-- <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa fa-pencil-square"></i></a> -->
                                                <a href="./copropietario.php?eliminar=<?php echo $copropietario['copropietario_id']; ?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                                            </td>
                                        <?php } elseif ($copropietario['estado'] == 0) { ?>
                                            <td class="text-center">
                                                <a href="./copropietario.php?activar=<?php echo $copropietario['copropietario_id']; ?>" class="btn btn-danger" name="activar" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-light2" disabled><i class="fa fa-pencil-square"></i></a>
                                                <a class="btn btn-light2" disabled><i class="fa fa-trash fa-3x"></i></a>
                                            </td>
                                        <?php }; ?>
                                    </tr>
                                <?php  }; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
	include(FOOTER);
	include("./Modal/copropietario_modal.php");
?>