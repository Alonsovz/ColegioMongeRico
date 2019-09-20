
<div id="app">
        <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <i class="users icon"></i>
                        Datos de Maestros/as dados de baja<font color="#BF1807" size="20px">.</font>
                    </div>
            </div>

            <div class="row title-bar">
                <div class="sixteen wide column">
                    <div class="ui divider"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="sixteen wide column">
                <table id="dtMaestros" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #BF1807; color:white;">N°</th>
                            <th style="background-color: #BF1807; color:white;">Nombre</th>
                            <th style="background-color: #BF1807; color:white;">Teléfono</th>
                            <th style="background-color: #BF1807; color:white;">Email</th>
                            <th style="background-color: #BF1807; color:white;">Fecha de baja</th>
                            <th style="background-color: #BF1807; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
</div>


<div id="modalDetalles" class="ui fullscreen  basic modal" style="top: -5%;">
    <div class="header" style="color:aqua;font-weight:bold;">
    <i class="user icon"></i><i class="clipboard outline icon"></i> Datos del maestro: <a id="txtNombre" style="color:yellow;"></a>
    <br>
    
    <i class="calendar icon"></i><i class="close icon"></i>Fecha de baja: 
    <a id="txtFecha" style="color:#ABFC1D;font-weight:bold;"></a>
    
    </div>
    <hr>
    <div class="scrolling content" style="color:white; text-align:center;">
    <form class=" ui form" style="color:white; text-align:center;" id="frmMaestro"  method="POST" enctype="multipart/form-data">
    <input type="hidden" id="idMaestro" name="idMaestro">
        <div class="field">
            <div class="fields">
                <div class="four wide field">
                    <label style="color:white"><i class="user icon"></i>Nombre del docente:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre del docente" readonly>
                </div>

                <div class="four wide field">
                    <label style="color:white"><i class="user icon"></i>Apellidos del docente:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellidos del docente" readonly>
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="calendar icon"></i> Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNac" name="fechaNac" readonly>
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="map maker icon"></i> Lugar de Nacimiento:</label>
                    <textarea rows="2" id="lugarNac" name="lugarNac" placeholder="Lugar de nacimiento" readonly></textarea>
                </div>
                

                <div class="two wide field">
                    <label style="color:white"><i class="mars icon"></i> <i class="venus icon"></i> Sexo:</label>
                    <input type="radio" name="sexo" id="f" value="F"> F &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="sexo" id="m" value="M"> M<br>
                </div>

                <div class="four wide field">
                            
                    <label style="color:white"><i class="map marker  icon"></i> Dirección de residencia:</label>
                    <textarea rows="2" name="direccion" id="direccion" placeholder="Dirección de residencia" readonly></textarea>
                </div>
            </div>
        </div>

        <br>
        <div class="field">
            <div class="fields">
            
            <div class="two wide field">
                    <label style="color:white"><i class="chart bar icon"></i> Edad:</label>
                    <input type="text"  id="edad" name="edad" readonly>
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="phone icon"></i>Teléfono de residencia:</label>
                    <input type="text" id="telefonoRes" name="telefonoRes" placeholder="Teléfono de residencia" readonly>
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="phone icon"></i>Teléfono móvil:</label>
                    <input type="text" id="telefonoMovil" name="telefonoMovil" placeholder="Teléfono móvil" readonly>
                </div>

                <div class="five wide field">
                    <label style="color:white"><i class="envelope icon"></i> Correo Electrónico</label>
                    <input type="text" id="correo" name="correo" placeholder="Correo Electrónico" readonly>
                    <div class="ui red pointing label"  id="correoC"
                    style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                    Correo ya existe
                    </div>
                </div>

                <div class="four wide field">
                            
                    <label style="color:white"><i class="address card outline icon"></i> DUI:</label>
                    <input type="text" id="dui" name="dui" placeholder="N° DUI" readonly>
                    <div class="ui red pointing label"  id="duiC"
                     style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                     Dui ya existe
                     </div>
                </div>

                <div class="four wide field">
                    <label style="color:white"><i class="address card icon"></i>NIT:</label>
                    <input type="text" id="nit" name="nit" placeholder="NIT" readonly>
                    <div class="ui red pointing label"  id="nitC"
                    style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                    NIT ya existe
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="field">
            <div class="fields">
            <div class="four wide field">
                <label style="color:white"><i class="address card outline icon"></i>NIP:</label>
                <input type="text" id="nip" name="nip" placeholder="NIP" readonly>
            </div>
            <div class="four wide field">
                <label style="color:white"><i class="address card  icon"></i> AFP:</label>
                <input type="text" id="afp" name="afp" placeholder="AFP" readonly>
            </div>

            
            <div class="four wide field">
                <label style="color:white"><i class="address card icon"></i>Número de partida:</label>
                <input type="text" id="numeroPartida" name="numeroPartida" placeholder="Número de partida" readonly>
            </div>
            <div class="four wide field">
                <label style="color:white"><i class="address card outline icon"></i>Sub-Número:</label>
                <input type="text" id="subNumero" name="subNumero" placeholder="Sub-Número" readonly>
            </div>


            </div>
        </div>
        <br>
        <div class="field">
            <div class="fields">
                <div class="three wide field">
                    <label style="color:white"><i class="chart bar  icon"></i> Nivel académico:</label>
                    <select id="nivelAcademico" name="nivelAcademico" class="ui dropdown" readonly>
                            <option value="Superior">Superior</option>
                            <option value="Media">Media</option>
                            <option value="Básica">Básica</option>
                            <option value="Ninguna">Ninguna</option>
                    </select>  
                </div>

                <div class="four wide field">
                    <label style="color:white"><i class="chart bar  icon"></i> Nivel:</label>
                    <select id="nivel" name="nivel" class="ui dropdown" readonly>
                            <option value="1">1</option>
                            <option value="2">2</option>
                                        
                    </select>  
                </div>

                <div class="three wide field">
                    
                    <label style="color:white"><i class="address card icon"></i>Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" placeholder="Especialidad" readonly>
                </div>

                <div class="six wide field">
                    <label style="color:white"><i class="calendar icon"></i> Fecha de Ingreso a la institución:</label>
                    <input type="date" id="fechaIngre" name="fechaIngre" readonly>
                </div>
            </div>
        </div>
        <br>
        <div class="field">
            <div class="fields">
                <div class="ten wide field">
                            
                    <label style="color:white"><i class="heart icon"></i> Habilidades y destrezas:</label>
                    <textarea rows="3" name="habilidades" id="habilidades" placeholder="Habilidades y destrezas" readonly></textarea>
                </div>


                <div class="eight wide field">
                    <label style="color:white"><i class="dollar icon"></i> Tipo de pago:</label>
                    <select class="ui dropdown" id="tipoPago" name="tipoPago">
                        <option value="Por honorarios">Por honorarios</option>
                        <option value="Por seguro">Por seguro</option>
                    </select>
                </div>

                <div class="eight wide field">
                    <label style="color:white"><i class="dollar icon"></i> Sueldo:</label>
                    <input type="text" id="sueldo" name="sueldo" placeholder="Sueldo a pagar" readonly>                      
                </div>

                <div class="ten wide field" style="background-color:#F95757">
                            
                    <label style="color:white"><i class="close icon"></i>Motivo de baja:</label>
                    <textarea rows="3" name="razonBaja" id="razonBaja"readonly></textarea>
                    
                </div>
            </div>
        </div>
    </form>
    </div>
    <hr>
    <div class="actions">
    <button class="ui yellow deny button"> Cancelar</button>
   
    </div>
