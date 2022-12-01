<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\UsuarioControlador;

$consulta = new UsuarioControlador;
$login = $consulta->consulta();
?>

<?php include("./plantilla/header.php"); ?>
<?php include("./plantilla/aside.php"); ?>

<!-- CONTENIDO -->
<main class="app-content">
    <div class="app-title">
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Copropietario</h4>
                    <p><b>200</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Pagos realizados</h4>
                    <p><b>125</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
                <div class="info">
                    <h4>Pagos por cobrar</h4>
                    <p><b>75</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-thumbs-down fa-3x"></i>
                <div class="info">
                    <h4>Multas</h4>
                    <p><b>10</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <h4>Egreso</h4>
                    <p><b>10011</b> BS</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class="icon fa fa-star fa-3x"></i>
                <div class="info">
                    <h4>Ingreso</h4>
                    <p><b>12505</b> BS</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class="icon fa fa-money fa-3x"></i>
                <div class="info">
                    <h4>Saldo acumulado</h4>
                    <p><b>2.494</b> BS</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class="icon fa fa-male"></i>
                <div class="info">
                    <h4>Recidentes totales</h4>
                    <p><b>305</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title text-center">Gráfico de egreso</h3>
                <div id="curve_chart2" style="height: 500px"></div>  
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title text-center">Gráfico de pago</h3>
                <div id="curve_chart" style="height: 500px"></div>
            </div>
        </div>
    </div>
    </div>
</main>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Mes', 'Saldo', 'Expensa'],
            ['Enero', 1000, 400],
            ['Febrero', 1170, 460],
            ['Marzo', 660, 1120],
            ['Abril', 1030, 540]
        ]);

        var options = {
            title: 'Pagos por periodo',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Mes', 'Saldo', 'Egreso'],
            ['Enero', 1000, 400],
            ['Febrero', 1170, 460],
            ['Marzo', 660, 1120],
            ['Abril', 1030, 540]
        ]);

        var options = {
            title: 'Egreso por periodo',
            curveType: 'function',
            legend: {
                position: 'bottom'
            }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart2'));

        chart.draw(data, options);
    }
</script>
<?php include("./plantilla/footer.php"); ?>