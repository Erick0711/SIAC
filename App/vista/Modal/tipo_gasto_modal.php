<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarTipoModal" tabindex="-1" aria-labelledby="gastoTipoLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-50">
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Tipo gasto</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./gasto.php" method="POST" class="formulario" id="formGastoTipo" autocomplete="off">
                        <div class="row  mt-2">

                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Tipo de gasto:</strong></label>
                                <input type="text" name="nombreTipo" id="nombreTipo" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="gasto__nombreTipo"  class="mensaje"></small>
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
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Tipo gasto</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./gasto.php" method="POST" class="formulario" id="formGastoTipoEdit">
                    <p class="invisible alert-danger text-center p-2" id="gastoTipoAlertaEdit"><strong>Alerta!</strong> 
                    valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Tipo de gasto:</strong></label>
                                <input type="text" name="nombreTipoEdit" id="nombreTipoEdit" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="gasto__nombreTipoEdit"  class="mensaje"></small>
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