<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarPersonaModal" tabindex="-1" aria-labelledby="personaLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="personaLabel"><i class="fa-solid fa-universal-access fa-lg"></i>
                        &nbsp;&nbsp;Persona</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST" class="formulario" id="formPersonaRegistrar">
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nombre:</strong></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="mensaje__nombre"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apellido:</strong></label>
                                <input type="text" name="apellido" id="apellido" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="mensaje__apellido"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">CI:</strong></label>
                                <input type="number" min="1" name="ci" id="ci" class="form-control" onkeypress="return numero(event)" required>
                                <small id="mensaje__ci"  class="mensaje"></small>
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
                                <small id="mensaje__correo"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" min="1" name="telefono" id="telefono" class="form-control" onkeypress="return numero(event)" required>
                                <small id="mensaje__telefono"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <!-- <input type="password" name="contrasenia" class="form-control" placeholder="Confirmación de contraseña"> -->
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="guardarPersona" class="btn btn-primary">Registrar</button>
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
                        <h2 class="modal-title font-italic" id="estacionamientoLabel"><i class="fa-solid fa-pen-to-square fa-lg"></i> Persona</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST" class="formulario" id="formPersonaEditar">
                    <p class="invisible alert-danger text-center p-2" id="personaAlertaEdit"><strong>Alerta!</strong> valida tus campos haciendo click en cada uno de ellos.</p>
                    <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nombre:</strong></label>
                                <input type="text" name="nombreEdit" id="nombreEdit" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="mensaje__nombreEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apellido:</strong></label>
                                <input type="text" name="apellidoEdit" id="apellidoEdit" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="mensaje__apellidoEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">CI:</strong></label>
                                <input type="number" min="1" name="ciEdit" id="ciEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="mensaje__ciEdit"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Complemento:</strong></label>
                                <input type="text" name="complemento_ci" id="complemento_ci" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Correo:</strong></label>
                                <input type="text" name="correoEdit" id="correoEdit" class="form-control" onkeypress="return correo(event)" required>
                                <small id="mensaje__correoEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" min="1" name="telefonoEdit" id="telefonoEdit" class="form-control" required>
                                <small id="mensaje__telefonoEdit"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <input type="hidden" class="ocult" name="idPersona" id="idPersona">
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="actualizarPersona" class="btn btn-primary">Guardar</button>
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