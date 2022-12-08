<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarUsuarioModal" tabindex="-1" aria-labelledby="usuarioLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa fa-user"></i> Usuario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./usuario.php" method="POST">
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nombre:</strong></label>
                                <input type="text" name="nombre" class="form-control" onkeypress="return soloLetras(event)" minlength="3" pattern="[a-z]+" title="Debe contener solo letra minúscula, y almenos 4 caracteres" required="required">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apellido:</strong></label>
                                <input type="text" minlength="3" pattern="[a-z]+" title="Debe contener solo letra minúscula, y almenos 4 caracteres" name="apellido" class="form-control" onkeypress="return soloLetras(event)" required="required">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">CI:</strong></label>
                                <input type="number" pattern="[0-9]+" minlength="6" min="1" name="ci" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Complemento:</strong></label>
                                <input type="text" minlength="1" pattern="[a-z]+" title="Debe contener solo letra minúscula, campo no obligatorio" name="complemento_ci" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Correo:</strong></label>
                                <input type="text" minlength="6" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Debe contener un @ y un punto" name="correo" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" pattern="[0-9]+" minlength="8" min="1" name="telefono" class="form-control">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Rol:</strong></label>
                                <select class="custom-select" name="rol">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($roles as $rol) { ?>
                                        <option value="<?php echo $rol['id']; ?>"><?php echo $rol['nombre_rol']; ?></option>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Usuario:</strong></label>
                                <input type="text" minlength="6" pattern="[A-Za-z0-9]+"  title="Debe contener solo letra minúscula, y almenos 4 caracteres" name="usuario" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Contraseña:</strong></label>
                                <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Al menos un número, una letra en mayúscula, una letra en minúscula y al menos 8 caracteres" name="contrasenia" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <!-- <input type="password" name="contrasenia" class="form-control" placeholder="Confirmación de contraseña"> -->
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="guardarUsuario" class="btn btn-primary">Registrar</button>
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
<div class="modal fade" id="editarModalUsuario" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h2 class="modal-title text-center" id="modalEditarLabel">Formulario Editar</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./Gasto.php" method="POST">
                        <div class="row  mt-2">
                            <div class="col-md-4">
                                <select class="custom-select" name="tipo_gasto">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($tipos as $tipo) { ?>
                                        <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre']; ?></option>
                                    <?php }; ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Descripción">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="monto" id="monto" class="form-control" placeholder="Monto" step="0.1">
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