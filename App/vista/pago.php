<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\CopropietarioControlador;
use App\Controlador\PagoControlador;

$consulta = new CopropietarioControlador();
$consultaExpensa = new PagoControlador();
$copropietarios = $consulta->index();
$expensa = $consultaExpensa->sumarMontoArticulo();
$tiposPagos = $consultaExpensa->mostrarTipoPago();
?>
<?php
include(HEADER);
include(ASIDE);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1 class="font-italic"><i class="fa-sharp fa-solid fa-location-dot"></i>&nbsp; Pago</h1>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="tile">
                    <div class="title-item">
                        <p><?php $consultaExpensa->consulta();?></p>
                        <!-- <div class="text-center">
                            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#pagoModal"><i class="fa-solid fa-sack-dollar fa-2x"></i> Nuevo Pago</a>
                        </div> -->
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-opacity table-hover" id="tabla2">
                            <thead class="text-center table-blue text-light">
                                <tr>
                                    <th>#</th>
                                    <th>NOMBRE</th>
                                    <th>APELLIDO</th>
                                    <th>NUMERO APARTAMENTO</th>
                                    <th>CI</th>
                                    <th>DEUDA</th>
                                    <th>ACCION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($copropietarios as $copropietario) {
                                    if ($copropietario['estado'] == 1) { ?>
                                        <tr>
                                            <td><?php echo $copropietario['id'] ?></td>
                                            <td><?php echo ucwords($copropietario['nombre']) ?></td>
                                            <td><?php echo ucwords($copropietario['apellido']) ?></td>
                                            <td><?php echo ucfirst($copropietario['numero_apartamento']) ?></td>
                                            <td><?php echo $copropietario['ci'] ?></td>
                                            <td class="text-center">
                                            <?php if($copropietario['estado_deuda'] == 0) {?>
                                                <p class="btn-success">Pagado</p>
                                            <?php }elseif($copropietario['estado_deuda'] == 1){?>
                                                <p class="btn-danger text-white">Deudor</p>
                                            <?php }?>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-warning pago" data-toggle="modal" data-target="#pagoModal"><i class="fa-solid fa-sack-dollar fa-2x"></i></a>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <form action="./pago.php" id="formObtenerCopropietario" method="POST">
        <input type="text" name="obtenerCopropietario" id="obtenerCopropietario">
    </form>
    <div id="resp"></div> -->


<?php include("./Modal/pago_modal.php"); ?>
<?php include(FOOTER); ?>
<script type="text/javascript" src="../../assets/js/pagoQuery.js"></script>