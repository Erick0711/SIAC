<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\PabellonControlador;
use App\Controlador\EstacionamientoControlador;
$consulta = new PabellonControlador;
$consultaEstacionamiento = new EstacionamientoControlador;
$estacionamientos = $consultaEstacionamiento->index();
$pabellones = $consulta->index();
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
            <h1 class="font-italic"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp; Recinto</h1>
        </div>
    </div>
    <p>
        <?php 
            $consulta->consulta();
            $consultaEstacionamiento->consulta();
        ?>
    </p>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-8">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarEstacionamientoModal"><i class="fa-solid fa-circle-plus fa-lg"></i> Nuevo Estacionamiento</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover" id="tabla">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>NRO PABELLON</th>
                                <th>NRO ESTACIONAMIENTO</th>
                                <th class="ocult"></th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($estacionamientos as $estacionamiento) {?>
                                    <tr>
                                        <td><?php echo $estacionamiento['estacionamiento_id'];?></td>
                                        <td><?php echo $estacionamiento['numero_pabellon'];?></td>
                                        <td><?php echo $estacionamiento['numero_estacionamiento'];?></td>
                                        <td class="ocult"><?php echo $estacionamiento['id'];?></td>
                                        <?php if($estacionamiento['estado'] == 1) {?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa-solid fa-check"></i></button></td>
                                        <td class="text-center">
                                            <a class="btn btn-warning-2 editarbtnTipo" data-toggle="modal" data-target="#editarModalTipo"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            <a href="./recinto.php?eliminarEstacionamiento=<?php echo $estacionamiento['estacionamiento_id'];?>" class="btn btn-danger" name="eliminarEstacionamiento" onclick="advertencia(event)"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php }elseif($estacionamiento['estado'] == 0){?>
                                        <td class="text-center">
                                            <a href="./recinto.php?activar=<?php echo $estacionamiento['estacionamiento_id'];?>" class="btn btn-danger" name="activar" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php };?>
                                    </tr>
                            <?php  };?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarRecintoModal"><i class="fa-solid fa-circle-plus fa-lg"></i> Nuevo Pabellon</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover" id="tabla2">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>NRO PABELLON</th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pabellones as $pabellon) {?>
                                    <tr>
                                        <td><?php echo $pabellon['id'];?></td>
                                        <td><?php echo $pabellon['numero_pabellon'];?></td>
                                        <?php if($pabellon['estado'] == 1) {?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa-solid fa-check"></i></button></td>
                                        <td class="text-center">
                                            <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            <a href="./recinto.php?eliminar=<?php echo $pabellon['id'];?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php }elseif($pabellon['estado'] == 0){?>
                                        <td class="text-center">
                                            <a href="./recinto.php?activarTipo=<?php echo $pabellon['id'];?>" class="btn btn-danger" name="activarTipo" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                            <a class="btn btn-light2" disabled><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                        </td>
                                        <?php };?>
                                    </tr>
                            <?php  };?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<!-- VENTANA MODAL -->
<?php
include("./Modal/pabellon_modal.php");
include("./Modal/estacionamiento_modal.php");
?>
    <script type="text/javascript" src="../../assets/validacion/estacionamiento/estacionamiento.js"></script>
    <script type="text/javascript" src="../../assets/validacion/estacionamiento/estacionamiento_edit.js"></script>
<?php include(FOOTER);?>

