<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarRolModal" tabindex="-1" aria-labelledby="rolLabel" aria-hidden="true">
    <div class="modal-dialog d-flex justify-content-center">
        <div class="modal-content w-50">
            <div class="modal-header">
                <h2 class="modal-title text-center" id="rolLabel"><i class="fa fa-address-card-o"></i> Rol</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <!-- FORMULARIO -->
                    <form action="./usuario.php" method="POST">
                        <div class="row  mt-2">
                            <div class="col-md-12">
                                <input type="text" id="rol" name="rol" class="form-control" placeholder="Rol">
                            </div>
                            <div class="col-md-12 mt-2">
                            <textarea class="form-control" name="descripcion" rows="3" placeholder="Descripción..."></textarea>
                            </div>
                        </div>
                        <div class="row  mt-2">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <button type="submit" name="guardarRol" class="btn btn-primary btn-block">Registrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- FIN CONTENIDO DEL MODAL -->
            </div>
        </div>
    </div>
</div>