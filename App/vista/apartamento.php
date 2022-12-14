<?php
include("./plantilla/session_start.php");

require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\ApartamentoControlador;
$consulta = new ApartamentoControlador;
$apartamentos = $consulta->index();
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
            <h1 class="font-italic"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp; Apartamento</h1>
        </div>
    </div>
    <p><?php $consulta->consulta(); ?></p>
    <div class="content">
        <div class="row">
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="title-item">
                        <div class="text-center">
                            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarApartamentoModal"><i class="fa-solid fa-circle-plus fa-lg"></i> Nuevo Apartamento</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-opacity table-hover" id="tabla2">
                            <thead class="text-center table-blue text-light">
                                <tr>
                                    <th>#</th>
                                    <th>NRO APARTAMENTO</th>
                                    <th>ESTADO</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($apartamentos as $apartamento) { ?>
                                    <tr>
                                        <td><?php echo $apartamento['id']; ?></td>
                                        <td><?php echo $apartamento['numero_apartamento']; ?></td>
                                        <?php if ($apartamento['estado'] == 1) { ?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa-solid fa-check"></i></button></td>
                                            <td class="text-center">
                                                <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                                <a href="./apartamento.php?eliminar=<?php echo $apartamento['id']; ?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa-solid fa-trash-can fa-lg"></i></a>
                                            </td>
                                        <?php } elseif ($apartamento['estado'] == 0) { ?>
                                            <td class="text-center">
                                                <a href="./apartamento.php?activar=<?php echo $apartamento['id']; ?>" class="btn btn-danger" name="activar" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
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


<?php
include("./Modal/apartamento_modal.php");
?>
<script type="text/javascript" src="../../assets/validacion/apartamento/apartamento.js"></script>
<script type="text/javascript" src="../../assets/validacion/apartamento/apartamento_edit.js"></script>
<?php include(FOOTER)?>