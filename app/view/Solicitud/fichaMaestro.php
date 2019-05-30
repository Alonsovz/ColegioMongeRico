<br><br><div id="app">
        <div class="ui grid">
        <div class="row">
                <div class="titulo">
                <i class="user icon"></i><i class="file icon"></i>
                    Información personal del docente <font color="#210B61" size="20px">.</font>
                </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                <button class="ui right floated blue labeled icon button" id="btnGuardarTodo">
                    <i class="save icon"></i>
                    Guardar todo
                </button>
            </div>
        </div>

        <div class="row title-bar">
            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>
        </div>
        </div>

<div class="content" style="text-align:center; border: 1px solid black;border-radius:3%;">
<form class="ui form" style="font-size:23px;  margin-left:20px;margin-right:20px;" id="frmMaestro" method="POST" method="POST" enctype="multipart/form-data">
            <h2 style="color:#04B486;"><i class="user circle icon"></i> Datos Personales</h2>
            <hr><br>

            <div class="field">
                        <div class="fields">
                            <div class="five wide field" style="font-size:16px;">
                                <label><i class="user icon"></i>Nombre completo del docente:</label>
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre completo del docente">
                            </div>

                            <div class="three wide field" style="font-size:16px;">
                                <label><i class="calendar icon"></i> Fecha de Nacimiento:</label>
                                <input type="date" id="fechaNac" name="fechaNac">
                            </div>

                            <div class="five wide field" style="font-size:16px;">
                                <label><i class="map maker icon"></i> Lugar de Nacimiento:</label>
                                <textarea rows="2" id="lugarNac" name="lugarNac" placeholder="Lugar de nacimiento"></textarea>
                            </div>

                            <div class="one wide field" style="font-size:16px;">
                                <label><i class="chart bar icon"></i> Edad:</label>
                                <input type="text"  id="edad" name="edad" readonly>
                            </div>

                            <div class="two wide field" style="font-size:16px;">
                                <label><i class="mars icon"></i> <i class="venus icon"></i> Sexo:</label>
                                <input type="radio" name="sexo" value="F"> F &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sexo" value="M"> M<br>
                            </div>
                    </div>
                    </div>


           <div class="ui divider"></div><br>

            <div class="field">
                        <div class="fields">
                        <div class="five wide field" style="font-size:16px;">
                            
                            <label><i class="map marker  icon"></i> Dirección de residencia:</label>
                            <textarea rows="2" name="direccion" id="direccion" placeholder="Dirección de residencia"></textarea>
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                            <label><i class="phone icon"></i>Teléfono de residencia:</label>
                                <input type="text" id="telefonoRes" name="telefonoRes" placeholder="Teléfono de residencia">
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                            <label><i class="phone icon"></i>Teléfono móvil:</label>
                                <input type="text" id="telefonoMovil" name="telefonoMovil" placeholder="Teléfono móvil">
                        </div>

                        <div class="five wide field" style="font-size:16px;">
                            <label><i class="envelope icon"></i> Correo Electrónico</label>
                                <input type="text" id="correo" name="correo" placeholder="Correo Electrónico">
                        </div>

                        </div>
            </div>

            
           <div class="ui divider"></div><br>

            <div class="field">
                        <div class="fields">
                        <div class="four wide field" style="font-size:16px;">
                            
                            <label><i class="address card outline icon"></i> DUI:</label>
                            <input type="text" id="dui" name="dui" placeholder="N° DUI">
                        </div>

                        <div class="four wide field" style="font-size:16px;">
                            <label><i class="address card icon"></i>NIT:</label>
                                <input type="text" id="nit" name="nit" placeholder="NIT">
                        </div>

                        <div class="four wide field" style="font-size:16px;">
                            <label><i class="address card outline icon"></i>NIP:</label>
                                <input type="text" id="nip" name="nip" placeholder="NIP">
                        </div>

                        <div class="four wide field" style="font-size:16px;">
                            <label><i class="address card  icon"></i> AFP:</label>
                                <input type="text" id="afp" name="afp" placeholder="AFP">
                        </div>

                        </div>
            </div>

            <div class="ui divider"></div><br>

            <div class="field">
                        <div class="fields">
                        <div class="three field" style="font-size:16px;">
                                <label><i class="male icon"></i> ¿Pertenece al sector público?</label>
                                <input type="radio" name="sectorPublico"  value="si"> Si &nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="radio" name="sectorPublico"  value="no"> No 
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                            <label><i class="address card icon"></i>Número de partida:</label>
                                <input type="text" id="numeroPartida" name="numeroPartida" placeholder="Número de partida" disabled>
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                            <label><i class="address card outline icon"></i>Sub-Número:</label>
                                <input type="text" id="subNumero" name="subNumero" placeholder="Sub-Número" disabled>
                        </div>

                        <div class="three wide field" style="font-size:16px;">
                            <label><i class="chart bar  icon"></i> Nivel académico:</label>
                                        <select id="nivelAcademico" name="nivelAcademico" class="ui dropdown">
                                                <option value="Superior">Superior</option>
                                                <option value="Media">Media</option>
                                                <option value="Básica">Básica</option>
                                                <option value="Ninguna">Ninguna</option>
                                            </select>  
                        </div>

                        <div class="four wide field" style="font-size:16px;">
                            <label><i class="chart bar  icon"></i> Nivel:</label>
                                        <select id="nivel" name="nivel" class="ui dropdown">
                                                <option value="Superior">Superior</option>
                                                <option value="Media">Media</option>
                                                <option value="Básica">Básica</option>
                                                <option value="Ninguna">Ninguna</option>
                                            </select>  
                        </div>

                        </div>
            </div>

            <div class="ui divider"></div><br>

            <div class="field">
                        <div class="fields">
                        <div class="six wide field" style="font-size:16px;">
                        <label><i class="address card icon"></i>Títulos obtenidos</label>
                        <span style="float:right;">
                           <a @click="agregarDetalle" class="ui teal circular icon button"><i class="plus icon"></i> Agregar</a>
                        </span>        <br><br><br>
                <form action="" class="ui form" id="frmTitulos" >
                        <table class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                                <thead>
                                    <tr>
                                        <th style="background-color: #217CD1; color:white;"><i class="folder icon"></i>Título</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="trash icon"></i>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(maestro, index) in maestros">
                                    <td>  
                                    <input class="requerido" v-model="maestro.titulos" name="titulos" id="titulos" type="text"
                                     placeholder="Títulos obtenidos">
                                    </td>
                                    <td>
                                    <center>
                    </form>
                              <a  @click="eliminarDetalle(index)" class="ui negative mini circular icon button"><i
                                  class="times icon"></i></a>
                                  </center>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    
                        </div>
                        <div class="three wide field" style="font-size:16px;">
                        <br><br><br>
                        <label><i class="address card icon"></i>Especialidad</label>
                        <input type="text" name="especialidad" id="especialidad" placeholder="Especialidad">
                        </div>

                        <div class="seven wide field" style="font-size:16px;">
                        <label><i class="street view icon"></i>Capacitaciones</label>
                        <span style="float:right;">
                           <a @click="agregarDetalleCapa" class="ui teal circular icon button"><i class="plus icon"></i> Agregar</a>
                        </span>        <br><br><br>
                <form action="" class="ui form" id="frmCapacitaciones" >
                        <table class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                                <thead>
                                    <tr>
                                        <th style="background-color: #217CD1; color:white;"><i class="folder icon"></i>Capacitaciones</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="trash icon"></i>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(capacitacion, index) in capacitaciones">
                                    <td>  
                                    <input class="requerido" v-model="capacitacion.nombre" name="nombre" id="nombre" type="text"
                                     placeholder="Capacitación">
                                    </td>
                                    <td>
                                    <center>
                    </form>
                              <a  @click="eliminarDetalleCapa(index)" class="ui negative mini circular icon button"><i
                                  class="times icon"></i></a>
                                  </center>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    
                        </div>

                       


                        </div>
            </div>

            <div class="ui divider"></div><br>

            <div class="field">
                        <div class="fields">

                        <div class="sixteen wide field" style="font-size:16px;">
                        <label><i class="street view icon"></i>Experiencia Laboral</label>
                        <span style="float:right;">
                           <a @click="agregarDetalleIns" class="ui teal circular icon button"><i class="plus icon"></i> Agregar</a>
                        </span>        <br><br><br>
                <form action="" class="ui form" id="frmExperiencia" >
                        <table class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                                <thead>
                                    <tr>
                                        <th style="background-color: #217CD1; color:white;"><i class="building icon"></i>Institución</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="user icon"></i>Cargo</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="chart bar icon"></i>Grado</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="book icon"></i>Asignaturas</th>
                                        <th style="background-color: #217CD1; color:white;width:5%;"><i class="calendar icon"></i>Desde</th>
                                        <th style="background-color: #217CD1; color:white;width:5%;"><i class="calendar icon"></i>Hasta</th>
                                        <th style="background-color: #217CD1; color:white;"><i class="trash icon"></i>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="(institucion, index) in instituciones">
                                    <td>  
                                    <textarea class="requerido" rows="2" v-model="institucion.nombre" name="nombre" id="nombre"
                                     placeholder="Nombre de la institución"></textarea>
                                    </td>
                                    <td>  
                                    <select v-model="institucion.cargo" name="cargo" id="cargo">
                                        <option value="Director">Director</option>
                                        <option value="Docente">Docente</option>
                                    </select>
                                    </td>
                                    <td>  
                                    <select v-model="institucion.grado" name="grado" id="grado">
                                    <option value="10">PreKinder</option>
                                    <option value="11">Kinder</option>
                                    <option value="12">Preparatoria</option>
                                    <option value="1">1er Grado</option>
                                    <option value="2">2do Grado</option>
                                    <option value="3">3er Grado</option>
                                    <option value="4">4to Grado</option>
                                    <option value="5">5to Grado</option>
                                    <option value="6">6to Grado</option>
                                    <option value="7">7mo Grado</option>
                                    <option value="8">8vo Grado</option>
                                    <option value="9">9no Grado</option>
                                    <option value="13">Bachillerato</option>
                                    </select>
                                    </td>
                                    <td>  
                                    <textarea class="requerido" rows="2" v-model="institucion.asignaturas" name="asignaturas"
                                     id="asignaturas" placeholder="Asginaturas impartidas"></textarea>
                                    </td>
                                    <td>  
                                    <input class="requerido" v-model="institucion.desde" name="desde" id="desde" type="date">
                                    </td>
                                    <td>  
                                    <input class="requerido" v-model="institucion.hasta" name="hasta" id="hasta" type="date">
                                    </td>
                                    <td>
                                    <center>
                    </form>
                              <a  @click="eliminarDetalleIns(index)" class="ui negative mini circular icon button"><i
                                  class="times icon"></i></a>
                                  </center>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                    
                        </div>
                        
                        
                         </div>
            </div>

            
            <div class="ui divider"></div><br>

            <div class="field">
                        <div class="fields">
                        <div class="six wide field" style="font-size:16px;">
                                <label><i class="calendar icon"></i> Fecha de Ingreso a la institución:</label>
                                <input type="date" id="fechaIngre" name="fechaIngre">
                            </div>

                        <div class="ten wide field" style="font-size:16px;">
                            
                            <label><i class="heart icon"></i> Habilidades y destrezas:</label>
                            <textarea rows="3" name="habilidades" id="habilidades" placeholder="Habilidades y destrezas"></textarea>
                        </div>
                         </div>
            </div>
