var tablaColectorMes;

function fitrarTablaColector(mes,anio,grado){
$(function() {
    if($('#dtColector').length) {
        tablaColectorMes = $('#dtColector').DataTable({
            "ajax": {
                "url": "?1=GestionGradosController&2=mostrarNotasColectores&mes="+mes+"&anio="+anio+"&grado="+grado,
                "type": "POST"
            },
            "columns": [{
                    "data": "idAlumno"
                },
                {
                    "data": "nombreAlumno"
                },
               
                {
                    "data": "promedioLenguaje"             
                },
                {
                    "data": "promedioMate"             
                },
                {
                    "data": "promedioCiencias"             
                },
                {
                    "data": "promedioSociales"             
                },
                {
                    "data": "promedioIngles"             
                },
                {
                    "data": "promedioArtistica"             
                },
                {
                    "data": "promedioFisica"             
                },
                {
                    "data": "promedioFe"             
                },
                {
                    "data": "promedioMoral"             
                },
                {
                    "data": "promedioCompu"             
                },
                {
                    "data": "promedioConducta"             
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
        // tablaColectorMes.column(0).visible(false);
    }
});
}