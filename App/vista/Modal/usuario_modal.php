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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa-solid fa-user"></i>&nbsp; Usuario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./usuario.php" method="POST" class="formulario" id="formUsuario" autocomplete="off">
                    <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nombre:</strong></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="usuario__nombre"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apellido:</strong></label>
                                <input type="text" name="apellido" id="apellido" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="usuario__apellido"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">CI:</strong></label>
                                <input type="number" min="1" name="ci" id="ci" class="form-control" onkeypress="return numero(event)" required>
                                <small id="usuario__ci"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Complemento:</strong></label>
                                <input type="text" name="complemento_ci" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Correo:</strong></label>
                                <input type="text" name="correo" id="correo" class="form-control" onkeypress="return letraCorreo(event)" required>
                                <small id="usuario__correo"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" min="1" name="telefono" id="telefono" class="form-control" onkeypress="return numero(event)" required>
                                <small id="usuario__telefono"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-3">
                                <label class="form-label"><strong class="f-size-7">Rol:</strong></label>
                                <select class="custom-select" name="rol" id="rol">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($roles as $rol) { ?>
                                        <option value="<?php echo $rol['id']; ?>"><?php echo $rol['nombre_rol']; ?></option>
                                    <?php }; ?>
                                </select>
                                <small id="usuario__rol"  class="mensaje"></small>
                            </div>
                            <div class="col-md-3">
                                <label class="form-label"><strong class="f-size-7">Usuario:</strong></label>
                                <input type="text" name="usuario" id="usuario" class="form-control" onkeypress="return letraNumero(event)" required>
                                <small id="usuario__usuario"  class="mensaje"></small>
                            </div>
                            <div class="col-md-3 mt-2">
                                <label class="form-label"><strong class="f-size-7">Contraseña:</strong></label>
                                <input type="password"  name="contrasenia" id="contrasenia" class="form-control" required>
                                <small id="usuario__contrasenia" class="mensaje"></small>
                            </div>
                            <div class="col-md-3 mt-2">
                                <label class="form-label"><strong class="f-size-7">Confirmar contraseña:</strong></label>
                                <input type="password" name="confirmacion"  id="confirmacion" class="form-control" required>
                                <small id="usuario__confirmacion" class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <!-- <input type="password" name="contrasenia" class="form-control" placeholder="Confirmación de contraseña"> --><i class="fa-solid fa-eye text-dark btn" id="ver"></i>
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
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="modalEditarLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa-solid fa-pen-to-square fa-lg"></i> Usuario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./usuario.php" method="POST" class="formulario" id="formUsuarioEdit" autocomplete="off">
                    <p class="invisible alert-danger text-center p-2" id="usuarioAlertaEdit"><strong>Alerta!</strong> 
                    valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-4">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Rol:</strong></label>
                                <select class="custom-select" name="rolEdit" id="rolSelect">
                                    <?php foreach ($roles as $rol) { ?>
                                        <option value="<?php echo $rol['id']; ?>"><?php echo ucfirst($rol['nombre_rol']); ?></option>
                                    <?php }; ?>
                                </select>
                                <small id="usuario__rolEdit" class="mensaje"></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Contraseña:</strong></label>
                                <input type="password" name="contraseniaEdit" id="contraseniaEdit" class="form-control" required>
                                <small id="usuario__contraseniaEdit" class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                            <i class="fa-solid fa-eye text-dark btn" id="verEdit"></i>
                                <input type="hidden" class="ocult" name="idUsuario" id="idUsuario">
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="actualizar" class="btn btn-primary">Registrar</button>
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