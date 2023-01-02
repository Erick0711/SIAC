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
                    <form action="./articulo.php" method="POST" class="formulario" id="formArticulo" autocomplete="off">
                        <div class="row  mt-2">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Tipo de artículo:</strong></label>
                                <select class="custom-select" name="tipoArticulo" id="tipoArticulo">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($tipos as $tipo) {
                                        if ($tipo['estado'] == 1) {
                                    ?>
                                            <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre_articulo']; ?></option>
                                        <?php   } ?>
                                    <?php }; ?>
                                </select>
                                <small id="articulo__tipoArticulo"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Descripción:</strong></label>
                                <input type="text" name="descripcion" id="descripcion" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="articulo__descripcion"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Monto:</strong></label>
                                <input type="number" min="1" name="montoArticulo" id="montoArticulo" class="form-control" onkeypress="return numero(event)" required>
                                <small id="articulo__montoArticulo"  class="mensaje"></small>
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
                    <form action="./articulo.php" method="POST" class="formulario" id="formArticuloEdit" autocomplete="off">
                    <p class="invisible alert-danger text-center p-2" id="articuloAlertaEdit"><strong>Alerta!</strong> valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-2">
                            <div class="col-md-4">
                            <label class="form-label"><strong class="f-size-7">Tipo artículo:</strong></label>
                                <select class="custom-select" name="tipoArticuloEdit" id="tipoArticuloSelect">
                                    <?php foreach ($tipos as $tipo) {
                                        if ($tipo['estado'] == 1) {
                                    ?>
                                            <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre_articulo']; ?></option>
                                        <?php  } ?>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Descripción:</strong></label>
                                <input type="text" name="descripcionArticuloEdit" id="descripcionArticuloEdit" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="articulo__descripcionArticuloEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Monto:</strong></label>
                                <input type="number" name="montoArticuloEdit" id="montoArticuloEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="articulo__montoArticuloEdit"  class="mensaje"></small>
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