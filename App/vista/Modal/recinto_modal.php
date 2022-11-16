
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarRecintoModal" tabindex="-1" aria-labelledby="recintoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
    <div class="modal-header">
        <h2 class="modal-title" id="recintoLabel"><i class="fa fa-braille"></i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./recinto.php" method="POST">
            <div class="row  mt-2">
                <div class="col-md-12">
                    <input type="text" name="numero_pabellon" class="form-control" placeholder="Nro. Pabellon">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="guardarPabellon" class="btn btn-primary">Registrar</button>
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

<div class="modal fade" id="editarPabellonModal" tabindex="-1" aria-labelledby="recintoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
    <div class="modal-header">
        <h2 class="modal-title" id="recintoLabel"><i class="fa fa-building"></i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./recinto.php" method="POST">
            <div class="row  mt-2">
                <div class="col-md-12">
                    <input type="text" name="numero_pabellon" id="numeroPabellon" class="form-control" placeholder="Nro. Pabellon">
                </div>
                <div class="col-md-1">
                <input type="text" name="idPabellon" id="idPabellon">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="editarPabellon" class="btn btn-primary">Registrar</button>
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