
<div id="app" style="display:none;">
        <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <i class="users icon"></i>
                        Planilla de Pagos <a id="rango" style="color:#060DA1"></a><font color="#210B61" size="20px">.</font>
                        
                        <button style="
                    -webkit-box-shadow: 5px 13px 5px -6px rgba(133,131,133,1);
-moz-box-shadow: 5px 13px 5px -6px rgba(133,131,133,1);
box-shadow: 5px 13px 5px -6px rgba(133,131,133,1);" class="ui right floated blue labeled icon button" 
                    id="btnAct">
                        <i class="sync icon"></i>
                        Nuevo período
                    </button>   
                    </div>
                    
            </div>
       
               
           
        </div>
        

<div class="row title-bar">
            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>
        </div>
        <div class="row"  style="background-color:#D8D8D8;
                -webkit-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                -moz-box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);
                box-shadow: 10px 10px 5px 0px rgba(133,131,133,1);">
            <div class="sixteen wide column" style="margin-left:30px;margin-right:30px;">
            <table id="dtMaestros" class="ui selectable very compact celled table" style="width:100%; margin:auto;font-size:12px;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #E6C404; color:white;text-align: center;">N°</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Nombre</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Tipo de pago</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Sueldo</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">$ Devengado</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Vacación</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Aguinaldo</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">AFP Vejez</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">AFP Comisión</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">ISSS</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Renta</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Otros</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">T. Desc</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">$ Pagar</th>
                            <th style="background-color: #08088A; color:white;text-align: center;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody style=" text-align: center;">
                    </tbody>
               
                </table>
                <br>
                <hr>
                <br>
                <button class="ui purple button" id="actualizar">Actualizar</button>
                <br>
                <br>
               <table style="width:100%;">
                   <tr>
                    <th style="width:40%;text-align:left;color:#028302; font-size:20px;
                    font-weight:bold;">Totales de planilla</th>
                    <th style="width:20%;text-align:left;font-weight:bold;font-size:17px;color:#AF4204">Total retenciones =  <a id="reten" style="color:black"></a></th>

                    <th style="width:20%;text-align:right;font-weight:bold;font-size:17px;color:#7F32F5">Total de pagos =  <a id="tp" style="color:black"></a></th>
                    
                    <th style="width:20%;text-align:right;font-weight:bold;font-size:17px;color:#044AD8;">Gran total =  <a id="gr" style="color:black"> </th>

                    </tr>
                </table>
                <hr>
                <br>
            <table style="width:100%;">
            <tr>
            <th  style="background-color: #08088A; color:white;">Sueldos</th>
            <th  style="background-color: #08088A; color:white;">Retenciones</th>
            <th  style="background-color: #08088A; color:white;">Otros</th>
            </tr>
            <tr>
                <th>
                    <table class = "ui selectable very compact celled table" style="width:100%;">
                        <tr>
                            <th style="background-color: black; color:white;">Sueldos mensuales</th>
                            <th style="background-color: black; color:white;"> Sueldos devengados</th>
                        </tr>
                        <tr>
                            <td style=" text-align: center;">$ <a id="sueldosMen" style="color:black"></a></td>
                            <td style=" text-align: center;">$ <a id="sueldoDev" style="color:black"></a></td>
                        </tr>
                    </table>
                </th>

                <th>
                    <table class = "ui selectable very compact celled table" >
                        <tr>
                            <th style="background-color: #B48F05; color:white;">AFP IMV</th>
                            <th style="background-color: #B48F05; color:white;">AFP Comisión</th>
                            <th style="background-color: #B48F05; color:white;">ISSS</th>
                            <th style="background-color: #B48F05; color:white;">ISR</th>
                            <th style="background-color: #B48F05; color:white;">Otras Retenciones</th>
                            
                        </tr>
                        <tr>
                            <td style=" text-align: center;">$ <a id="afpImv" style="color:black"></a></td>
                            <td style=" text-align: center;">$ <a id="afpCo" style="color:black"></a></td>
                            <td style=" text-align: center;">$ <a id="isssE" style="color:black"></a></td>
                            <td style=" text-align: center;">$ <a id="isr" style="color:black"></a></td>
                            <td style=" text-align: center;">$ <a id="otroR" style="color:black"></a></td>
                        
                        </tr>
                    </table>
                
                </th>

                <th>

                        <table class = "ui selectable very compact celled table" style="">
                            <tr>
                                <th style="background-color: #0C6903; color:white;">Vacación</th>
                                <th style="background-color: #0C6903; color:white;">Aguinaldo</th>
                            </tr>
                            <tr>
                                <td style=" text-align: center;">$ <a id="vac" style="color:black"></a></td>
                                <td style=" text-align: center;">$ <a id="agui" style="color:black"></a></td>
                            </tr>
                        </table>

                </th>

            </tr>
            </table><br><br>

              

            </div>
        </div>
