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
                    <form action="./recinto.php" method="POST">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Nro. Pabellón:</strong></label>
                                <input type="number" minlength="1" maxlength="5" min="1" name="numero_pabellon" class="form-control" onkeypress="return valideKey(event)" required="required">
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
                    <form action="./recinto.php" method="POST">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Nro. Pabellón:</strong></label>
                                <input type="number" minlength="1" maxlength="5" min="1" name="numero_pabellon" id="numeroPabellon" class="form-control" onkeypress="return valideKey(event)" required="required">
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="ocult" name="idPabellon" id="idPabellon" required="required">
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