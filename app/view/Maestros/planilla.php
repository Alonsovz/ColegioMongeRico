<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");
  $listado = $mysqli -> query ("select p.*, concat(m.nombre,' ',m.apellido) as nombre, m.tipoPago as pago,
  format((m.sueldo),2) as sueldoM,
  format((p.sueldoD),2) as sueldoD,
  format((p.vacacion),2) as vacacion,
  format((p.aguinaldo),2) as aguinaldo,
  format((p.afpEmV),2) as afpEmV,
  format((p.afpEmC),2) as afpEmC,
  format((p.isssE),2) as isssE,
  format((p.renta),2) as renta,
  format((p.otros),2) as otros,
  format((p.totalDesM),2) as totalDesM,
  format((p.totalP),2) as totalP
   from planilla p 
  inner join maestros m on m.idMaestro = p.idMaestro 
  where m.idEliminado=1 and p.mes=DATE_FORMAT(CURDATE(),'%m') and anio=year(CURRENT_DATE())  order by nombre asc");
 ?>
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
<div class="content" style="width:100%;">
<br>
        <br>
        <table class="ui selectable very compact celled table" style="width:100%; margin:auto;text-align:center; font-size:13px;">
            <thead>
                <tr>
                <th style="background-color: #447820; color:white;border: 1px solid white;"><i class="lock icon"></i></th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Nombre</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Días T</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Sueldo Mensual</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Sueldo Devengado</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Vacación</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Aguinaldo</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">AFP|Vejez</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">AFP|Comsión</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">ISSS | Emp.</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Imp. Renta </th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Otros desc.</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Total Desc</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Total a Pagar</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;"><i class="list icon"></i></th>
                    
                </tr>
            </thead>
            <input type="hidden" id="idMaestro">
            <tbody style="background-color:#E4E6E2;">
            <?php
                    while ($valores = mysqli_fetch_array($listado)) {
                        echo '
                        
                        <tr>
                        
                        <td style="width:1%;"><button style="width:2%;" class="ui black button" id='.$valores["idMaestro"].' onclick="definirID(this)"><i class="lock icon"></i></button>
                        <button style="display:none;width:2%;" class="ui green button" id="des'.$valores["idMaestro"].'" idB='.$valores["idMaestro"].' onclick="guardar(this)"><i class="check icon"></i></button></td>
                        <td style="width:20%;">'.utf8_encode($valores["nombre"]).'</td>
                        <td style="width:4%;" >
                        
                        <input type="hidden" id="pago'.$valores["idMaestro"].'" value="'.utf8_encode($valores["pago"]).'">
                        <input type="text" disabled id="diasT'.$valores["idMaestro"].'" value="'.utf8_encode($valores["diasT"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled  id="sueldoM'.$valores["idMaestro"].'" value="'.utf8_encode($valores["sueldoM"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="sueldoD'.$valores["idMaestro"].'" value="'.utf8_encode($valores["sueldoD"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="vacacion'.$valores["idMaestro"].'" value="'.utf8_encode($valores["vacacion"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="aguinaldo'.$valores["idMaestro"].'" value="'.utf8_encode($valores["aguinaldo"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="afpEmV'.$valores["idMaestro"].'" value="'.utf8_encode($valores["afpEmV"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled  id="afpEmC'.$valores["idMaestro"].'" value="'.utf8_encode($valores["afpEmC"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="isssE'.$valores["idMaestro"].'" value="'.utf8_encode($valores["isssE"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="renta'.$valores["idMaestro"].'" value="'.utf8_encode($valores["renta"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled  id="otros'.$valores["idMaestro"].'" value="'.utf8_encode($valores["otros"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled  id="totalDesM'.$valores["idMaestro"].'" value="'.utf8_encode($valores["totalDesM"]).'"></td>
                        <td style="width:7%;"><input type="text" disabled id="totalP'.$valores["idMaestro"].'" value="'.utf8_encode($valores["totalP"]).'"></td>
                        <td style="width:1%;"><a class="ui black button" id='.$valores["idMaestro"].' name='.utf8_encode($valores["nombre"]).' onclick="reporte(this)"><i class="file icon"></i></a></td>
                        </tr>
                        ';
                    }
            ?>
            </tbody>
            </table>

</div>
<script>

$(document).ready(function(){
    

 
    
});
var reporte=(ele)=>{
       var id= $(ele).attr("id");
       var nombre =$(ele).attr("name");
       
      
    }

    var definirID=(ele)=>{
        
       $("#idMaestro").val($(ele).attr("id"));

       $("#"+$(ele).attr("id")).hide(1000);
       $("#des"+$(ele).attr("id")).show(1000);
       
     var id = $(ele).attr("id");

     $("#diasT"+id).mask("99");
    $("#sueldoM"+id).mask("###0.00", {reverse: true});
    $("#sueldoD"+id).mask("###0.00", {reverse: true});
    $("#vacacion"+id).mask("###0.00", {reverse: true});
    $("#afpEmV"+id).mask("###0.00", {reverse: true});
    $("#afpEmC"+id).mask("###0.00", {reverse: true});
    $("#isssE"+id).mask("###0.00", {reverse: true});
    $("#renta"+id).mask("###0.00", {reverse: true});
    $("#otros"+id).mask("###0.00", {reverse: true});
    $("#totalDesM"+id).mask("###0.00", {reverse: true});
    $("#totalP"+id).mask("###0.00", {reverse: true});

     $("#diasT"+id).prop("disabled",false);
     $("#sueldoM"+id).prop("disabled",false);
     $("#sueldoD"+id).prop("disabled",false);
     $("#vacacion"+id).prop("disabled",false);
     $("#aguinaldo"+id).prop("disabled",false);
     $("#afpEmV"+id).prop("disabled",false);
     $("#afpEmC"+id).prop("disabled",false);
     $("#isssE"+id).prop("disabled",false);
     $("#renta"+id).prop("disabled",false);
     $("#otros"+id).prop("disabled",false);
     $("#totalDesM"+id).prop("disabled",false);
     $("#totalP"+id).prop("disabled",false);
      
    }


    var guardar=(ele)=>{
        
        $("#idMaestro").val($(ele).attr("idB"));
 
        $("#des"+$(ele).attr("idB")).hide(1000);
        $("#"+$(ele).attr("idB")).show(1000);
        
      var idB = $(ele).attr("idB");
 
  
 
      $("#diasT"+idB).prop("disabled",true);
      $("#sueldoM"+idB).prop("disabled",true);
      $("#sueldoD"+idB).prop("disabled",true);
      $("#vacacion"+idB).prop("disabled",true);
      $("#aguinaldo"+idB).prop("disabled",true);
      $("#afpEmV"+idB).prop("disabled",true);
      $("#afpEmC"+idB).prop("disabled",true);
      $("#isssE"+idB).prop("disabled",true);
      $("#renta"+idB).prop("disabled",true);
      $("#otros"+idB).prop("disabled",true);
      $("#totalDesM"+idB).prop("disabled",true);
      $("#totalP"+idB).prop("disabled",true);
       
     }

function diasT(){
    var diasT = $("#diasT").val();
    var sueldoM = $("#sueldoM").val();

    if($("#pago").val() == "Por seguro"){

    if(diasT<31){
       var sueldoDiario= sueldoM / 30;
        var sueldoDevengado = sueldoDiario*diasT;
         $("#sueldoD").val(sueldoDevengado.toFixed(2));

        if(sueldoDevengado <= 5352.00){
            var descAfpV = sueldoDevengado * 0.04;
            var descAfpC = sueldoDevengado * 0.0325;

            $("#afpEmV").val(descAfpV.toFixed(2));
            $("#afpEmC").val(descAfpC.toFixed(2));

        }
        else{
            $("#afpEmV").val('303.88');
            $("#afpEmC").val('303.88');
        }


        if(sueldoDevengado <= 685.71){
            var descISSS = sueldoDevengado * 0.03;
            

            $("#isssE").val(descISSS.toFixed(2));

        }
        else{
           
            $("#isssE").val('51.44');
        }
        

    }

    }


    if($("#pago").val() == "Por honorarios"){

if(diasT<31){
   var sueldoDiario= sueldoM / 30;
    var sueldoDevengado = sueldoDiario * diasT;

    var descRenta = sueldoDevengado * 0.1;
     $("#renta").val(descRenta.toFixed(2));

    

    
     var desc = sueldoDevengado - descRenta;

     $("#totalP").val(desc.toFixed(2));
     $("#sueldoD").val(sueldoDevengado.toFixed(2));

}





}
}

$("#vacacion").keyup(function(){
    var vacacion = $(this).val();
    var totalP = $("#totalP").val();

    

    var total = parseFloat(vacacion) + parseFloat($('#totalP').val())

    

    $("#totalP").val(total.toFixed(2));
});


$("#aguinaldo").keyup(function(){
    var aguinaldo = $("#aguinaldo").val();
    var totalP = $("#totalP").val();

    var total = vacacion + totalP;

    $("#totalP").val(total.toFixed(2));
});



</script>