</div>
<div class="ui modal" id="modalPlanilla" >
    <div class="header" style="background-color: #0BAA67; color:white;">
    Planilla de : <a id="nombre" style="color:yellow;"></a> .<br>
    Tipo de pago: <a id="pago" style="color:yellow;"></a> .
    </div>
    <div class="content" style="background-color:#D4D6D6">
    <form class="ui form" id="frmPlanilla" method="POST" enctype="multipart/form-data">
    <input type="hidden" id="idMaestro" name="idMaestro">
    <input type="hidden" id="idPlanilla" name="idPlanilla">
    <input type="hidden" id="tipo" name="tipo">
        <div class="field">
            <div class="fields">
            <div class="six wide field">
                    <label><i class="calendar icon"></i>Días trabajados</label>
                    <input type="text" id="dias" placeholder="Dias trabajados"  name="dias">
                </div>
                <div class="six wide field">
                    <label><i class="user icon"></i><i class="dollar icon"></i>Sueldo Mensual</label>
                    <input type="text" id="sueldo" readonly >
                </div>
                
                <div class="six wide field">
                    <label><i class="ship icon"></i><i class="dollar icon"></i>Vacación</label>
                    <input type="text" id="vacacion" placeholder="vacacion"  name="vacacion">
                </div>

                

                <div class="six wide field">
                        <label><i class="gift icon"></i><i class="dollar icon"></i>Aguinaldo</label>
                        <input type="text" id="aguinaldo" placeholder="Aguinaldo"  name="aguinaldo">
                </div>

                <div class="six wide field">
                        <label><i class="question mark icon"></i><i class="dollar icon"></i>Otros descuentos</label>
                        <input type="text" id="otros" placeholder="Otros descuentos"  name="otros">
                </div>


                </div>
                </div>
                <br>
                <hr>
               
                <br>
                <div class="field">
            <div class="fields">
            <div class="six wide field">
                        <label><br></label>
                       <center> <a id="totalizar" class="ui orange button" style="">Totalizar</a> </center>
                </div>
                <div class="six wide field" id="s1">
                    <label><i class="address card icon"></i><i class="dollar icon"></i>AFP Vejez</label>
                    <input type="text" id="afpVejez" placeholder="AFP Vejez"  name="afpVejez">
                </div>
                <div class="six wide field" id="s2">
                    <label><i class="address card icon"></i><i class="dollar icon"></i>AFP Comisión</label>
                    <input type="text" id="afpComision" placeholder="AFP Comisión"  name="afpComision">
                </div>
                <div class="six wide field" id="s3">
                    <label><i class="address card icon"></i><i class="dollar icon" ></i>ISSS</label>
                    <input type="text" id="isss" placeholder="ISSS"  name="isss">
                </div>
               
             
                <div class="six wide field" id="ho">
                    <label><i class="address card icon"></i><i class="dollar icon" ></i>ISR</label>
                    <input type="text" id="renta" placeholder="Renta"  name="renta">
                
                </div>
                </div>
                </div>
        <div class="field">
            <div class="fields">
            
                <div class="six wide field">
                    <label><i class="money icon"></i><i class="dollar icon"></i>Sueldo Devengado</label>
                    <input type="text" id="sueldoDevengado" placeholder="Sueldo Devengado" readonly  name="sueldoDevengado">
                </div>
                <div class="six wide field">
                        <label><i class="money bill icon"></i><i class="dollar icon"></i>Total de Descuentos</label>
                        <input type="text" id="descuentos" placeholder="Total de descuentos" readonly  name="descuentos">
                </div>
                <div class="six wide field">
                        <label><i class="money bill icon"></i><i class="dollar icon"></i>Total a pagar</label>
                        <input type="text" id="totalPago" placeholder="Total a pagar" readonly  name="totalPago">
                </div>
            </div>
        </div>
    </form>
    </div>
    <div class="actions">
    <button class="ui red deny button" id="reset">Cancelar</button>
    <button class="ui blue  button" id="guardar">Guardar</button>
    </div>
