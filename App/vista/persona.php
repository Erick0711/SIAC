<?php
include("./plantilla/session_start.php");
require_once($_SERVER['DOCUMENT_ROOT'] . '/SIAC/App/config/url.php');
require(AUTOLOAD);

use App\Controlador\PersonaControlador;

$consulta = new PersonaControlador;
$persona = $consulta->consulta();
$personas = $consulta->index();

include(HEADER);
include(ASIDE);
?>

<!-- CONTENIDO DE LA PAGINA -->
<main class="app-content ">
    <div class="app-title">
        <div>
            <h1 class="font-italic"><i class="fa fa-th-list"></i> Recinto</h1>
        </div>
    </div>
    <p>

    </p>
    <div class="row">
        <div class="clearfix"></div>
        <div class="col-md-12">
            <div class="tile">
                <div class="title-item">
                    <!-- <form action="./persona.php" method="POST"> -->

                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" id="buscar" class="form-control" placeholder="Persona">
                            </div>
                            <div class="col-md-8">
                            </div>
                            <div class="col-md-12 table" id="resultados">
                                <?php echo $persona; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="text/javascript" src="../../assets/js/jquery-3.3.1.min.js"></script>
<script>
    $(function() {
        $("#buscar").on("keyup", function() {
            var buscar = $("#buscar").val();

            $.ajax({
                type: "POST",
                url: "persona.php",
                data: {
                    busqueda: buscar
                },
                success: function(respuesta) {
                    if (respuesta != "") {
                        $("#resultados").html(respuesta);
                    }else{
                        $("#resultados").html = "";
                    }
                }
            })

        })
    })
</script>