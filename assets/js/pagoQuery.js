$(document).ready(function () {
    $('.pago').on('click', function () {
        $('#pagoModal').modal('show');

        $tr = $(this).closest('tr');

        var data = $tr.children("td").map(function () {
            return $(this).text();
        }).get();


        var id = data[0],
            nombre = data[1],
            apellido = data[2],
            numeroApartamento = data[3],
            ci = data[4]
        console.log(data);
        $('#id').val(id);
        $('#nombre').val(nombre);
        $('#apellido').val(apellido);
        $('#numeroApartamento').val(numeroApartamento);
        $('#ci').val(ci);
    });
});