</form>
</div>
</div>
<script>
    $(document).ready(function(){
    $('#dui').mask("99999999-9");
    $('#telefonoRes').mask("9999-9999");
    $('#telefonoMovil').mask("9999-9999");
    $('#nit').mask("9999-999999-999-9");
}); 
var app = new Vue({
        el: "#app",
        data: {
          
            maestros: [{
                titulos: '',
               
            }],

            capacitaciones: [{
                nombre: '',
               
            }],
            instituciones: [{
                nombre: '',
                cargo: 'Director',
                grado: '10',
                asignaturas: '',
                desde: '',
                hasta: '',
               
            }],
        },
        methods: {
            eliminarDetalle(index) {
                this.maestros.splice(index, 1);
            },
            agregarDetalle() {
                this.maestros.push({
                    titulos: '',
            
                });
            
            },
            eliminarDetalleIns(index) {
                this.instituciones.splice(index, 1);
            },
            agregarDetalleIns() {
                this.instituciones.push({
                    nombre: '',
                cargo: 'Director',
                grado: '10',
                asignaturas: '',
                desde: '',
                hasta: '',
            
                });
            
            },
            eliminarDetalleCapa(index) {
                this.capacitaciones.splice(index, 1);
            },
            agregarDetalleCapa() {
                this.capacitaciones.push({
                    nombre: '',
            
                });
            
            },
            guardarTitulos() {

                if (this.maestros.length) {

                    $('#frmTitulos').addClass('loading');
                    $.ajax({
                        type: 'POST',
                        data: {
                            lista: JSON.stringify(this.maestros)
                        },
                        url: '?1=SolicitudController&2=guardarTitulos',
                        success: function (r) {
                            $('#frmTitulos').removeClass('loading');
                            if (r == 1) {
                                
                                        app.maestros = [{
                                            titulos: '',
                                        }];

                                       
                                            
                            }
                            
                        }
                    });
                }

                },
                guardarCapacitaciones() {

            if (this.capacitaciones.length) {

                $('#frmTitulos').addClass('loading');
                $.ajax({
                    type: 'POST',
                    data: {
                        listaCapa: JSON.stringify(this.capacitaciones)
                    },
                    url: '?1=SolicitudController&2=guardarCapacitaciones',
                    success: function (r) {
                        $('#frmCapacitaciones').removeClass('loading');
                        if (r == 1) {
                            
                                    app.capacitaciones = [{
                                        nombre: '',
                                    }];

                                
                                        
                        }
                        
                    }
                });
            }

            },
            guardarExperiencia() {

                if (this.instituciones.length) {

                    $('#frmTitulos').addClass('loading');
                    $.ajax({
                        type: 'POST',
                        data: {
                            listaExp: JSON.stringify(this.instituciones)
                        },
                        url: '?1=SolicitudController&2=guardarExperiencia',
                        success: function (r) {
                            $('#frmExperiencia').removeClass('loading');
                            if (r == 1) {
                                
                                        app.instituciones = [{
                                            nombre: '',
                                            cargo: 'Director',
                                            grado: '10',
                                            asignaturas: '',
                                            desde: '',
                                            hasta: '',
                                        }];

                                    
                                            
                            }
                            
                        }
                    });
                }

}


        }
    });


