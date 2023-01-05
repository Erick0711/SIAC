    <!-- MODAL FORMULARIO REGISTRAR-->
    <div class="modal fade" id="pagoModal" tabindex="-1" aria-labelledby="pagoLabel" aria-hidden="true">
        <div class="modal-dialog d-flex justify-content-center">
            <div class="modal-content w-50">
                <div class="modal-header bg-warning text-dark">
                    <div class="row w-100">
                        <div class="col-md-12 d-flex justify-content-end align-items-end">
                            <button type="button" class="btn btn-danger p-2 close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="col-md-12 d-flex justify-content-center">
                            <h2 class="modal-title font-italic" id="pagoLabel"><i class="fa-solid fa-sack-dollar fa-2x"></i> Pago</h2>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <!-- FORMULARIO -->
                        <form action="./pago.php" method="POST" class="border border-warning p-2" autocomplete="off">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr class="">
                                                    <td scope="row" class="bg-dark text-white">NOMBRE </td>
                                                    <td scope="row"><input type="text" class="text-center border-0 p-1 rounded" name="nombre" id="nombre" readonly></td>
                                                </tr>
                                                <tr class="">
                                                    <td scope="row" class="bg-dark text-white">APELLIDO </td>
                                                    <td scope="row"><input type="text" class="text-center border-0 p-1 rounded" name="apellido" id="apellido" readonly></td>
                                                </tr>
                                                <tr class="">
                                                    <td scope="row" class="bg-dark text-white">APARTAMENTO </td>
                                                    <td scope="row"><input type="text" class="text-center border-0 p-1 rounded" name="numeroApartamento" id="numeroApartamento" readonly></td>
                                                </tr>
                                                <tr class="">
                                                    <td scope="row" class="bg-dark text-white">CI </td>
                                                    <td scope="row"><input type="text" class="text-center border-0 p-1 rounded" name="ci" id="ci" readonly></td>
                                                </tr>
                                                <tr class="">
                                                    <td scope="row" class="bg-dark text-white">TIPO PAGO </td>
                                                    <td scope="row" >
                                                        <select name="tipoPago" id="tipoPago" class="form-control">
                                                        <option value="0">Seleccionar</option>
                                                        <?php foreach($tiposPagos as $tipoPago){ ?>
                                                            <option value="<?php echo $tipoPago['id']?>"><?php echo ucfirst($tipoPago['nombre'])?></option>
                                                        <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td scope="row" class="bg-dark text-white">MONTO </td>
                                                    <td scope="row"><input type="text" name="totalExpensa" class="text-center border-0 p-1 rounded" value="<?php echo $expensa; ?>Bs" readonly></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-block" name="guardarPago" value="Pagar">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- FIN CONTENIDO DEL MODAL -->
                </div>
            </div>
        </div>
    </div>