
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarTipoModal" tabindex="-1" aria-labelledby="gastoTipoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-50">
    <div class="modal-header">
        <h2 class="modal-title text-center" id="gastoTipoLabel"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Gasto</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./Gasto.php" method="POST">
            <div class="row  mt-2">

                <div class="col-md-12">
                    <input type="text" name="tipoGasto" class="form-control" onkeypress="return soloLetras(event)" placeholder="Tipo de gasto...">
                </div>
                <div class="col-md-12">
                </div>

            </div>

            <div class="row  mt-2">

                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" name="guardarTipo" class="btn btn-primary btn-block">Registrar</button>
                </div>
                
            </div>
        </form>
        </div>
    <!-- FIN CONTENIDO DEL MODAL -->
    </div>
    </div>
</div>
</div>


<!-- MODAL FORMULARIO EDITAR-->
<div class="modal fade" id="editarModalTipo" tabindex="-1" aria-labelledby="gastoTipoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-50">
    <div class="modal-header">
        <h2 class="modal-title text-center" id="gastoTipoLabel"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Gasto</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./Gasto.php" method="POST">
            <div class="row  mt-2">

                <div class="col-md-12">
                    <input type="text" id="tipoGasto" name="tipoGasto" class="form-control" onkeypress="return soloLetras(event)" placeholder="Tipo de gasto...">
                </div>
                <div class="col-md-12">
                <input type="hidden" class="ocult" id="idTipoGasto" name="idTipoGasto">
                </div>

            </div>

            <div class="row  mt-2">

                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" name="actualizarTipo" class="btn btn-primary btn-block">Registrar</button>
                </div>
                
            </div>
        </form>
        </div>
    <!-- FIN CONTENIDO DEL MODAL -->
    </div>
    </div>
</div>
</div>