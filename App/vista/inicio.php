<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\UsuarioControlador;
use App\Controlador\PagoControlador;

$consulta2 = new PagoControlador;
$consulta = new UsuarioControlador;
$login = $consulta->consulta();
$cantidadCopropietario = $consulta2->contarCantidadCopropietario();
$cantidadPago = $consulta2->contarCantidadPago();
$cantidadCobrar = $consulta2->contarCantidadCobrar();
$sumarMontoPago = $consulta2->sumarMontoExpensa();
$sumarTotalResidente = $consulta2->sumarTotalResidente();
$sumarTotalMascota = $consulta2->sumarTotalMascota();
?>
<?php
include(HEADER);
include(ASIDE);
?>

<!-- CONTENIDO -->
<main class="app-content">
    <div class="app-title">
    </div>
    <div class="row p-2 d-flex justify-content-center">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa-solid fa-person-shelter fa-2x"></i>
                <div class="info">
                    <h4>Copropietario</h4>
                    <p><b><?php echo $cantidadCopropietario ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa-solid fa-dollar-sign fa-2x"></i>
                <div class="info">
                    <h4>Pagos realizados</h4>
                    <p><b><?php echo $cantidadPago ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa-solid fa-cash-register fa-2x"></i>
                <div class="info">
                    <h4>Pagos por cobrar</h4>
                    <p><b><?php echo $cantidadCobrar ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-2 d-flex justify-content-center">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa-solid fa-money-check-dollar fa-2x"></i>
                <div class="info">
                    <h4>Egreso</h4>
                    <p><b><?php echo $sumarMontoPago ?></b> BS</p>
                </div>
            </div>
        </div>
        <!-- <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa-solid fa-sack-dollar fa-2x"></i>
                <div class="info">
                    <h4>Ingreso</h4>
                    <p><b>12505</b> BS</p>
                </div>
            </div>
        </div> -->
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-male"></i>
                <div class="info">
                    <h4>Recidentes totales</h4>
                    <p><b><?php echo $sumarTotalResidente ?></b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa-solid fa-paw fa-2x"></i>
                <div class="info">
                    <h4>MASCOTA</h4>
                    <p><b><?php echo $sumarTotalMascota ?></b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile d-flex justify-content-center">
                <div id="piechart" style="width: 900px; height: 500px;"></div>
            </div>
        </div>
    </div>
    </div>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Por mes'],
                ['Pagado', <?php echo $cantidadPago ?>],
                ['Deudor', <?php echo $cantidadCobrar ?>],
            ]);

            var options = {
                title: 'Actividad de pagos'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>


    <?php include(FOOTER); ?>