
$(document).ready(function () {
    $('.editarbtn').on('click', function () {
        $('#editarModalGasto').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        // console.log(data);

        $('#idGasto').val(data[0]);
        $('#descripcion').val(data[2]);
        $('#monto').val(data[3]);
    });
});


$(document).ready(function () {
    $('.editarPabellon').on('click', function () {
        $('#editarModalPabellon').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();
    //    console.log(data);
        $('#idPabellon').val(data[0]);
        $('#numeroPabellon').val(data[1]);
    });
});


$(document).ready(function () {
    $('.editarApartamento').on('click', function () {
        $('#editarModalApartamento').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();

        // console.log(data);

        $('#idApartamento').val(data[0]);
        $('#numeroApartamento').val(data[1]);
    });
});