</div>

<div class="ui tiny basic modal" id="planillafiltro">
    <div class="header" style="color:#85F8F4;">
    <i class="calendar icon"></i> <i class="filter icon"></i> Mes y año a seleccionar
    </div>
    <div class="content" >
    <form class="ui form">
    <div class="field">
        <div class="fields">
                    <div class="eight wide field">

                        <label style="color:#fafafa;"><i class="calendar icon"></i>Año a filtrar: </label>
                                <select id="anFiltro" name="anFiltro" class="ui dropdown">
                                  
                                    <option value="2019">2019</option>
                                    <option value="2020">2020</option>
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>

                                </select>
                            
                    </div>

                    <div class="eight wide field">

        
                    <label style="color:#fafafa;"> <i class="calendar icon"></i>Mes a filtrar :</label>
                
                        <select id="mesFiltro" name="mesFiltro" class="ui dropdown">
                                <option value="01">Enero</option>
                                <option value="02">Febrero</option>
                                <option value="03">Marzo</option>
                                <option value="04">Abril</option>
                                <option value="05">Mayo</option>
                                <option value="06">Junio</option>
                                <option value="07">Julio</option>
                                <option value="08">Agosto</option>
                                <option value="09">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                        
                        </select>
                    </div>
        
        </div>
    </div>
    </form>
    </div>
    <div class="actions">
    <button class="ui left compact red labeled icon button" id="btnCancelar">
    <i class="close icon"></i>
    Cancelar
    </button>
    <button class="ui compact blue  icon button" id="btnProcesar">
    <i class="angle right icon"></i>
    Procesar
    </button>
</div>
</div>




<div class="ui tiny modal" id="modalVoucher">

<div class="header" style="background-color: black; color: white">
    Imprimir recibo de : <a id="no" style="color: aqua"></a> del mes :
    <a id="mesAnio" style="color: aqua"></a>
    </div>
    <div class="content" style="background-color: #DBDDDD; text-align:center;">
    
    <a id="tpa" name="tpa" style="display:none"></a>
    <input type="hidden" id="m">
    <input type="hidden" id="a">
    <input type="hidden" id="id">
    <a id="cantidadLe" name="cantidadLe" style="display:none"></a>
    <h3>¿Imprimir voucher?</h3>
    </div>
<div class="actions">
    <button class="ui red deny button">Cancelar</button>
    <button class="ui blue  button" id="imprimir">Imprimir</button>
    
</div>
</div>

<script src="./res/tablas/tablaPlanilla.js"></script>
<script>
$(document).ready(function(){
    $('#planillafiltro').modal('setting', 'closable', false).modal('show');
    
    var d = new Date(); 
var mes =  d.getMonth();
var mesF = '';
var anio = d.getFullYear();

if(mes < 10){
 var mesC = mes + 1;
var mesF = '0' + mesC;

$("#mesFiltro").dropdown('set selected', mesF);
$("#anFiltro").dropdown('set selected', anio);
}else{
 mesF = mes + 1;
 $("#anFiltro").dropdown('set selected', anio);
 $("#mesFiltro").dropdown('set selected', mesF);
}
    

    $('#dias').mask("##");
    $('#vacacion').mask("###0.00", {reverse: true});
    $('#afpVejez').mask("###0.00", {reverse: true});
    $('#afpComision').mask("###0.00", {reverse: true});
    $('#isss').mask("###0.00", {reverse: true});
    $('#renta').mask("###0.00", {reverse: true});
    $('#aguinaldo').mask("###0.00", {reverse: true});
    $('#otros').mask("###0.00", {reverse: true});
});
var planilla=(ele)=>{
 
$("#nombre").text($(ele).attr("nombre"));
$("#pago").text($(ele).attr("tipoPago"));
$("#dias").val($(ele).attr("diasT"));
$("#sueldo").val($(ele).attr("sueldo"));
$("#sueldoDevengado").val($(ele).attr("sueldoD"));
$("#vacacion").val($(ele).attr("vacacion"));
$("#aguinaldo").val($(ele).attr("aguinaldo"));
$("#afpVejez").val($(ele).attr("afpEmV"));
$("#afpComision").val($(ele).attr("afpEmC"));
$("#isss").val($(ele).attr("isssE"));
$("#renta").val($(ele).attr("renta"));
$("#otros").val($(ele).attr("otros"));
$("#descuentos").val($(ele).attr("totalDesM"));
$("#totalPago").val($(ele).attr("totalP"));
$("#idMaestro").val($(ele).attr("id"));
$("#idPlanilla").val($(ele).attr("idPlanilla"));

if($(ele).attr("tipoPago")=="Por honorarios"){
    $("#ho").show();
    $("#s1").hide();
    $("#s2").hide();
    $("#s3").hide();
    $("#tipo").val(1);
}else{
    $("#ho").hide();
    $("#s1").show();
    $("#s2").show();
    $("#s3").show();
    $("#tipo").val(2);
}

$('#modalPlanilla').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
}



