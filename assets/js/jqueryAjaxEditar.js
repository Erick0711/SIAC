$(document).ready(function () {
    $('.editarbtn').on('click', function () {
        $('#editarModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

            // console.log(data);
            var idGasto = data[0],
                descripcion = data[2],
                monto = data[3];

            $('#idGasto').val(idGasto);
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
    });
    $('.editarbtnTipo').on('click', function () {
        $('#editarModalTipo').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

            console.log(data);
            var idtipoGasto = data[0];
            var tipoGasto = data[1];
            $('#idtipoGasto').val(idtipoGasto);
            $('#tipoGasto').val(tipoGasto);
    });
});

