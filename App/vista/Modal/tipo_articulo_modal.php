<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarTipoModal" tabindex="-1" aria-labelledby="articuloTipoLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Tipo artículo</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./articulo.php" method="POST" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Tipo de artículo:</strong></label>
                                <input type="text" minlength="4" pattern="[a-z]+" title="Debe contener solo minúscula, y al menos 3 caracteres" name="tipoArticulo" class="form-control" onkeypress="return soloLetras(event)" required="required">
                            </div>
                            <div class="col-md-12">
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" name="registrarTipo" class="btn btn-primary btn-block">Registrar</button>
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
<div class="modal fade" id="editarModalTipo" tabindex="-1" aria-labelledby="articuloTipoLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Tipo artículo</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./articulo.php" method="POST" autocomplete="off">
                        <div class="row  mt-2">

                            <div class="col-md-12">
                                <label class="form-label"><strong class="f-size-7">Tipo de artículo:</strong></label>
                                <input type="text" id="tipoArticulo" name="tipoArticulo" minlength="4" pattern="[a-z]+" title="Debe contener solo minúscula, y al menos 3 caracteres" class="form-control" onkeypress="return soloLetra(event)" required="required">
                            </div>
                            <div class="col-md-12">
                                <input type="hidden" class="ocult" id="idTipoArticulo" name="idTipoArticulo" required="required">
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