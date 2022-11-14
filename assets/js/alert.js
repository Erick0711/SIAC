document.getElementById("eliminarGasto").addEventListener('click', function(e){
    e.preventDefault();
    var url = e.currentTarget.getAttribute('href');
    Swal.fire({
        title: '¿Estas seguro?',
        text: "Recuerda que el dato se dara de baja",
        icon: 'Advertencia',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d22',
        confirmButtonText: 'Si, eliminar!',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = url;
        }
    });
});

