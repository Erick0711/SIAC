<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarArticuloModal" tabindex="-1" aria-labelledby="registrarArticuloModal" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Artículo</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./articulo.php" method="POST" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Tipo de artículo:</strong></label>
                                <select class="custom-select" name="tipoArticulo">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($tipos as $tipo) {
                                        if ($tipo['estado'] == 1) {
                                    ?>
                                            <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre_articulo']; ?></option>
                                        <?php   } ?>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Descripción:</strong></label>
                                <input type="text" minlength="4" pattern="[a-z]+" name="descripcion" class="form-control" onkeypress="return soloLetras(event)" title="Debe contener solo minúscula, y al menos 3 caracteres" required="required">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Monto:</strong></label>
                                <input type="number" min="1" minlength="1" pattern="[0-9]+" name="montoArticulo" class="form-control" onkeypress="return valideKey(event)" title="Debe contener al menos 1 número" required="required">
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" name="registrarArticulo" class="btn btn-primary btn-block">Registrar</button>
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
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="articuloLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <div class="row w-100">
                    <div class="col-md-12 d-flex justify-content-end align-items-end">
                        <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center">
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-newspaper-o"></i> Artículo</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./articulo.php" method="POST" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-4">
                                <select class="custom-select" name="tipoArticulo" id="tipoArticuloSelect">
                                    <?php foreach ($tipos as $tipo) {
                                        if ($tipo['estado'] == 1) {
                                    ?>
                                            <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre_articulo']; ?></option>
                                        <?php  } ?>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="descripcion" id="descripcion" class="form-control" onkeypress="return soloLetras(event)" placeholder="Tipo de Articulo..." required="required">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="montoArticulo" id="montoArticulo" class="form-control" onkeypress="return valideKey(event) 
                    " placeholder="Tipo de Articulo..." required="required">
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-4"><input type="text" class="ocult" name="idArticulo" id="idArticulo"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" name="actualizarArticulo" class="btn btn-primary btn-block">Registrar</button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- FIN CONTENIDO DEL MODAL -->
            </div>
        </div>
    </div>
</div>