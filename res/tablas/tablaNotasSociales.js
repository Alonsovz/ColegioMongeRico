var tablaNotasSociales;

function fitrarTablaSociales(mes,anio,grado){
$(function() {
    if($('#dtNotasSociales').length) {
        tablaNotasSociales = $('#dtNotasSociales').DataTable({
            "ajax": {
                "url": "?1=SocialesController&2=mostrarNotasColectoresSociales&mes="+mes+"&anio="+anio+"&grado="+grado,
                "type": "POST"
            },
            "columns": [{
                    "data": "idAlumno"
                },
                {
                    "data": "nombreAlumno"
                },
               
                {
                    "data": "nota1"             
                },
                {
                    "data": "nota2"             
                },
                {
                    "data": "nota3"             
                },
                {
                    "data": "promedio"             
                },
                {
                    "data": "Acciones"             
                }
            ],
            "order": [
                [1, "asc"]
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
        tablaNotasSociales.column(0).visible(false);
    }
});
}