$("input[name=sectorPublico]").click(function(){
    var sector = $(this).val();

    if(sector == "si"){
        $("#numeroPartida").prop("disabled",false);
        $("#subNumero").prop("disabled",false);
    }
    if(sector == "no"){
        $("#numeroPartida").prop("disabled",true);
        $("#subNumero").prop("disabled",true);
        $("#numeroPartida").val('');
        $("#subNumero").val('');
    }
});


function Edad(FechaNacimiento) {

var fechaNace = new Date(FechaNacimiento);
var fechaActual = new Date()

var mes = fechaActual.getMonth();
var dia = fechaActual.getDate();
var año = fechaActual.getFullYear();

fechaActual.setDate(dia);
fechaActual.setMonth(mes);
fechaActual.setFullYear(año);

edad = Math.floor(((fechaActual - fechaNace) / (1000 * 60 * 60 * 24) / 365));

return edad;
}


function resultado(){
    var fecha = document.getElementById('fechaNac').value;

var edad = Edad(fecha);
$("#edad").val(edad);

}

$('#fechaNac').change(function(){
    var fecha =  document.getElementById('fechaNac').value;

Edad(fecha);
resultado();
});

$("#btnGuardarTodo").click(function(){
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
                url: '?1=SolicitudController&2=guardarSolicitudMaestro',
                data: datosFormulario,
                success: function(r) {
                    if(r == 1) {
                       
                        swal({
                            title: 'Registrado',
                            text: 'Datos guardados con éxito',
                            type: 'success',
                            showConfirmButton: true,

                        }).then((result) => {
                            
                               location.href = '?1=SolicitudController&2=fichaMaestro';
                        }); 
                        app.guardarTitulos();
                        app.guardarCapacitaciones();
                        app.guardarExperiencia();
                    } 
                }
                });
            },
            function(){
                //$("#modalCalendar").modal('toggle');
                alertify.error('Cancelado');
                
            }); 
});



</script>