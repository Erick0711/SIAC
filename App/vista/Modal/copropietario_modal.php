<!-- MODAL FORMULARIO REGISTRAR-->
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
                        <h2 class="modal-title font-italic" id="copropietarioLabel"><i class="fa fa-male"></i> Copropietario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./copropietario.php" method="POST">
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
                                <input type="number" pattern="[0-9]+" minlength="6" min="1" name="ci" onkeypress="return valideKey(event)" class="form-control" required="required">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Complemento:</strong></label>
                                <input type="text" minlength="1" pattern="[a-z]+" title="Debe contener solo letra minúscula, campo no obligatorio" name="complemento_ci" class="form-control" onkeypress="return soloLetras(event)">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Correo:</strong></label>
                                <input type="text" minlength="6" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Debe contener un @ y un punto" name="correo" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" pattern="[0-9]+" minlength="8" min="1" name="telefono" class="form-control" onkeypress="return valideKey(event)">
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apartamento:</strong></label>
                                <select name="apartamento" id="apartamento" class="form-control">
                                <option value="0">Seleccionar</option>
                                <?php foreach($apartamentos as $apartamento){ ?>
                                    <option value="<?php echo $apartamento["id"]?>"><?php echo $apartamento["numero_apartamento"]?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nro. Residente:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="residente" id="residente" class="form-control" required="required" onkeypress="return valideKey(event)">
                            </div>
                            <div class="col-md-4">
                            <label class="form-label"><strong class="f-size-7">Nro. Mascota:</strong></label>
                                <input type="number" min="1" pattern="[0-9]+"  title="Debe contener solo letra números" name="mascota" id="mascota" class="form-control" required="required" onkeypress="return valideKey(event)">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4"></div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer border-0">
                                    <button type="submit" name="guardarCopropietario" class="btn btn-primary">Registrar</button>
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
                        <h2 class="modal-title font-italic" id="funcionarioLabel"><i class="fa fa-briefcase"></i> Copropietario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./copropietario.php" method="POST">
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apartamento:</strong></label>
                                <select name="apartamentoID" id="apartamentoID" class="form-control">
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
                                <input type="text" id="idCopropietario" name="idCopropietario">
                            </div>
                            <div class="col-md-5"></div>
                            <div class="col-md-3">
                                <div class="modal-footer border-0">
                                    <button type="submit" name="actualizarCopropietario" class="btn btn-primary">Registrar</button>
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