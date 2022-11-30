<?php
include("./plantilla/header.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\ApartamentoControlador;

$consulta = new ApartamentoControlador;
$apartamentos = $consulta->index();
?>
<!-- HEADER -->
<?php
include("./plantilla/aside.php");
?>

<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content ">
    <div class="app-title">
        <div>
            <h1><i class="fa fa-th-list"></i> Apartamento</h1>
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
                        <a href="" type="button" class="btn btn-primary p-1" data-toggle="modal" data-target="#registrarApartamentoModal"><i class="fa fa-plus"></i> Nuevo Apartamento</a>
                        <p><?php
                        $cadena = "ASDAC";
                        $cadena2 = "abasd";    
                        $result = mb_strlen($cadena);
                        echo $result;
                        ?></p>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered" id="tabla">
                        <thead class="text-center">
                            <tr>
                                <th>#</th>
                                <th>NRO APARTAMENTO</th>
                                <th>ESTADO</th>
                                <th>ACCION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($apartamentos as $apartamento) {?>
                                    <tr><td><?php echo $apartamento['id'];?></td>
                                        <td><?php echo $apartamento['numero_apartamento'];?></td>
                                        <?php if($apartamento['estado'] == 1) {?>
                                        <td><a href="" class="btn btn-success">Activo</a></td>
                                        <?php }elseif($apartamento['estado'] == 0){?>
                                        <td><a href="" class="btn btn-danger">Inactivo</a></td>
                                        <?php };?>
                                        <td>
                                            <a class="btn btn-warning-2 editarbtn" data-toggle="modal" data-target="#editarModal"><i class="fa fa-pencil-square"></i></a>
                                            <a href="./apartamento.php?eliminar=<?php echo $apartamento['id'];?>" class="btn btn-danger" name="eliminar" onclick="advertencia(event)"><i class="fa fa-trash fa-3x"></i></a>
                                        </td>
                                    </tr>
                            <?php  };?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</main>

<!-- VENTANA MODAL -->
<?php
include("./Modal/apartamento_modal.php");
//  FOOTER
include("./plantilla/footer.php");
?>

