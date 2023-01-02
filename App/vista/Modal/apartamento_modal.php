<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarApartamentoModal" tabindex="-1" aria-labelledby="apartamentoLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-building"></i> Apartamento</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./apartamento.php" method="POST" class="formulario" id="formApartamento" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7"> Nro.&nbsp;&nbsp;Apartamento:</strong></label>
                                <input type="text" name="numeroApartamento" id="numeroApartamento" class="form-control" onkeypress="return letraNumero(event)" required>
                                <small id="apartamento__numeroApartamento"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer border-0">
                                    <button type="submit" name="guardarApartamento" class="btn btn-primary">Registrar</button>
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

<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarApartamentoLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content  w-50">
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-building"></i> Apartamento</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./apartamento.php" method="POST" class="formulario" id="formApartamentoEdit" autocomplete="off">
                    <p class="invisible alert-danger text-center p-2" id="apartamentoAlertaEdit"><strong>Alerta!</strong> valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7"> Nro.&nbsp;&nbsp;Apartamento:</strong></label>
                                <input type="text" name="numeroApartamentoEdit" id="numeroApartamentoEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="apartamento__numeroApartamentoEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-1">
                                <input type="hidden" class="ocult" name="idApartamento" id="idApartamento" require="required">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="actualizarApartamento" class="btn btn-primary">Guardar</button>
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