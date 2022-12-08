<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\GastoControlador;
$consulta = new GastoControlador;
$gastos = $consulta->mostrar_gasto();
$tipos = $consulta->index();
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
      <h1 class="font-italic"><i class="fa fa-th-list"></i> Gasto</h1>
    </div>
  </div>
  <p><?php $consulta->consulta(); ?></p>
  <div class="row">
    <div class="clearfix"></div>
    <div class="col-md-8">
      <div class="tile">
        <div class="title-item">
          <div class="text-center">
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarModal"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Nuevo Gasto</a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-opacity table-hover" id="tabla">
            <thead class="text-center table-blue text-light">
              <tr>
                <th>#</th>
                <th>TIPO</th>
                <th>DESCRIPCION</th>
                <th>MONTO</th>
                <th>MODEDA</th>
                <th class="ocult"></th>
                <th>ESTADO</th>
                <th>ACCION</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($gastos as $gasto) {
              ?>
                <tr>
                  <td><?php echo $gasto['id']; ?></td>
                  <td><?php echo $gasto['nombre']; ?></td>
                  <td><?php echo $gasto['descripcion']; ?></td>
                  <td><?php echo $gasto['monto_gasto']; ?></td>
                  <td>BS</td>
                  <td class="ocult"><?php echo $gasto['tipo_gasto_id']; ?></td>
                  <?php if ($gasto['estado'] == 1) { ?>
                    <td class="text-center"><button class="btn btn-success" disabled><i class="fa fa-check-square-o"></i></button></td>
                    <td>
                      <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa fa-pencil-square"></i></a>
                      <a href="./gasto.php?eliminar=<?php echo $gasto['id']; ?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                    </td>
                  <?php } elseif ($gasto['estado'] == 0) { ?>
                    <td class="text-center">
                      <a href="./gasto.php?activar=<?php echo $gasto['id']; ?>" class="btn btn-danger" name="activar" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                    </td>
                    <td>
                      <a class="btn btn-light2" disabled><i class="fa fa-pencil-square"></i></a>
                      <a class="btn btn-light2" disabled><i class="fa fa-trash fa-3x"></i></a>
                    </td>
                  <?php }; ?>
                </tr>
              <?php
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
            <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarTipoModal"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tipo Gasto</a>
          </div>
        </div>
        <div class="table-responsive">
          <table class="table table-bordered table-opacity table-hover" id="tabla2">
            <thead class="text-center table-blue text-light">
              <tr>
                <th>#</th>
                <th>TIPO GASTO</th>
                <th>ESTADO</th>
                <th>ACCION</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($tipos as $tipo) { ?>
                <tr>
                  <td><?php echo $tipo['id'] ?></td>
                  <td><?php echo $tipo['nombre'] ?></td>
                  <?php if ($tipo['estado'] == 1) { ?>
                    <td class="text-center"><button class="btn btn-success" disabled><i class="fa fa-check-square-o"></i></button></td>
                    <td>
                      <a class="btn btn-warning-2 editarbtnTipo" data-toggle="modal" data-target="#editarModalTipo"><i class="fa fa-pencil-square"></i></a>
                      <a href="./gasto.php?eliminarTipo=<?php echo $tipo['id']; ?>" class="btn btn-danger" name="eliminarTipo" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                    </td>
                  <?php } elseif ($tipo['estado'] == 0) { ?>
                    <td class="text-center">
                      <a href="./gasto.php?activarTipo=<?php echo $tipo['id']; ?>" class="btn btn-danger" name="activarTipo" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                    </td>
                    <td>
                      <a class="btn btn-light2" disabled><i class="fa fa-pencil-square"></i></a>
                      <a class="btn btn btn-light2" disabled><i class="fa fa-trash"></i></a>
                    </td>
                  <?php }; ?>
                </tr>
              <?php }; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<!-- VENTANA MODAL -->
<?php
include("./Modal/gasto_modal.php");
include("./Modal/tipo_gasto_modal.php");
//  FOOTER
include("./plantilla/footer.php");
?>