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
                        <h2 class="modal-title font-italic" id="copropietarioLabel"><i class="fa-solid fa-person-shelter fa-lg"></i> Copropietario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./copropietario.php" method="POST" class="formulario" id="formCopropietario" autocomplete="off">
                    <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nombre:</strong></label>
                                <input type="text" name="nombre" id="nombre" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="copropietario__nombre"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apellido:</strong></label>
                                <input type="text" name="apellido" id="apellido" class="form-control" onkeypress="return letraEspacio(event)" required>
                                <small id="copropietario__apellido"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">CI:</strong></label>
                                <input type="number" min="1" name="ci" id="ci" class="form-control" onkeypress="return numero(event)" required>
                                <small id="copropietario__ci"  class="mensaje"></small>
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
                                <small id="copropietario__correo"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Teléfono:</strong></label>
                                <input type="number" min="1" name="telefono" id="telefono" class="form-control" onkeypress="return numero(event)" required>
                                <small id="copropietario__telefono"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apartamento:</strong></label>
                                <select name="apartamento" id="apartamento" class="form-control">
                                <option value="0">Seleccionar</option>
                                <?php foreach($apartamentos as $apartamento){ 
                                    if($apartamento['estado'] == 1){?>
                                    <option value="<?php echo $apartamento["id"]?>"><?php echo $apartamento["numero_apartamento"]?></option>
                                <?php }
                                    } ?>
                                </select>
                                <small id="copropietario__apartamento"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Nro. Residente:</strong></label>
                                <input type="number" min="1" name="residente" id="residente" class="form-control" onkeypress="return numero(event)" required>
                                <small id="copropietario__residente"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                            <label class="form-label"><strong class="f-size-7">Nro. Mascota:</strong></label>
                                <input type="number" min="0" name="mascota" id="mascota" class="form-control" onkeypress="return numero(event)" required>
                                <small id="copropietario__mascota"  class="mensaje"></small>
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
                        <h2 class="modal-title font-italic" id="funcionarioLabel"><i class="fa fa-briefcase"></i> Copropietario</h2>
                    </div>
                </div>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./copropietario.php" method="POST" class="formulario" id="formCopropietarioEdit" autocomplete="off">
                    <p class="invisible alert-danger text-center p-2" id="copropietarioAlertaEdit"><strong>Alerta!</strong> 
                    valida tus campos haciendo click en cada uno de ellos.</p>
                        <div class="row  mt-4">
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Apartamento:</strong></label>
                                <select name="apartamentoEdit" id="apartamentoSelect" class="form-control">
                                <?php foreach($apartamentos as $apartamento){ ?>
                                    <option value="<?php echo $apartamento["id"]?>"><?php echo $apartamento["numero_apartamento"]?></option>
                                <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label"><strong class="f-size-7">Residente:</strong></label>
                                <input type="number" min="0" name="residenteEdit" id="residenteEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="copropietario__residenteEdit"  class="mensaje"></small>
                            </div>
                            <div class="col-md-4">
                            <label class="form-label"><strong class="f-size-7">Mascota:</strong></label>
                                <input type="number" min="0" name="mascotaEdit" id="mascotaEdit" class="form-control" onkeypress="return numero(event)" required>
                                <small id="copropietario__mascotaEdit"  class="mensaje"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mt-4">
                                <input type="hidden" class="ocult" id="idCopropietario" name="idCopropietario">
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