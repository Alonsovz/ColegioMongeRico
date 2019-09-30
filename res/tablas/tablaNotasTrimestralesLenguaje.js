var tablaNotasTrimestralesLenguaje;

function filtrarTablaTrimestreLenguaje(anio,grado){
$(function() {
    if($('#dtTrimestralesLenguaje').length) {
        tablaNotasTrimestralesLenguaje = $('#dtTrimestralesLenguaje').DataTable({
            "ajax": {
                "url": "?1=LenguajeController&2=mostrarNotasTrimestralesLenguaje&anio="+anio+"&grado="+grado,
                "type": "POST"
            },
            "columns": [{
                    "data": "idAlumno"
                },
                {
                    "data": "nombreAlumno"
                },
               
                {
                    "data": "promLenguajeFe"             
                },
                {
                    "data": "promLenguajeMa"             
                },
                {
                    "data": "promLenguajeAb"             
                }
                ,
                {
                    "data": "promLenguajeAb"             
                }
                ,
                {
                    "data": "promLenguajeMayo"             
                }
                ,
                {
                    "data": "promLenguajeJun"             
                }
                ,
                {
                    "data": "promLenguajeJul"             
                }
                ,
                {
                    "data": "promLenguajeAb"             
                }
                ,
                {
                    "data": "promLenguajeAgosto"             
                }
                ,
                {
                    "data": "promLenguajeSep"             
                }
                ,
                {
                    "data": "promLenguajeOctubre"             
                }
                
                ,
                {
                    "data": "promLenguajeAb"             
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
         tablaNotasTrimestralesLenguaje.column(0).visible(false);
    }
});
}