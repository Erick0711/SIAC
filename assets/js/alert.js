function advertencia(e) {
    e.preventDefault();
    var url = e.currentTarget.getAttribute('href');

    Swal.fire({
        title: '¿Estas seguro?',
        text: "Recuerda el dato se eliminara!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Eliminar!',
        cancelButtonText: 'Cancelar'
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

function advertenciaActivar(e) {
    e.preventDefault();
    var url = e.currentTarget.getAttribute('href');

    Swal.fire({
        title: '¿Estas seguro?',
        text: "Recuerda el dato se activara nuevamente!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, Activar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Activado correctamente',
                showConfirmButton: false,
                timer: 1000,
            })
            setTimeout(function() {
                window.location.href = url;
            }, 500);
        }
    })
};