</div>



<script src="./res/tablas/tablaMaestrosBajas.js"></script>


<script>
    $(document).ready(function(){
        $('#dui').mask("99999999-9");
    $('#telefonoRes').mask("9999-9999");
    $('#telefonoMovil').mask("9999-9999");
    $('#nit').mask("9999-999999-999-9");
        $("#sueldo").mask("###0.00", {reverse: true});
    });


var detalles=(ele)=>{
$("#txtNombre").text($(ele).attr("nombreTxt"));
$("#txtFecha").text($(ele).attr("txtFecha"));
$("#idMaestro").val($(ele).attr("id"));
$("#nombre").val($(ele).attr("nombre"));
$("#apellido").val($(ele).attr("apellido"));
$("#lugarNac").val($(ele).attr("lugarNacimiento"));
$("#fechaNac").val($(ele).attr("fechaNacimiento"));


if($(ele).attr("sexo") == "M"){
$("#m").prop('checked', true);
$("#f").prop('checked', false);
}
if($(ele).attr("sexo") == "F"){
    $("#f").prop('checked', true);
    $("#m").prop('checked', false);
}

$("#direccion").val($(ele).attr("direccion"));
$("#edad").val($(ele).attr("edad"));
$("#telefonoRes").val($(ele).attr("telResidencia"));
$("#telefonoMovil").val($(ele).attr("telMovil"));
$("#correo").val($(ele).attr("correo"));
$("#dui").val($(ele).attr("dui"));
$("#nit").val($(ele).attr("nit"));
$("#nip").val($(ele).attr("nip"));
$("#afp").val($(ele).attr("afp"));
$("#numeroPartida").val($(ele).attr("numeroPartida"));
$("#subNumero").val($(ele).attr("subnumero"));
$("#especialidad").val($(ele).attr("especialidad"));
$('#nivelAcademico').dropdown('set selected', $(ele).attr("nivelAcademico"));
$('#nivel').dropdown('set selected', $(ele).attr("nivel"));
$("#fechaIngre").val($(ele).attr("fechaIngreso"));
$("#habilidades").val($(ele).attr("habilidades"));
$("#sueldo").val($(ele).attr("sueldo"));
$('#tipoPago').dropdown('set selected', $(ele).attr("tipoPago"));
$('#razonBaja').val($(ele).attr("razonBaja"));
$('#modalDetalles').modal('setting', 'closable', false).modal('show');

}

