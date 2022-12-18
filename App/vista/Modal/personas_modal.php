
<!-- MODAL FORMULARIO COPROPIETARIO-->
<div class="modal fade" id="registrarCopropietarioModal" tabindex="-1" aria-labelledby="copropietarioLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="copropietarioLabel"><i class="fa-solid fa-street-view"></i> Copropietario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST">
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apartamento:</strong></label>
                                <select name="apartamento" id="apartamentoSelect" class="form-control">
                                <option value="0">Seleccionar</option>
                                <?php foreach($apartamentos as $apartamento){ ?>
                                    <option value="<?php echo $apartamento["id"]?>"><?php echo $apartamento["numero_apartamento"]?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Residente:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="residente" id="residente" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                            <label class="form-label"><strong class="f-size-7">Mascota:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="mascota" id="mascota" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <input type="hidden" class="ocult" id="idCopropietario" name="idCopropietario">
                            </div>
                            <div class="col-md-5"><input type="text" name="idPerson" id="idPerson"></div>
                            <div class="col-md-3">
                                <div class="modal-footer border-0">
                                    <button type="submit" name="registrarCopropietario" class="btn btn-primary">Registrar</button>
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

<!-- MODAL FORMULARIO USUARIO-->
<div class="modal fade" id="registrarUsuarioModal" tabindex="-1" aria-labelledby="UsuarioLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="UsuarioLabel"><i class="fa-solid fa-street-view"></i> Usuario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="" class="formulario" id="form">
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
                                <input type="text" name="usuario" id="usuario" class="form-control">
                                    <small id="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Contraseña:</strong></label>
                                <input type="password"  name="contrasenia" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <input type="text" name="idPerson" id="idPerson2">
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer">
                                    <button type="submit" name="registrarUsuario" class="btn btn-primary">Registrar</button>
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


<!-- MODAL FORMULARIO FUNCIONARIO-->
<div class="modal fade" id="registrarFuncionarioModal" tabindex="-1" aria-labelledby="funcionarioLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="UsuarioLabel"><i class="fa-solid fa-street-view"></i> Funcionario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST">
                        <div class="row  mt-4">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Cargo:</strong></label>
                                <input type="text" minlength="1" pattern="[a-z]+" title="Debe contener solo letra minúscula, campo no obligatorio" name="cargo" class="form-control" onkeypress="return soloLetras(event)">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Salario:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="salario" class="form-control" required="required" onkeypress="return valideKey(event)">
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4"><input type="text" name="idPerson" id="idPerson3"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer border-0">
                                    <button type="submit" name="registrarFuncionario" class="btn btn-primary">Registrar</button>
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
