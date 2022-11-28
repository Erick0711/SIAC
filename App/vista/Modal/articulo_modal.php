
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarArticuloModal" tabindex="-1" aria-labelledby="registrarArticuloModal" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title text-center" id="articuloTipoLabel"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Artículo</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./articulo.php" method="POST">
            <div class="row  mt-2">
            <div class="col-md-4">
                <select class="custom-select" name="tipoArticulo">
                    <option value="0">Seleccionar</option>
                    <?php foreach($tipos as $tipo){ ?>
                    <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre_articulo']; ?></option>
                    <?php }; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" name="descripcion" class="form-control" placeholder="Descripción...">
                </div>
                <div class="col-md-4">
                    <input type="text" name="montoArticulo" class="form-control" placeholder="Monto...">
                </div>
            </div>
            <div class="row  mt-2">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" name="registrarArticulo" class="btn btn-primary btn-block">Registrar</button>
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
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="articuloLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content">
    <div class="modal-header">
        <h2 class="modal-title text-center" id="articuloLabel"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Articulo</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body">
    <div class="container">
            <!-- FORMULARIO -->
            <form action="./articulo.php" method="POST">
            <div class="row  mt-2">
            <div class="col-md-4">
                <select class="custom-select" name="tipoArticulo">
                    <option value="0">Seleccionar</option>
                    <?php foreach($tipos as $tipo){ ?>
                    <option value="<?php echo $tipo['id']; ?>"><?php echo $tipo['nombre_articulo']; ?></option>
                    <?php }; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="Tipo de Articulo...">
                </div>
                <div class="col-md-4">
                    <input type="text" name="montoArticulo" id="montoArticulo" class="form-control" placeholder="Tipo de Articulo...">
                </div>
            </div>
            <div class="row  mt-2">
                <div class="col-md-4"><input type="text" name="idArticulo" id="idArticulo"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <button type="submit" name="actualizarArticulo" class="btn btn-primary btn-block">Registrar</button>
                </div>
                
            </div>
        </form>
        </div>
    <!-- FIN CONTENIDO DEL MODAL -->
    </div>
    </div>
</div>
</div>