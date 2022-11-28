function advertencia(e) {
    e.preventDefault();
    var url = e.currentTarget.getAttribute('href');

    Swal.fire({
        title: '¿Estas seguro?',
        text: "Recuerda el dato se eliminara permanentemente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Eliminar!'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Eliminado correctamente',
                showConfirmButton: false,
                timer: 1000,
            })
            setTimeout(function() {
                window.location.href = url;
            }, 500);
        }
    })
};

// function guardar(e) {
//     e.preventDefault();
//     var url = e.currentTarget.getAttribute('href');
//     Swal.fire({
//         position: 'top-end',
//         icon: 'success',
//         title: 'Guardado correctamente',
//         showConfirmButton: false,
//         timer: 1000
//     })
//     setTimeout(function() {
//         window.location.href = url;
//     }, 500);
// };
