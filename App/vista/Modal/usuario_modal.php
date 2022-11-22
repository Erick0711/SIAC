
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarUsuarioModal" tabindex="-1" aria-labelledby="usuarioLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title" id="usuarioLabel"><i class="fa fa-address-card"></i> Usuario</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./usuario.php" method="POST">
            <div class="row  mt-4">
                <div class="col-md-4">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
                </div>
                <div class="col-md-4">
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido">
                </div>
                <div class="col-md-4">
                <input type="number" name="ci" class="form-control" placeholder="CI">
                </div>
            </div>
            <div class="row  mt-4">
                <div class="col-md-4">
                <input type="text" name="complemento_ci" class="form-control" placeholder="Complemento CI">
                </div>
                <div class="col-md-4">
                    <input type="text" name="correo" class="form-control" placeholder="Correo">
                </div>
                <div class="col-md-4">
                <input type="number" name="telefono" class="form-control" placeholder="Teléfono">
                </div>
            </div>
            <div class="row  mt-4">
                <div class="col-md-4">
                    <select class="custom-select" name="rol">
                    <option value="0">Seleccionar</option>
                    <?php foreach($roles as $rol){ ?>
                    <option value="<?php echo $rol['id'];?>"><?php echo $rol['nombre_rol'];?></option>
                    <?php }; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                </div>
                <div class="col-md-4">
                <input type="password" name="contrasenia" class="form-control" placeholder="Contrasenia">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
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
    <div class="modal-header">
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
                    <?php foreach($tipos as $tipo){ ?>
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
