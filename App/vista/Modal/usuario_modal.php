
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarUsuarioModal" tabindex="-1" aria-labelledby="usuarioLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title text-center" id="usuarioLabel">Formulario usuario</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./Gasto.php" method="POST" id="form1">
            <div class="row  mt-2">
                <div class="col-md-4">
                    <select class="custom-select" name="tipo_gasto">
                    <?php foreach($usuarios as $usuario){ ?>
                    <option value="<?php echo $usuario['id'];?>"><?php echo $usuario['nombre_rol'];?></option>
                    <?php }; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripción">
                </div>
                <div class="col-md-4">
                <input type="number" name="monto" class="form-control" placeholder="Monto">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="guardarGasto" class="btn btn-primary">Registrar</button>
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
