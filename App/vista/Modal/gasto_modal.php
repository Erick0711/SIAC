<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarModal" tabindex="-1" aria-labelledby="gastoLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Gasto</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./gasto.php" method="POST" class="formulario" id="formGasto" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Tipo de gasto:</strong></label>
                                <select class="custom-select" name="tipoGasto" id="tipoGasto">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($tipos as $tipo) {
                                        if ($tipo['estado'] == 1) {
                                    ?>
                                            <option value="<?php echo $tipo['id'] ?>"><?php echo $tipo['nombre'] ?></option>
                                        <?php } ?>
                                    <?php }; ?>
                                </select>
                                <small id="gasto__tipoGasto"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Descripción:</strong></label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="gasto__descripcion"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Monto:</strong></label>
                                <input type="number" min="0" name="monto" id="monto" class="form-control" onkeypress="return numero(event)" required>
                                <small id="gasto__monto"  class="mensaje"></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="guardarGasto" class="btn btn-primary">Registrar</button>
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
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="EditarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Gasto</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./gasto.php" method="POST" class="formulario" id="formGastoEdit" autocomplete="off">
                    <p class="invisible alert-danger text-center p-2" id="gastoAlertaEdit"><strong>Alerta!</strong> valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-2">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Tipo de gasto:</strong></label>
                                <select class="custom-select" name="tipoGastoEdit" id="tipoGastoSelect">
                                    <?php foreach ($tipos as $tipo) {
                                        if ($tipo['estado'] == 1) {
                                    ?>
                                        <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre']; ?></option>
                                        <?php } ?>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Descripción:</strong></label>
                                <input type="text" name="descripcionGastoEdit" id="descripcionGastoEdit" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="gasto__descripcionGastoEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Monto:</strong></label>
                                <input type="number" min="1" name="montoEdit" id="montoEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="gasto__montoEdit"  class="mensaje"></small>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <input type="hidden" name="idGasto" id="idGasto">
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="actualizarGasto" id="actualizarGasto" class="btn btn-primary">Registrar</button>
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