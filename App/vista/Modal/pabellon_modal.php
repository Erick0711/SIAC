<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarRecintoModal" tabindex="-1" aria-labelledby="recintoLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-car"></i> Pabellón</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./recinto.php" method="POST" class="formulario" id="formPabellon" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Nro. Pabellón:</strong></label>
                                <input type="number" min="1" name="pabellon" id="pabellon" class="form-control" onkeypress="return numero(event)" required>
                                <small id="estacionamiento__pabellon"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="guardarPabellon" class="btn btn-primary">Registrar</button>
                                </div>
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
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="recintoLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-car"></i> Pabellón</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./recinto.php" method="POST" class="formulario" id="formPabellonEdit">
                    <p class="invisible alert-danger text-center p-2" id="pabellonAlertaEdit"><strong>Alerta!</strong> 
                    valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Nro. Pabellón:</strong></label>
                                <input type="number" min="1" name="pabellonEdit" id="pabellonEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="estacionamiento__pabellonEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="ocult" name="idPabellon" id="idPabellon">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="editarPabellon" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- FIN CONTENIDO DEL MODAL -->
            </div>
        </div>
    </div>
</div>