$("#totalizar").click(function(){
    var dias = $("#dias").val();
    var sueldo = $("#sueldo").val();

    var sueldoPorDia = sueldo / 30;

    var sueldoDevengado = sueldoPorDia * dias;



    var vacacion = $("#vacacion").val();

    


    if($("#tipo").val() == "1"){
        var renta = sueldoDevengado * 0.10;
        var afpVejez  = 0.00;
        var afpComision = 0.00;
        var isss = 0.00;
    }else{
        var renta = 0.00;
        if(sueldoDevengado > 5352.54){
            var afpVejez = 303.88;
        }
        else{
            var afpVejez = sueldoDevengado * 0.04;
        }

        if(sueldoDevengado > 5352.54){
            var afpComision = 303.88;
        }
        else{
            var afpComision = sueldoDevengado * 0.0325;
        }

        if(sueldoDevengado > 685.71){
            var isss = 51.44;
        }
        else{
            var isss = sueldoDevengado * 0.03;
        }
    }
    

    

    var otros = $("#otros").val();

    var aguinaldo = $("#aguinaldo").val();

   
    $("#sueldoDevengado").val(sueldoDevengado.toFixed(2));

    var descuentos =  parseFloat(afpVejez) + parseFloat(afpComision) + parseFloat(isss) + parseFloat(renta) + parseFloat(otros);
    var totalPago = parseFloat(sueldoDevengado) + parseFloat(vacacion) + parseFloat(aguinaldo) - parseFloat(descuentos);

    $("#totalPago").val(totalPago.toFixed(2));
    $("#descuentos").val(descuentos.toFixed(2));
    $("#afpVejez").val(afpVejez.toFixed(2));
    $("#afpComision").val(afpComision.toFixed(2));
    $("#isss").val(isss.toFixed(2));
    $("#renta").val(renta.toFixed(2));
});






$("#btnProcesar").click(function(){


var d = new Date(); 
var mes =  d.getMonth();
var mesF = '';
var anio = d.getFullYear();

if(mes < 10){
 var mesC = mes + 1;
var mesF = '0' + mesC;
}else{
 mesF = mes + 1;

}

if($("#anFiltro").val() >anio){
    $('#planillafiltro').modal('hide');
    swal({
        title: '¡Rango no encontrado!',
        text: 'El año a filtrar debe ser menor o igual al año actual',
        imageUrl: "./res/img/warning.gif",
        imageWidth: 200,
        imageHeight: 175,
        allowOutsideClick: false,
        allowEscapeKey: false,
        allowEnterKey: false,

        showConfirmButton: true,
        confirmButtonColor: "#00903C",
                   
        }).then((result) => {
            $('#planillafiltro').modal('setting', 'closable', false).modal('show');
                
        });
}

else{





var mes  = $("#mesFiltro").val();
var anio  = $("#anFiltro").val();


$.ajax({
			type:"POST",
			url:"?1=MaestrosController&2=planillaMensual",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				
			}
});




$('#planillafiltro').modal('hide');

$.ajax({
			type:"POST",
			url:"?1=Funciones&2=sueldosMensuales",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#sueldosMen').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=sueldoDevengados",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#sueldoDev').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=afpCo",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#afpCo').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=afpImv",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#afpImv').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=isss",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#isssE').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=isr",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#isr').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=otroR",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#otroR').html(r);
			}
});

$.ajax({
			type:"POST",
			url:"?1=Funciones&2=vacacion",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#vac').html(r);
			}
});

