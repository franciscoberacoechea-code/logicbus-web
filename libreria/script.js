var xmlhttp = new XMLHttpRequest();
var url = "https://www.logicbus.com.mx/libreria/celdas.json";
xmlhttp.open("GET", url, true);
xmlhttp.send();
xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        var table = $('#celdas').DataTable({
            /*"info": false,*/
            "language": { /* TRADUCCIONES */
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Sin resultados",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sin registros",
                "infoFiltered": "(filtrados de _MAX_ registros)",
                "search": "Buscar:",
                "paginate": {
                    "first": "Inicio",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
            "data": data.data,/* PARA LEER LOS DATOS DEL JSON */
            "columns": [ /* RELACIONAR LAS COLUMNAS */
                { "data": "familia" },
                { "data": "img" },
                { "data": "num" },
                { "data": "capacidad" },
                { "data": "direccion" },
                { "data": "tipo" },
                { "data": "conexion" }
            ],
            orderCellsTop: true,
            dom: 'Bfrtip',
            fixedColumns: {
                leftColumns: 2,
            },
            initComplete: function () {
                var api = this.api();
                $('.filterhead', api.table().header()).each(function (i) {
                    var column = api.column(i);
                    var select = $('<select data-index="' + i + '"><option value=""></option></select>')
                        .appendTo($(this).empty());

                    /** CONDICIONAL PARA DETECTAR COLUMNAS NUMERICAS Y ORDENAR LAS OPTIONS **/
                    if (column.index() === 3) {
                        column.data().unique().sort(compareNumbers).each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });

                    } else {
                        column.data().unique().sort().each(function (d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    }
                });
            }
        });
        /** PARA PINTAR LOS FILTROS DE COLUMNAS **/
        $(table.table().container()).on('change', 'thead select', function () {

            var val = $.fn.dataTable.util.escapeRegex(
                $(this).val()
            );

            table.column($(this).data('index'))
                .search(val ? '^' + val + '$' : '', true, false)
                .draw();

        });
        /** DESHABILITA LOS FILTROS DE IMAGEN Y NUMERO DE PARTE */
        $("#img").children().attr('disabled', 'disabled');
        $("#num").children().attr('disabled', 'disabled');


    }
}

/** FUNCION PARA EL ORDEN DE LA/LAS COLUMNA/AS DE NUMEROS **/

function compareNumbers(a, b) {
    var intVal = function (i) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '') * 1 :
            typeof i === 'number' ?
                i : 0;
    };
    return intVal(a) - intVal(b);
}