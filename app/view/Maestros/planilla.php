
<div id="app">
        <div class="ui grid">
            <div class="row">
                    <div class="titulo">
                    <i class="users icon"></i>
                        Planilla de Pagos <font color="#210B61" size="20px">.</font>

                        <button class="ui right floated blue labeled icon button" id="btnGuardar">
                    <i class="save icon"></i>
                    Guardar Todo
                </button>
                    </div>
                    
            </div>
          
                
           
        </div>
        
</div>
<div class="row title-bar">
            <div class="sixteen wide column">
                <div class="ui divider"></div>
            </div>
        </div>
        <div class="row">
            <div class="sixteen wide column">
            <table id="dtMaestros" class="ui selectable very compact celled table" style="width:100%; margin:auto;">
                    <thead>
                        <tr>
                        
                            <th style="background-color: #E6C404; color:white;">N°</th>
                            <th style="background-color: #08088A; color:white;">Nombre</th>
                            <th style="background-color: #08088A; color:white;">Tipo de pago</th>
                            <th style="background-color: #08088A; color:white;">Sueldo</th>
                            <th style="background-color: #08088A; color:white;">Acciones</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>

<div class="ui modal" id="modalPlanilla" >
    <div class="header" style="background-color: #0BAA67; color:white;">
    Planilla de : <a id="nombre" style="color:yellow;"></a> .<br>
    Tipo de pago: <a id="pago" style="color:yellow;"></a> .
    </div>
    <div class="content" style="background-color:#D4D6D6">
    <form class="ui form" id="planilla">
    <input type="hidden" id="idMaestro">
        <div class="field">
            <div class="fields">
            <div class="six wide field">
                    <label><i class="calendar icon"></i>Días trabajados</label>
                    <input type="text" id="dias" placeholder="Dias trabajados" >
                </div>
                <div class="six wide field">
                    <label><i class="user icon"></i><i class="dollar icon"></i>Sueldo Mensual</label>
                    <input type="text" id="sueldo" readonly>
                </div>
                
                <div class="six wide field">
                    <label><i class="ship icon"></i><i class="dollar icon"></i>Vacación</label>
                    <input type="text" id="vacacion" placeholder="vacacion" >
                </div>
                </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="field">
            <div class="fields">
                <div class="six wide field" id="s1">
                    <label><i class="address card icon"></i><i class="dollar icon"></i>AFP Vejez</label>
                    <input type="text" id="afpVejez" placeholder="AFP Vejez" >
                </div>
                <div class="six wide field" id="s2">
                    <label><i class="address card icon"></i><i class="dollar icon"></i>AFP Comisión</label>
                    <input type="text" id="afpComision" placeholder="AFP Comisión" >
                </div>
                <div class="six wide field" id="s3">
                    <label><i class="address card icon"></i><i class="dollar icon" ></i>ISSS</label>
                    <input type="text" id="isss" placeholder="ISSS" >
                </div>
               
             
                <div class="six wide field" id="ho">
                    <label><i class="address card icon"></i><i class="dollar icon" ></i>ISR</label>
                    <input type="text" id="renta" placeholder="Renta" >
                
                </div>
                <div class="six wide field">
                        <label><i class="question mark icon"></i><i class="dollar icon"></i>Otros descuentos</label>
                        <input type="text" id="otros" placeholder="Otros descuentos" >
                </div>

                <div class="six wide field">
                        <label><i class="gift icon"></i><i class="dollar icon"></i>Aguinaldo</label>
                        <input type="text" id="aguinaldo" placeholder="Aguinaldo" >
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
                <div class="six wide field">
                    <label><i class="money icon"></i><i class="dollar icon"></i>Sueldo Devengado</label>
                    <input type="text" id="sueldoDevengado" placeholder="Sueldo Devengado" readonly>
                </div>
                <div class="six wide field">
                        <label><i class="money bill icon"></i><i class="dollar icon"></i>Total de Descuentos</label>
                        <input type="text" id="descuentos" placeholder="Total de descuentos" readonly>
                </div>
                <div class="six wide field">
                        <label><i class="money bill icon"></i><i class="dollar icon"></i>Total a pagar</label>
                        <input type="text" id="totalPago" placeholder="Total a pagar" readonly>
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
<script src="./res/tablas/tablaPlanilla.js"></script>
<script>
$(document).ready(function(){
    $('#dias').mask("##");
    $('#vacacion').mask("###0.00", {reverse: true});
    $('#afpVejez').mask("###0.00", {reverse: true});
    $('#afpComision').mask("###0.00", {reverse: true});
    $('#isss').mask("###0.00", {reverse: true});
    $('#renta').mask("###0.00", {reverse: true});
    $('#aguinaldo').mask("###0.00", {reverse: true});
    $('#otros').mask("###0.00", {reverse: true});
});
$(document).on("click", ".btnEditar", function () {
 $('#modalPlanilla').modal('setting', 'autofocus', false).modal('setting', 'closable', false).modal('show');
$("#nombre").text($(this).attr("nombre"));
$("#pago").text($(this).attr("tipoPago"));
$("#sueldo").val($(this).attr("sueldo"));
$("#idMaestro").val($(this).attr("id"));

if($(this).attr("tipoPago")=="Por honorarios"){
    $("#ho").show();
    $("#s1").hide();
    $("#s2").hide();
    $("#s3").hide();
}else{
    $("#ho").hide();
    $("#s1").show();
    $("#s2").show();
    $("#s3").show();
}
});

$("#reset").click(function(){
    $('#planilla')[0].reset();
});

$("#totalizar").click(function(){
    var dias = $("#dias").val();
    var sueldo = $("#sueldo").val();

    var sueldoPorDia = sueldo / 30;

    var sueldoDevengado = sueldoPorDia * dias;



    var vacacion = $("#vacacion").val();

    var afpVejez = $("#afpVejez").val();

    var afpComision = $("#afpComision").val();

    var isss = $("#isss").val();

    var otros = $("#otros").val();

    var aguinaldo = $("#aguinaldo").val();

    var renta = $("#renta").val();
    $("#sueldoDevengado").val(sueldoDevengado.toFixed(2));

    var descuentos =  parseFloat(afpVejez) + parseFloat(afpComision) + parseFloat(isss) + parseFloat(renta) + parseFloat(otros);
    var totalPago = parseFloat(sueldoDevengado) + parseFloat(vacacion) + parseFloat(aguinaldo) - parseFloat(descuentos);

    $("#totalPago").val(totalPago.toFixed(2));
    $("#descuentos").val(descuentos.toFixed(2));
});


</script>