function advertencia(e){
    e.preventDefault();
    var url = e.currentTarget.getAttribute('href');
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Recuerda el dato se eliminara permanentemente",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d22',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'No, Cancelar!'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href=url;
        }
    });
};
