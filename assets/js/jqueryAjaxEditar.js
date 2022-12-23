$(document).ready(function () {
    $('.editarbtn').on('click', function () {
        $('#editarModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();


        var idGasto = data[0],
            $tipoGastoSelect = data[1],
            descripcionGastoEdit = data[2].toLowerCase(),
            montoEdit = data[3],
            ideTipoGasto = data[5];
        $('#idGasto').val(idGasto);
        $("#tipoGastoSelect").prepend("<option value="+ ideTipoGasto +" selected='selected'>"+ $tipoGastoSelect +"</option>");
        $('#descripcionGastoEdit').val(descripcionGastoEdit);
        $('#montoEdit').val(montoEdit);

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
            descripcionArticuloEdit = data[2],
            monto = data[3];
        $('#idArticulo').val(idArticulo);
        $("#tipoArticuloSelect").prepend("<option value="+ idtipoarticulo +" selected='selected'>"+ tipoArticulo +"</option>");
        $('#descripcionArticuloEdit').val(descripcionArticuloEdit);
        $('#montoArticulo').val(monto);

        var idFuncionario = data[0],
        cargo = data[7].toLowerCase(),
        salario = data[8];
        $('#idFuncionario').val(idFuncionario);
        $('#cargoEdit').val(cargo);
        $('#salarioEdit').val(salario);

        var idUsuario = data[0],
        rolID = data[6],
        rolSelect = data[7];
        $('#idUsuario').val(idUsuario);
        $("#rolSelect").prepend("<option value="+ rolID +" selected='selected'>"+ rolSelect +"</option>");


        var idCopropietario = data[0],
        apartamentoID = data[10],
        apartamentoEdit = data[7],
        residenteEdit = data[8],
        mascotaEdit = data[9];
        $('#idCopropietario').val(idCopropietario);
        $("#apartamentoSelect").prepend("<option value="+ apartamentoID +" selected='selected'>"+ apartamentoEdit +"</option>");
        $('#residenteEdit').val(residenteEdit);
        $('#mascotaEdit').val(mascotaEdit);

        var idPersona = data[0],
        nombre = data[1].toLowerCase(),
        apellido = data[2].toLowerCase(),
        ci = data[3],
        complementoCi = data[4],
        correo = data[5],
        telefono = data[6];
        $('#idPersona').val(idPersona);
        $('#nombreEdit').val(nombre);
        $('#apellidoEdit').val(apellido);
        $('#ciEdit').val(ci);
        $('#complemento_ci').val(complementoCi);
        $('#correoEdit').val(correo);
        $('#telefonoEdit').val(telefono);

    });
// EDITAR TIPOS DE TIPOS
    $('.editarbtnTipo').on('click', function () {
        $('#editarModalTipo').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        var idTipoGasto = data[0],
        nombreTipoEdit = data[1].toLowerCase();
        $('#idTipoGasto').val(idTipoGasto)
        $('#nombreTipoEdit').val(nombreTipoEdit);

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
    // COPROPIETRAIO
    $('.editarCopropietario').on('click', function () {
        $('#registrarCopropietarioModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        // console.log(data);
        var idPerson = data[0];
        $('#idPerson').val(idPerson);
    });
    // USUARIO
    $('.editarUsuario').on('click', function () {
        $('#registrarUsuarioModal').modal('show');
        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        // console.log(data);
        var idPerson2 = data[0];
        $('#idPerson2').val(idPerson2);
    });
    // FUNCIONARIO
    $('.editarFuncionario').on('click', function () {
        $('#registrarFuncionarioModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
        // console.log(data);
        var idPerson3 = data[0];
        $('#idPerson3').val(idPerson3);
    });
});


$('.ocult').hide();
$('.desactivar').attr("disabled", true);