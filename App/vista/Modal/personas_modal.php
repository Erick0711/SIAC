
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
                        <h2 class="modal-title font-italic" id="copropietarioLabel"><i class="fa-solid fa-person-shelter fa-lg"></i>
                        &nbsp;&nbsp;Copropietario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST" class="formulario" id="formCopropietario" autocomplete="off">
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apartamento:</strong></label>
                                <select name="apartamento" id="apartamentoSelect" class="form-control">
                                <option value="0">Seleccionar</option>
                                <?php foreach($apartamentos as $apartamento){ 
                                    if($apartamento['estado'] == 1){?>
                                    <option value="<?php echo $apartamento["id"]?>"><?php echo $apartamento["numero_apartamento"]?></option>
                                <?php }
                                    } ?>
                                </select>
                                <small id="mensaje__apartamento"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Residente:</strong></label>
                                <input type="number" min="1" name="residente" id="residente" class="form-control" onkeypress="return numero(event)" required>
                                <small id="mensaje__residente"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                            <label class="form-label"><strong class="f-size-7">Mascota:</strong></label>
                                <input type="number" min="0" name="mascota" id="mascota" class="form-control" onkeypress="return numero(event)" required>
                                <small id="mensaje__mascota"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4"></div>
                            <div class="col-md-5"><input type="hidden" class="ocult" name="idPerson" id="idPerson"></div>
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
                        <h2 class="modal-title font-italic" id="UsuarioLabel"><i class="fa-solid fa-user"></i>&nbsp;&nbsp;Usuario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST" class="formulario" id="formUsuario"  autocomplete="off">
                        <div class="row  mt-4">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Rol:</strong></label>
                                <select class="custom-select" name="rol" id="rol">
                                    <option value="0">Seleccionar</option>
                                    <?php foreach ($roles as $rol) { ?>
                                        <option value="<?php echo $rol['id']; ?>"><?php echo $rol['nombre_rol']; ?></option>
                                    <?php }; ?>
                                </select>
                                <small id="mensaje__rol"  class="mensaje"></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Usuario:</strong></label>
                                <input type="text" name="usuario" id="usuario" class="form-control" onkeypress="return letraNumero(event)" required>
                                <small id="mensaje__usuario"  class="mensaje"></small>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label"><strong class="f-size-7">Contraseña:</strong></label>
                                <input type="password"  name="contrasenia" id="contrasenia" class="form-control" required>
                                <small id="mensaje__contrasenia" class="mensaje"></small>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label class="form-label"><strong class="f-size-7">Confirmar contraseña:</strong></label>
                                <input type="password" name="confirmacion"  id="confirmacion" class="form-control" required>
                                <small id="mensaje__confirmacion" class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <i class="fa-solid fa-eye text-dark btn" id="ver"></i>
                                <input type="hidden" class="ocult" name="idPerson" id="idPerson2">
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
                        <h2 class="modal-title font-italic" id="UsuarioLabel"><i class="fa-solid fa-briefcase fa-lg"></i>
                        &nbsp;&nbsp;Funcionario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container form">
                    <!-- FORMULARIO -->
                    <form action="./persona.php" method="POST" class="formulario" id="formFuncionario" autocomplete="off">
                        <div class="row  mt-4">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Cargo:</strong></label>
                                <input type="text" name="cargo" id="cargo" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="mensaje__cargo" class="mensaje"></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Salario:</strong></label>
                                <input type="number" min="1" name="salario" id="salario" class="form-control" onkeypress="return numero(event)" required>
                                <small id="mensaje__salario" class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4"><input type="hidden" class="ocult" name="idPerson" id="idPerson3"></div>
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
