
<!-- MODAL FORMULARIO REGISTRAR-->
<div class="modal fade" id="registrarEstacionamientoModal" tabindex="-1" aria-labelledby="estacionamientoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
    <div class="modal-header">
        <h2 class="modal-title" id="estacionamientoLabel"><i class="fa fa-braille"></i> Estacionamiento</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ">
        <div class="container">
            <!-- FORMULARIO -->
            <form action="./recinto.php" method="POST">
            <div class="row  mt-2">
            <div class="col-md-6">
                    <select name="idPabellon" id="idPabellon" class="custom-select">
                        <option value="0">Seleccionar Pabellon</option>
                        <?php foreach($pabellones as $pabellon){;
                            if($pabellon['estado'] == 1){
                            ?>
                        <option value="<?php echo $pabellon['id'];?>"><?php echo $pabellon['numero_pabellon'];?></option>
                            <?php }?>
                        <?php };?>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="number" name="numeroEstacionamiento" class="form-control" onkeypress="return valideKey(event)" placeholder="Nro. Estacionamiento" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="guardarEstacionamiento" class="btn btn-primary">Registrar</button>
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
<div class="modal fade" id="editarModalTipo" tabindex="-1" aria-labelledby="estacionamientoLabel" aria-hidden="true">
<div class="modal-dialog d-flex justify-content-center">
    <div class="modal-content w-75">
    <div class="modal-header">
        <h2 class="modal-title" id="estacionamientoLabel"><i class="fa fa-building"></i></h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-body ">
    <div class="container">
            <!-- FORMULARIO -->
            <form action="./recinto.php" method="POST">
            <div class="row  mt-2">
            <div class="col-md-6">
                    <select name="idPabellon" id="idNumeroPabellon" class="custom-select pabellon">
                        <?php foreach($pabellones as $pabellon){;
                            if($pabellon['estado'] == 1){
                            ?>
                        <option value="<?php echo $pabellon['id'];?>"><?php echo $pabellon['numero_pabellon'];?></option>
                            <?php }?>
                        <?php };?>
                    </select>
                </div>
                <div class="col-md-6">
                    <input type="number" name="numeroEstacionamiento" id="numeroEstacionamiento" onkeypress="return valideKey(event)" class="form-control" placeholder="Nro. Estacionamiento">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"><input type="hidden" class="ocult" name="idEstacionamiento" onkeypress="return valideKey(event)" id="idEstacionamiento"></div>
                <div class="col-md-5"></div>
                <div class="col-md-3">
                <div class="modal-footer">
                    <button type="submit" name="actualizarEstacionamiento" class="btn btn-primary">Registrar</button>
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