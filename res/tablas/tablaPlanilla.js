var tablaMaestros;
function filtrarPlanilla(mes,anio) {
$(function() {
    if($('#dtMaestros').length) {
        tablaMaestros = $('#dtMaestros').DataTable({
            "ajax": {
                "url": "?1=MaestrosController&2=mostrarPlanilla&mes="+mes+"&anio="+anio,
                "type": "POST"
            },
            "columns": [{
                    "data": "idMaestro"
                },
                {
                    "data": "nombre"
                },
                {
                    "data": "pago"             
                },
                {
                    "data": "sueldoM"             
                },
                {
                    "data": "sueldoDeven"             
                },
                {
                    "data": "vacacionE"             
                },
                {
                    "data": "aguinaldoE"             
                },
                {
                    "data": "afpEmVE"             
                },
                {
                    "data": "afpEmCE"             
                },
                {
                    "data": "isssEE"             
                },
                {
                    "data": "rentaE"             
                },
                {
                    "data": "otrosE"             
                },
                {
                    "data": "totalDesME"             
                },
                {
                    "data": "totalPE"             
                },
                {
                    "data": "Acciones"             
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
            },
            "initComplete": function(settings, json) {               
                $('#cargando').hide();
                
                swal({
                    title: 'Listo',
                    text: 'Datos procesados correctamente',
                    imageUrl: "./res/img/success.gif",
                    imageWidth: 170,
                    imageHeight: 175,
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    allowEnterKey: false,
                    showConfirmButton: false,
                    confirmButtonColor: "#00903C",
                    timer: 3000
                }).then((result) => {
                $('#loader').hide(2000);
                $('#app').fadeIn(2000);
                
                }); 
                    
              },
        });

         // Ocultar columna de id de Usuario
         tablaMaestros.column(0).visible(false);
    }
});
}