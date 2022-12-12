<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarFuncionarioModal" tabindex="-1" aria-labelledby="funcionarioLabel" aria-hidden="true">
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
                        <h2 class="modal-title font-italic" id="funcionarioLabel"><i class="fa fa-briefcase"></i> Funcionario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./funcionario.php" method="POST">
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
                                <input type="number" pattern="[0-9]+" minlength="7" min="1" name="ci" class="form-control" required="required">
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
                                <label class="form-label"><strong class="f-size-7">Cargo:</strong></label>
                                <input type="text" minlength="1" pattern="[a-z]+" title="Debe contener solo letra minúscula, campo no obligatorio" name="cargo" class="form-control" onkeypress="return soloLetras(event)">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Salario:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="salario" class="form-control" required="required" onkeypress="return valideKey(event)">
                            </div>
                            <div class="col-md-4">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer border-0">
                                    <button type="submit" name="guardarFuncionario" class="btn btn-primary">Registrar</button>
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
                        <h2 class="modal-title font-italic" id="funcionarioLabel"><i class="fa fa-briefcase"></i> Funcionario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./funcionario.php" method="POST">
                        <div class="row  mt-4">
                            <div class="col-md-12">
                                <input type="hidden" class="ocult" id="idFuncionario" name="idFuncionario">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Cargo:</strong></label>
                                <input type="text" minlength="1" pattern="[a-z]+" title="Debe contener solo letra minúscula, campo no obligatorio" name="cargo" id="cargo" class="form-control" onkeypress="return soloLetras(event)">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Salario:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="salario" id="salario" class="form-control" required="required" onkeypress="return valideKey(event)">
                            </div>
                            <div class="col-md-12">
                            <div class="modal-footer border-0">
                                    <button type="submit" name="actualizarFuncionario" class="btn btn-primary">Guardar</button>
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