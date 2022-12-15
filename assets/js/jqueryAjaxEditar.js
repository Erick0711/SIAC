$(document).ready(function () {
    $('.editarbtn').on('click', function () {
        $('#editarModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();


        var idGasto = data[0],
            $tipoGastoSelect = data[1],
            descripcion = data[2],
            monto = data[3],
            ideTipoGasto = data[5];

        $('#idGasto').val(idGasto);
        $("#tipoGastoSelect").prepend("<option value="+ ideTipoGasto +" selected='selected'>"+ $tipoGastoSelect +"</option>");
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
            idtipoarticulo = data[5],
            descripcion = data[2],
            monto = data[3];

        $('#idArticulo').val(idArticulo);
        $("#tipoArticuloSelect").prepend("<option value="+ idtipoarticulo +" selected='selected'>"+ tipoArticulo +"</option>");
        $('#descripcion').val(descripcion);
        $('#montoArticulo').val(monto);

        var idFuncionario = data[0],
        cargo = data[7],
        salario = data[8];

        $('#idFuncionario').val(idFuncionario);
        $('#cargo').val(cargo);
        $('#salario').val(salario);

        var idUsuario = data[0],
        rolID = data[6],
        rolSelect = data[7];
        console.log(data);
        $('#idUsuario').val(idUsuario);
        $("#rolSelect").prepend("<option value="+ rolID +" selected='selected'>"+ rolSelect +"</option>");


        var idCopropietario = data[0],
        apartamentoID = data[10],
        apartamento = data[7],
        residente = data[8],
        mascota = data[9];
        $('#idCopropietario').val(idCopropietario);
        $("#apartamentoSelect").prepend("<option value="+ apartamentoID +" selected='selected'>"+ apartamento +"</option>");
        $('#residente').val(residente);
        $('#mascota').val(mascota);
    });
// EDITAR TIPOS DE TIPOS
    $('.editarbtnTipo').on('click', function () {
        $('#editarModalTipo').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        var idTipoGasto = data[0],
            tipoGasto = data[1];
        $('#idTipoGasto').val(idTipoGasto)
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


        var idRol = data[0],
            rol = data[1];
        $('#idRol').val(idRol);
        $('#nombreRol').val(rol);
    });
});
$('.ocult').hide();
$('.desactivar').attr("disabled", true);