var eliminar=(ele)=>{
$("#nameBaja").text($(ele).attr("nombreTxt"));
$("#idBaja").val($(ele).attr("id"));
$("#nombreBaja").val($(ele).attr("nombre"));
$("#apellidoBaja").val($(ele).attr("apellido"));


$('#modalBaja').modal('setting', 'closable', false).modal('show');
}


$("#bajar").click(function(){
    alertify.confirm("¿Desea elimar al docente?",
            function(){
                

                const form = $('#frmBaja');

                const datosFormulario = new FormData(form[0]);


                $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=SolicitudController&2=bajaMaestro',
                data: datosFormulario,
                success: function(r) {
                    if(r == 11) {
                        $('#dtMaestros').DataTable().ajax.reload();
                        $('#modalBaja').modal('hide');
                        $.amaran({

                    'theme'     :'awesome error',
                    'content'   :{
                    title:'Listo!',
                    message:'Eliminado con éxito!',
                    info:'Cambios guardados',
                    icon:'check icon'
                    },
                    'cssanimationOut'   :random(salidas),
                            'position'  : random(positions) ,
                            'inEffect'  : random(inEffects)
                    });
                    }
                }
            });

            },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
});

$("#save").click(function(){
    alertify.confirm("¿Desea guardar los datos del docente?",
            function(){
                

                const form = $('#frmMaestro');

                const datosFormulario = new FormData(form[0]);


                $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=SolicitudController&2=editarDatosMaestros',
                data: datosFormulario,
                success: function(r) {
                    if(r == 1) {
                        $('#dtMaestros').DataTable().ajax.reload();
                        $('#modalDetalles').modal('hide');
                        $.amaran({

                    'theme'     :'awesome ok',
                    'content'   :{
                    title:'Listo!',
                    message:'Datos modificados con éxito!',
                    info:'Cambios guardados',
                    icon:'check icon'
                    },
                    'cssanimationOut'   :random(salidas),
                            'position'  : random(positions) ,
                            'inEffect'  : random(inEffects)
                    });
                    }
                }
            });

            },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
});



$("#cancelar").click(function(){

    $('#modalDetalles').modal('hide');
    swal.fire({
  title: 'Desea cerrar la ventana?',
  text: "Cualquier dato no guardado se perderá!",
  imageUrl: "./res/img/warning.gif",
        imageWidth: 200,
        imageHeight: 175,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,
  showCancelButton: true,
  confirmButtonText: 'Si, salir!',
  cancelButtonText: 'No, no cerrar!',
  reverseButtons: true,
  confirmButtonColor: '#D01919',
  cancelButtonColor: '#00903C',
  background: '#fafafa',
  
}).then((result) => {
  if (result.value) {
    $('#modalDetalles').modal('hide');
  } else if (
    /* Read more about handling dismissals below */
    result.dismiss === Swal.DismissReason.cancel
  ) {
    $('#modalDetalles').modal('setting', 'closable', false).modal('show');
  }
});

});
</script>