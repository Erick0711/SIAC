<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);
use App\Controlador\ArticuloControlador;
$consulta = new ArticuloControlador;
$tipos = $consulta->index();
$articulos = $consulta->indexArticulo()
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
            <h1 class="font-italic"><i class="fa fa-th-list"></i> Articulo</h1>
        </div>
    </div>
    <p>
    <?php
    $consulta->consulta();
    ?>
    </p>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-8">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarArticuloModal"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Articulo</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover" id="tabla">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>TIPO ARTICULO</th>
                                <th>DESCRIPCION</th>
                                <th>MONTO</th>
                                <th>MODENDA</th>
                                <th class="ocult"></th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($articulos as $articulo) { ?>
                                <tr>
                                    <td><?php echo $articulo['articulo_id'];?></td>
                                    <td><?php echo $articulo['nombre_articulo'];?></td>
                                    <td><?php echo $articulo['descripcion'];?></td>
                                    <td><?php echo $articulo['monto_expensa'];?></td>
                                    <td>BS</td>
                                    <td class="ocult"><?php echo $articulo['id'];?></td>
                                    <?php if($articulo['estado'] == 1) {?>
                                        <td class="text-center"><button class="btn btn-success" disabled><i class="fa fa-check-square-o"></i></button></td>
                                    <td>
                                        <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa fa-pencil-square"></i></a>
                                        <a href="./articulo.php?eliminarArticulo=<?php echo $articulo['articulo_id']; ?>" class="btn btn-danger" name="eliminarArticulo" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                                    </td>
                                    <?php }elseif($articulo['estado'] == 0){?>
                                        <td class="text-center">
                                            <a href="./articulo.php?activar=<?php echo $articulo['articulo_id'];?>" class="btn btn-danger" name="activar" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                                        </td>
                                        <td>
                                        <a class="btn btn-light2" disabled><i class="fa fa-pencil-square"></i></a>
                                        <a class="btn btn-light2" disabled><i class="fa fa-trash fa-3x"></i></a>
                                    </td>
                                        <?php };?>
                                </tr>
                            <?php }; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- TIPO DE ARTICULO -->
        <div class="col-md-4">
            <div class="tile">
                <div class="title-item">
                    <div class="text-center">
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarTipoModal"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Tipo Articulo</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered table-opacity table-hover" id="tabla2">
                        <thead class="text-center table-blue text-light">
                            <tr>
                                <th>#</th>
                                <th>TIPO ARTICULO</th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($tipos as $tipo) {?>
                                    <tr>
                                        <td><?php echo $tipo['id'];?></td>
                                        <td><?php echo $tipo['nombre_articulo'];?></td>
                                        <?php if($tipo['estado'] == 1) {?>
                                            <td class="text-center"><button class="btn btn-success" disabled><i class="fa fa-check-square-o"></i></button></td>
                                        <td>
                                            <a class="btn btn-warning-2 editarbtnTipo" data-toggle="modal" data-target="#editarModalTipo"><i class="fa fa-pencil-square"></i></a>
                                            <a href="./articulo.php?eliminarTipo=<?php echo $tipo['id']; ?>" class="btn btn-danger" name="eliminarTipo" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                                        </td>
                                        <?php }elseif($tipo['estado'] == 0){?>
                                        <td class="text-center">
                                            <a href="./articulo.php?activarTipo=<?php echo $tipo['id'];?>" class="btn btn-danger" name="activarTipo" onclick="advertenciaActivar(event)"><i class="fa fa-power-off"></i></a>
                                        </td>
                                        <td>
                                            <a class="btn btn-light2" disabled><i class="fa fa-pencil-square"></i></a>
                                            <a class="btn btn-light2" disabled><i class="fa fa-trash fa-3x"></i></a>
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
    </div>


<?php
include("./Modal/articulo_modal.php");
include("./Modal/tipo_articulo_modal.php");
?>
<script type="text/javascript" src="../../assets/validacion/articulo/articulo.js"></script>
<script type="text/javascript" src="../../assets/validacion/articulo/articulo_edit.js"></script>
<?php include(FOOTER);?>