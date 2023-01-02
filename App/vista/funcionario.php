<?php
include("./plantilla/session_start.php");
include("./plantilla/session_siac.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);
use App\Controlador\FuncionarioControlador;
$consulta = new FuncionarioControlador();
$funcionarios = $consulta->index();
include(HEADER);
include(ASIDE);
?>
<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="font-italic"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp; Funcionario</h1>
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
                            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarFuncionarioModal"><i class="fa-solid fa-briefcase fa-2x"></i> Nuevo Funcionario</a>
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
									<th>CARGO</th>
									<th>SALARIO</th>
									<th>ESTADO</th>
									<th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($funcionarios as $funcionario) { ?>
                                    <tr>
                                        <td><?php echo $funcionario['funcionario_id']; ?></td>
                                        <td><?php echo ucwords($funcionario['nombre']); ?></td>
										<td><?php echo ucwords($funcionario['apellido']); ?></td>
										<td><?php echo $funcionario['ci']; ?></td>

										<td><?php if(empty($persona['complemento_ci'])){ echo 'Ninguno'; 
                                        }elseif(isset($persona['complemento_ci'])){ echo strtoupper($persona['complemento_ci']); }?>
                                        </td>

										<td><?php echo $funcionario['correo']; ?></td>
										<td><?php echo $funcionario['telefono']; ?></td>
										<td><?php echo ucfirst($funcionario['cargo']);?></td>
										<td><?php echo $funcionario['salario']; ?></td>
                                        <?php if ($funcionario['estado'] == 1) { ?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa-solid fa-check"></i></button></td>
                                            <td class="text-center">
                                                <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                                <a href="./funcionario.php?eliminar=<?php echo $funcionario['funcionario_id']; ?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                            </td>
                                        <?php } elseif ($funcionario['estado'] == 0) { ?>
                                            <td class="text-center">
                                                <a href="./funcionario.php?activar=<?php echo $funcionario['funcionario_id']; ?>" class="btn btn-danger" name="activar" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-light2" disabled><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                                <a class="btn btn-light2" disabled><i class="fa-solid fa-trash-can fa-lg"></i></a>
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

<?php include("./Modal/funcionario_modal.php");?>
<script type="text/javascript" src="../../assets/validacion/funcionario/funcionario.js"></script>
<script type="text/javascript" src="../../assets/validacion/funcionario/funcionario_edit.js"></script>
<?php include(FOOTER);?>