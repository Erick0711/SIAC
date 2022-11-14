$('#tablaGasto').DataTable({
    responsive: true,
    autoWidh: false,

    "language":{
        "lengthMenu": "Mostrar " +
                    `<select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="-1">All</option>
                    </select> ` + 
                    "registros por página",
                    "ZeroRecords": "Nada encontrado",
                    "info": "Página _PAGE_ de _PAGES_",
                    "infoEmpty": "Ningun dato encontrado",
                    "infoFiltered": "(Filtrado de _MAX_ registro totales)",
                    'search': 'Buscar:',
                    'paginate':{
                    'next': 'Siguente',
                    'previous': 'Anterior'
                    }

    }
});
