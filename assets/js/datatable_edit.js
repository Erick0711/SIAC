$('#tabla').DataTable({
    responsive: true,
    autoWidh: false,
    "order": [[0, "desc" ]],
    "pageLength": 3,
    "language":{
        "lengthMenu": "Mostrar " +
                    `<select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="-1">All</option>
                    </select> ` ,
                    // "registros por página",
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

$('#tabla2').DataTable({
    responsive: true,
    autoWidh: false,
    "order": [[0, "desc" ]],
    "pageLength": 3,
    "language":{
        "lengthMenu": "Mostrar " +
                    `<select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="3">3</option>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="-1">All</option>
                    </select> `, 
                    // "registros por página",
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