
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarApartamentoModal" tabindex="-1" aria-labelledby="apartamentoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
    <div class="modal-header">
        <h2 class="modal-title" id="apartamentoLabel"><i class="fa fa-building"></i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./apartamento.php" method="POST">
            <div class="row  mt-2">
                <div class="col-md-12">
                    <input type="text" name="numero_apartamento" class="form-control" placeholder="Nro. Apartamento">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="guardarApartamento" class="btn btn-primary">Registrar</button>
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

<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="editarApartamentoModal" tabindex="-1" aria-labelledby="editarApartamentoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content  w-75">
    <div class="modal-header">
        <h2 class="modal-title" id="editarApartamentoLabel"><i class="fa fa-building"></i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./apartamento.php" method="POST">
            <div class="row mt-2">
                <div class="col-md-12">
                    <input type="text" name="numero_apartamento" id="numeroApartamento" class="form-control" placeholder="Nro. Apartamento">
                </div>
                <div class="col-md-1">
                <input type="text" name="idApartamento" id="idApartamento">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="editarApartamento" class="btn btn-primary">Guardar</button>
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
