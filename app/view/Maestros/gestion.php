
<div id="app">
        <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <i class="users icon"></i>
                        Datos de Maestros/as <font color="#210B61" size="20px">.</font>
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
                        
                            <th style="background-color: #08088A; color:white;">N°</th>
                            <th style="background-color: #08088A; color:white;">Nombre</th>
                          
                            <th style="background-color: #08088A; color:white;">Teléfono</th>
                            <th style="background-color: #08088A; color:white;">Email</th>
                            <th style="background-color: #08088A; color:white;">Tipo Pago</th>
                            <th style="background-color: #08088A; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
</div>


<div id="modalDetalles" class="ui fullscreen  basic modal" style="top: -5%;">
    <div class="header" style="color:aqua;">
    <i class="user icon"></i> <i class="edit icon"></i> Datos del maestro: <a id="txtNombre" style="color:yellow;"></a>
    </div>
    <hr>
    <div class="scrolling content" style="color:white; text-align:center;">
    <form class=" ui form" style="color:white; text-align:center;" id="frmMaestro"  method="POST" enctype="multipart/form-data">
    <input type="hidden" id="idMaestro" name="idMaestro">
        <div class="field">
            <div class="fields">
                <div class="four wide field">
                    <label style="color:white"><i class="user icon"></i>Nombre del docente:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Nombre del docente">
                </div>

                <div class="four wide field">
                    <label style="color:white"><i class="user icon"></i>Apellidos del docente:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Apellidos del docente">
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="calendar icon"></i> Fecha de Nacimiento:</label>
                    <input type="date" id="fechaNac" name="fechaNac">
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="map maker icon"></i> Lugar de Nacimiento:</label>
                    <textarea rows="2" id="lugarNac" name="lugarNac" placeholder="Lugar de nacimiento"></textarea>
                </div>
                

                <div class="two wide field">
                    <label style="color:white"><i class="mars icon"></i> <i class="venus icon"></i> Sexo:</label>
                    <input type="radio" name="sexo" id="f" value="F"> F &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="sexo" id="m" value="M"> M<br>
                </div>

                <div class="four wide field">
                            
                    <label style="color:white"><i class="map marker  icon"></i> Dirección de residencia:</label>
                    <textarea rows="2" name="direccion" id="direccion" placeholder="Dirección de residencia"></textarea>
                </div>
            </div>
        </div>

        <br>
        <div class="field">
            <div class="fields">
            
            <div class="two wide field">
                    <label style="color:white"><i class="chart bar icon"></i> Edad:</label>
                    <input type="text"  id="edad" name="edad">
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="phone icon"></i>Teléfono de residencia:</label>
                    <input type="text" id="telefonoRes" name="telefonoRes" placeholder="Teléfono de residencia">
                </div>

                <div class="three wide field">
                    <label style="color:white"><i class="phone icon"></i>Teléfono móvil:</label>
                    <input type="text" id="telefonoMovil" name="telefonoMovil" placeholder="Teléfono móvil">
                </div>

                <div class="five wide field">
                    <label style="color:white"><i class="envelope icon"></i> Correo Electrónico</label>
                    <input type="text" id="correo" name="correo" placeholder="Correo Electrónico">
                    <div class="ui red pointing label"  id="correoC"
                    style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                    Correo ya existe
                    </div>
                </div>

                <div class="four wide field">
                            
                    <label style="color:white"><i class="address card outline icon"></i> DUI:</label>
                    <input type="text" id="dui" name="dui" placeholder="N° DUI">
                    <div class="ui red pointing label"  id="duiC"
                     style="display: none; margin: 0; text-align:center; width:100%; font-size: 12px;">
                     Dui ya existe
                     </div>
                </div>

                <div class="four wide field">
                    <label style="color:white"><i class="address card icon"></i>NIT:</label>
                    <input type="text" id="nit" name="nit" placeholder="NIT">
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
                <input type="text" id="nip" name="nip" placeholder="NIP">
            </div>
            <div class="four wide field">
                <label style="color:white"><i class="address card  icon"></i> AFP:</label>
                <input type="text" id="afp" name="afp" placeholder="AFP">
            </div>

            
            <div class="four wide field">
                <label style="color:white"><i class="address card icon"></i>Número de partida:</label>
                <input type="text" id="numeroPartida" name="numeroPartida" placeholder="Número de partida">
            </div>
            <div class="four wide field">
                <label style="color:white"><i class="address card outline icon"></i>Sub-Número:</label>
                <input type="text" id="subNumero" name="subNumero" placeholder="Sub-Número">
            </div>


            </div>
        </div>
        <br>
        <div class="field">
            <div class="fields">
                <div class="three wide field">
                    <label style="color:white"><i class="chart bar  icon"></i> Nivel académico:</label>
                    <select id="nivelAcademico" name="nivelAcademico" class="ui dropdown">
                            <option value="Superior">Superior</option>
                            <option value="Media">Media</option>
                            <option value="Básica">Básica</option>
                            <option value="Ninguna">Ninguna</option>
                    </select>  
                </div>

                <div class="four wide field">
                    <label style="color:white"><i class="chart bar  icon"></i> Nivel:</label>
                    <select id="nivel" name="nivel" class="ui dropdown">
                            <option value="1">1</option>
                            <option value="2">2</option>
                                        
                    </select>  
                </div>

                <div class="three wide field">
                    
                    <label style="color:white"><i class="address card icon"></i>Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" placeholder="Especialidad">
                </div>

                <div class="six wide field">
                    <label style="color:white"><i class="calendar icon"></i> Fecha de Ingreso a la institución:</label>
                    <input type="date" id="fechaIngre" name="fechaIngre">
                </div>
            </div>
        </div>
        <br>
        <div class="field">
            <div class="fields">
                <div class="ten wide field">
                            
                    <label style="color:white"><i class="heart icon"></i> Habilidades y destrezas:</label>
                    <textarea rows="3" name="habilidades" id="habilidades" placeholder="Habilidades y destrezas"></textarea>
                </div>


                <div class="eight wide field">
                    <label style="color:white"><i class="dollar icon"></i> Tipo de pago:</label>
                    <select class="ui dropdown" id="tipoPago" name="tipoPago" >
                        <option value="Por honorarios">Por honorarios</option>
                        <option value="Por seguro">Por seguro</option>
                    </select>
                </div>

                <div class="eight wide field">
                    <label style="color:white"><i class="dollar icon"></i> Sueldo:</label>
                    <input type="text" id="sueldo" name="sueldo" placeholder="Sueldo a pagar">                      
                </div>
            </div>
        </div>
    </form>
    </div>
    <hr>
    <div class="actions">
    <button class="ui yellow  button" id="cancelar"> Cancelar</button>
    <button class="ui teal button" id="save"> Guardar</button>
    </div>
</div>


<div class="ui tiny modal" id="modalBaja">
    <div class="header" style="color:aqua;background-color:black;">
    Dar de baja al docente : <a id="nameBaja" style="color:yellow;"></a>
    </div>
    <div class="content"  style="background-color:#C9C8C8;">
    <form class="ui form">
        <input type="hidden" id="idBaja" name="idBaja">
        <label><i class="lock icon"></i>Motivo de baja del docente:</label>
        <textarea rows="2" name="baja" id="baja" placeholder="Motivo de baja"></textarea>
    </form>
    </div>
    <div class="actions">
        <button class="ui black deny button" >Cancelar</button>
        <button class="ui blue button" id="bajar">Confirmar</button>
    </div>
</div>
<script src="./res/tablas/tablaMaestros.js"></script>


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

$('#modalDetalles').modal('setting', 'closable', false).modal('show');

}

var eliminar=(ele)=>{
$("#nameBaja").text($(ele).attr("nombreTxt"));
$("#idBaja").val($(ele).attr("id"));
$('#modalBaja').modal('setting', 'closable', false).modal('show');
}
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