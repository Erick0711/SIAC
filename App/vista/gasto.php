<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\GastoControlador;

$consulta = new GastoControlador;
$gastos = $consulta->mostrar_gasto();
$tipos = $consulta->index();

?>
<!-- HEADER -->
<?php
include("./plantilla/header.php");

// ASIDE
include("./plantilla/aside.php");

?>

<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content">
  <div class="app-title">
    <div>
      <h1><i class="fa fa-th-list"></i> Gasto</h1>
    </div>
  </div>
  <p><?php $consulta->consulta();?></p>
  <div class="row">
    <div class="clearfix"></div>
    <div class="col-md-12">
      <div class="tile">
        <div class="title-item">

          <div class="text-center">
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarModal"><i class="fa fa-plus"></i> Nuevo Gasto</a>
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarTipoModal"><i class="fa fa-plus"></i> Tipo de Gasto</a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered" id="tabla">
            <thead class="text-center">
              <tr>
                <th>#</th>
                <th>TIPO GASTO</th>
                <th>DESCRIPCION</th>
                <th>MONTO</th>
                <th></th>
                <th>ACCION</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($gastos as $gasto) {
                if ($gasto['estado'] == 1) {
              ?>
                  <tr>
                    <td><?php echo $gasto['id'] ?></td>
                    <td><?php echo $gasto['nombre'] ?></td>
                    <td><?php echo $gasto['descripcion'] ?></td>
                    <td><?php echo $gasto['monto_gasto'] ?></td>
                    <th>BS</th>
                    <td>
                      <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModalGasto"><i class="fa fa-pencil-square"></i></a>
                      <a href="./gasto.php?eliminar=<?php echo $gasto['id'];?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
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
  </div>
</main>

<!-- VENTANA MODAL -->
<?php
include("./Modal/gasto_modal.php");
include("./Modal/tipo_gasto_modal.php");
//  FOOTER
include("./plantilla/footer.php");
?>