<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarEstacionamientoModal" tabindex="-1" aria-labelledby="estacionamientoLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-header d-flex bg-warning text-dark">
                <div class="row w-100">
                <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-car"></i> Estacionamiento</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./recinto.php" method="POST" class="formulario" id="formEstacionamiento">
                        <div class="row  mt-2">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Pabellón:</strong></label>
                                <select name="numeroPabellon" id="numeroPabellon" class="custom-select">
                                    <option value="0">Seleccionar Pabellon</option>
                                    <?php foreach ($pabellones as $pabellon) {;
                                        if ($pabellon['estado'] == 1) {
                                    ?>
                                        <option value="<?php echo $pabellon['id']; ?>"><?php echo $pabellon['numero_pabellon']; ?></option>
                                        <?php } ?>
                                    <?php }; ?>
                                </select>
                                <small id="estacionamiento__numeroPabellon"  class="mensaje"></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Nro. Estacionamiento:</strong></label>
                                <input type="number" min="1" name="numeroEstacionamiento" id="numeroEstacionamiento" class="form-control">
                                <small id="estacionamiento__numeroEstacionamiento" class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="guardarEstacionamiento" class="btn btn-primary">Registrar</button>
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
<div class="modal fade" id="editarModalTipo" tabindex="-1" aria-labelledby="estacionamientoLabelTipo" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-75">
            <div class="modal-header bg-warning text-dark">
            <div class="row w-100">
                <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-car"></i> Estacionamiento</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body ">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./recinto.php" method="POST" class="formulario" id="formEstacionamientoEdit">
                    <p class="invisible alert-danger text-center p-2" id="estacionamientoNumeroAlertaEdit"><strong>Alerta!</strong> valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-2">
                            <div class="col-md-6">
                                <label class="form-label"><strong>Pabellón:</strong></label>
                                <select name="numeroPabellonEdit" id="numeroPabellonEdit" class="custom-select pabellon">
                                    <?php foreach ($pabellones as $pabellon) {;
                                        if ($pabellon['estado'] == 1) {
                                    ?>
                                            <option value="<?php echo $pabellon['id']; ?>"><?php echo $pabellon['numero_pabellon']; ?></option>
                                        <?php } ?>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong>Nro. Estacionamiento:</strong></label>
                                <input type="number" name="numeroEstacionamientoEdit" id="numeroEstacionamientoEdit" class="form-control">
                                <small id="estacionamiento__numeroEstacionamientoEdit" class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4"><input type="hidden" class="ocult" name="idEstacionamiento" id="idEstacionamiento"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="actualizarEstacionamiento" class="btn btn-primary">Registrar</button>
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