$.ajax({
			type:"POST",
			url:"?1=Funciones&2=aguinaldo",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#agui').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=retenciones",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#reten').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=pagos",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#tp').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=gr",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#gr').html(r);
			}
});

filtrarPlanilla(mes , anio);
var mesR = $("#mesFiltro option:selected").text();
var anR = $("#anFiltro option:selected").text();

$("#rango").text(mesR+" "+anR);
}



});


$("#btnAct").click(function(){ 
location.reload();
} );    

$("#btnCancelar").click(function(){ 
location.href = "?1=UsuarioController&2=dashboard";
} );



$("#guardar").click(function(){

    alertify.confirm("¿Desea guardar los datos?",
            function(){
                const form = $('#frmPlanilla');

                const datosFormulario = new FormData(form[0]);

                $.ajax({
                enctype: 'multipart/form-data',
                contentType: false,
                processData: false,
                cache: false,
                type: 'POST',
                url: '?1=MaestrosController&2=guardarPlanilla',
                data: datosFormulario,
                success: function(r) {
                    $('#dtMaestros').DataTable().ajax.reload();
                    if(r == 1) {
                    $.amaran({

                    'theme'     :'awesome ok',
                    'content'   :{
                    title:'Listo!',
                    message:'Datos guardados!',
                    info:'Actualizado en planilla',
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


$("#actualizar").click(function(){


    var mes  = $("#mesFiltro").val();
var anio  = $("#anFiltro").val();



$('#planillafiltro').modal('hide');

$.ajax({
			type:"POST",
			url:"?1=Funciones&2=sueldosMensuales",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#sueldosMen').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=sueldoDevengados",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#sueldoDev').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=afpCo",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#afpCo').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=afpImv",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#afpImv').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=isss",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#isssE').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=isr",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#isr').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=otroR",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#otroR').html(r);
			}
});

$.ajax({
			type:"POST",
			url:"?1=Funciones&2=vacacion",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#vac').html(r);
			}
});

$.ajax({
			type:"POST",
			url:"?1=Funciones&2=aguinaldo",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#agui').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=retenciones",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#reten').html(r);
			}
});



$.ajax({
			type:"POST",
			url:"?1=Funciones&2=pagos",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#tp').html(r);
			}
});


$.ajax({
			type:"POST",
			url:"?1=Funciones&2=gr",
            data:{
                mes:mes,
                anio:anio,
            },
        success:function(r){
				$('#gr').html(r);
			}
});

});

var voucher=(ele)=>{

    var mes  = $("#mesFiltro").val();
var anio  = $("#anFiltro").val();


var mesT  = $("#mesFiltro option:selected").text();
var anioT  = $("#anFiltro option:selected").text();

var id = $(ele).attr("id");


$("#no").text($(ele).attr("nombre"));
$("#mesAnio").text(mesT + " " +anioT);
$("#m").val(mes);
$("#a").val(anio);
$("#tpa").text($(ele).attr("tipoPago"));
$("#id").val(id);
var sueldo = $(ele).attr("sueldoD");

$("#cantidadLe").load("app/view/Maestros/ajax.php",{ sueldo : sueldo });

$('#modalVoucher').modal('setting', 'closable', false).modal('show');







}


$("#imprimir").click(function(){
    var mes  = $("#mesFiltro").val();
var anio  = $("#anFiltro").val();
var id = $("#id").val();
var letras = $("#cantidadLe").text();
$('#modalVoucher').modal('hide');
    if($("#tpa").text() =="Por honorarios"){
      
window.open('?1=MaestrosController&2=voucherRenta&mes='+mes+'&anio='+anio+'&id='+id+"&letras="+letras,'_blank');
                                return false;

    }else{
        
        window.open('?1=MaestrosController&2=voucherSeguro&mes='+mes+'&anio='+anio+'&id='+id+"&letras="+letras,'_blank');
                                return false;
    }
});
</script>