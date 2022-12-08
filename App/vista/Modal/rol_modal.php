<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarRolModal" tabindex="-1" aria-labelledby="rolLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-address-card"></i> Rol</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./usuario.php" method="POST">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Rol:</strong></label>
                                <input type="text" minlength="4" pattern="[a-z]+" title="Debe contener solo minúscula, y al menos 3 caracteres" id="rol" name="rol" class="form-control" onkeypress="return soloLetras(event)" required="required">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="form-label"><strong class="f-size-7">Descripción de rol:</strong></label>
                                <textarea class="form-control" minlength="4" pattern="[a-z]+" title="Debe contener solo minúscula, y al menos 3 caracteres" onkeypress="return soloLetras(event)" name="descripcion" rows="3" required="required"></textarea>
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" name="guardarRol" class="btn btn-primary btn-block">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- FIN CONTENIDO DEL MODAL -->
            </div>
        </div>
    </div>
</div>


<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="editarModalTipo" tabindex="-1" aria-labelledby="rolLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-50">
            <div class="modal-header bg-warning text-dark">
                <h2 class="modal-title text-center" id="rolLabel"><i class="fa fa-address-card-o"></i> Rol</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./usuario.php" method="POST">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Rol:</strong></label>
                                <input type="text" id="nombreRol" name="rol" class="form-control">
                            </div>
                            <div class="col-md-12 mt-2">
                                <label class="form-label"><strong class="f-size-7">Descripción de rol:</strong></label>
                                <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-4"><input type="hidden" class="ocult" name="idRol" id="idRol"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" name="actualizarRol" class="btn btn-primary btn-block">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- FIN CONTENIDO DEL MODAL -->
            </div>
        </div>
    </div>
</div>