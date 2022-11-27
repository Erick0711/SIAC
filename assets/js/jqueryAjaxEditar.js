$(document).ready(function () {
    $('.editarbtn').on('click', function () {
        $('#editarModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();


        var idGasto = data[0],
            descripcion = data[2],
            monto = data[3];

        $('#idGasto').val(idGasto);
        $("#idNumeroPabellon").prepend("<option value="+ idPabellon +" selected='selected'>"+ numeroPabellon +"</option>");
        $('#descripcion').val(descripcion);
        $('#monto').val(monto);

        var idPabellon = data[0],
            numeroPabellon = data[1];

        $('#idPabellon').val(idPabellon);
        $('#numeroPabellon').val(numeroPabellon);

        var idDepartamento = data[0],
            numeroDepartamento = data[1];
        $('#idApartamento').val(idDepartamento);
        $('#numeroApartamento').val(numeroDepartamento);

        var idArticulo = data[0],
            tipoArticulo = data[1],
            descripcion = data[2],
            monto = data[3];

        $('#idArticulo').val(idArticulo);
        $('#tipoArticulo').val(tipoArticulo);
        $('#descripcion').val(descripcion);
        $('#montoArticulo').val(monto);
    });

    $('.editarbtnTipo').on('click', function () {
        $('#editarModalTipo').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        var idtipoGasto = data[0],
            tipoGasto = data[1];
        $('#idtipoGasto').val(idtipoGasto);
        $('#tipoGasto').val(tipoGasto);

        var idEstacionamiento = data[0],
            numeroPabellon = data[1],
            numeroEstacionamiento = data[2],
            idPabellon = data[3];
        $("#idNumeroPabellon").prepend("<option value="+ idPabellon +" selected='selected'>"+ numeroPabellon +"</option>");
        $('#idEstacionamiento').val(idEstacionamiento);
        $('#numeroEstacionamiento').val(numeroEstacionamiento);

        console.log(data);
        var idTipoArticulo = data[0],
            tipoArticulo = data[1];
        $('#idTipoArticulo').val(idTipoArticulo);
        $('#tipoArticulo').val(tipoArticulo);
    });
});
$('.hidden').hide();
