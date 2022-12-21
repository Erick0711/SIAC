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
                        <h2 class="modal-title font-italic" id="funcionarioLabel"><i class="fa fa-briefcase fa-lg"></i>&nbsp; Funcionario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./funcionario.php" method="POST" class="formulario" id="formFuncionario">
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nombre:</strong></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="funcionario__nombre"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apellido:</strong></label>
                                <input type="text" name="apellido" id="apellido" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="funcionario__apellido"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">CI:</strong></label>
                                <input type="number" min="1" name="ci" id="ci" class="form-control" onkeypress="return numero(event)" required>
                                <small id="funcionario__ci"  class="mensaje"></small>
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
                                <small id="funcionario__correo"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" min="1" name="telefono" id="telefono" class="form-control" onkeypress="return numero(event)" required>
                                <small id="funcionario__telefono"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Cargo:</strong></label>
                                <input type="text" name="cargo" id="cargo" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="funcionario__cargo"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Salario:</strong></label>
                                <input type="number" min="1" name="salario" id="salario" class="form-control" onkeypress="return numero(event)" required>
                                <small id="funcionario__salario"  class="mensaje"></small>
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
                        <h2 class="modal-title font-italic" id="funcionarioLabel"><i class="fa-solid fa-pen-to-square fa-lg"></i>&nbsp; Funcionario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./funcionario.php" method="POST" class="formulario" id="formFuncionarioEdit">
                    <p class="invisible alert-danger text-center p-2" id="funcionarioAlertaEdit"><strong>Alerta!</strong> valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-4">
                            <div class="col-md-12">
                                <input type="hidden" class="ocult" id="idFuncionario" name="idFuncionario">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Cargo:</strong></label>
                                <input type="text" name="cargoEdit" id="cargoEdit" class="form-control" onkeypress="return letraMinuscula(event)" required>
                                <small id="funcionario__cargoEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label"><strong class="f-size-7">Salario:</strong></label>
                                <input type="number" min="1" name="salarioEdit" id="salarioEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="funcionario__salarioEdit" class="mensaje"></small>
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