var tablaNotasTrimestraleCiencias;

function filtrarTablaTrimestreCiencias(anio,grado){
$(function() {
    if($('#dtTrimestralesCiencias').length) {
        tablaNotasTrimestraleCiencias = $('#dtTrimestralesCiencias').DataTable({
            "ajax": {
                "url": "?1=CienciasController&2=mostrarNotasTrimestralesCiencias&anio="+anio+"&grado="+grado,
                "type": "POST"
            },
            "columns": [{
                "data": "idAlumno"
            },
            {
                "data": "nombreAlumno"
            },
           
            {
                "data": "promFe"             
            },
            {
                "data": "promMa"             
            },
            {
                "data": "promAb"             
            }
            ,
            {
                "data": "Promedio1"             
            }
            ,
            {
                "data": "promMayo"             
            }
            ,
            {
                "data": "promJun"             
            }
            ,
            {
                "data": "promJul"             
            }
            ,
            {
                "data": "Promedio2"             
            }
            ,
            {
                "data": "promAgosto"             
            }
            ,
            {
                "data": "promSep"             
            }
            ,
            {
                "data": "promOctubre"             
            }
            
            ,
            {
                "data": "Promedio3"             
            }
            ,
            {
                "data": "PromedioF"             
            }
        ],
        "order": [
            [0, "desc"]
        ],
            "language": {
                "sProcessing": "Procesando...",
                "sLengthMenu": "Mostrar _MENU_ registros",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix": "",
                "sSearch": "Buscar:",
                "sUrl": "",
                "sInfoThousands": ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast": "Último",
                    "sNext": "Siguiente",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            }
        });

         // Ocultar columna de id de Usuario
        // tablaNotasTrimestraleCiencias.column(0).visible(false);
    }
});
}