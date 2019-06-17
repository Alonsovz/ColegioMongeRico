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
            <input type="hidden" id="idMaestro" name="idMaestro">
         
            <tbody style="background-color:#E4E6E2;">
            <?php
                    while ($valores = mysqli_fetch_array($listado)) {
                        echo '
                        
                        <tr>
                        
                        <td style="width:0%;"><button style="" class="ui black button" id='.$valores["idMaestro"].' onclick="definirID(this)"><i class="lock icon"></i></button>
                        <button style="display:none;" class="ui green button" id="des'.$valores["idMaestro"].'" idB='.$valores["idMaestro"].' onclick="guardar(this)"><i class="check icon"></i></button></td>
                        <td style="width:20%;">'.utf8_encode($valores["nombre"]).'</td>
                        <td style="width:6%;" >
                        
                        <input type="hidden" id="pago'.$valores["idMaestro"].'" value="'.utf8_encode($valores["pago"]).'">
                        <form class="ui form"><input type="text" style="background-color:#C4C3C3;" disabled id="diasT'.$valores["idMaestro"].'" value="'.utf8_encode($valores["diasT"]).'"></form></td>
                        <td style="width:8%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled  id="sueldoM'.$valores["idMaestro"].'" value="'.utf8_encode($valores["sueldoM"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text"style="background-color:#C4C3C3;"  disabled id="sueldoD'.$valores["idMaestro"].'" value="'.utf8_encode($valores["sueldoD"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled id="vacacion'.$valores["idMaestro"].'" value="'.utf8_encode($valores["vacacion"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled id="aguinaldo'.$valores["idMaestro"].'" value="'.utf8_encode($valores["aguinaldo"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled id="afpEmV'.$valores["idMaestro"].'" value="'.utf8_encode($valores["afpEmV"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled  id="afpEmC'.$valores["idMaestro"].'" value="'.utf8_encode($valores["afpEmC"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled id="isssE'.$valores["idMaestro"].'" value="'.utf8_encode($valores["isssE"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled id="renta'.$valores["idMaestro"].'" value="'.utf8_encode($valores["renta"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled  id="otros'.$valores["idMaestro"].'" value="'.utf8_encode($valores["otros"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled  id="totalDesM'.$valores["idMaestro"].'" value="'.utf8_encode($valores["totalDesM"]).'">
                        </form></td>
                        <td style="width:7%;"><form class="ui form">
                        <input type="text" style="background-color:#C4C3C3;" disabled id="totalP'.$valores["idMaestro"].'" value="'.utf8_encode($valores["totalP"]).'">
                        </form></td>
                        <td style="width:1%;"><a class="ui black button" id='.$valores["idMaestro"].' name='.utf8_encode($valores["nombre"]).' onclick="reporte(this)"><i class="file icon"></i></a></td>
                        </tr>
                        ';
                    }
            ?>
            </tbody>
            </table>

</div>
<script>


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

     $("#diasT"+id).css("background-color","white");
     $("#sueldoM"+id).css("background-color","white");
     $("#sueldoD"+id).css("background-color","white");
     $("#vacacion"+id).css("background-color","white");
     $("#aguinaldo"+id).css("background-color","white");
     $("#afpEmV"+id).css("background-color","white");
     $("#afpEmC"+id).css("background-color","white");
     $("#isssE"+id).css("background-color","white");
     $("#renta"+id).css("background-color","white");
     $("#otros"+id).css("background-color","white");
     $("#totalDesM"+id).css("background-color","white");
     $("#totalP"+id).css("background-color","white");

     $("#diasT"+id).keyup(function(){

        var diasT = $("#diasT"+id).val();
    var sueldoM = $("#sueldoM"+id).val();

    if($("#pago"+id).val() == "Por seguro"){

    if(diasT<31){
       var sueldoDiario= sueldoM / 30;
        var sueldoDevengado = sueldoDiario*diasT;
         $("#sueldoD"+id).val(sueldoDevengado.toFixed(2));

        if(sueldoDevengado <= 5352.00){
            var descAfpV = sueldoDevengado * 0.04;
            var descAfpC = sueldoDevengado * 0.0325;

            $("#afpEmV"+id).val(descAfpV.toFixed(2));
            $("#afpEmC"+id).val(descAfpC.toFixed(2));

        }
        else{
            $("#afpEmV"+id).val('303.88');
            $("#afpEmC"+id).val('303.88');
        }

        if(sueldoDevengado <= 685.71){
            var descISSS = sueldoDevengado * 0.03;
            

            $("#isssE"+id).val(descISSS.toFixed(2));

        }
        else{
           
            $("#isssE"+id).val('51.44');
        }


     $("#vacacion"+id).keyup(function(){
    var vacacion = $("#vacacion"+id).val();
    var totalP = $("#totalP"+id).val();

    var total = parseFloat(vacacion) + parseFloat(totalP);
            
  //  alert(total.toFixed(2));

    $("#totalP"+id).val('');
    $("#totalP"+id).val(total.toFixed(2));
});
    }
    }

    if($("#pago"+id).val() == "Por honorarios"){

                if(diasT<31){
                var sueldoDiario= sueldoM / 30;
                    var sueldoDevengado = sueldoDiario * diasT;

                    var descRenta = sueldoDevengado * 0.1;
                    $("#renta"+id).val(descRenta.toFixed(2));

                    

                    
                    var desc = sueldoDevengado - descRenta;

                    $("#totalP"+id).val(desc.toFixed(2));
                    $("#sueldoD"+id).val(sueldoDevengado.toFixed(2));


$("#vacacion"+id).keyup(function(){
    var vacacion = $("#vacacion"+id).val();
    var totalP = $("#totalP"+id).val();

    var total = vacacion - totalP;
            
   // alert(total.toFixed(2));

    $("#totalP"+id).val('');
    $("#totalP"+id).val(total.toFixed(2));
});

                }
            }

          

            });
      
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
       

      $("#diasT"+idB).css("background-color","#C4C3C3");
     $("#sueldoM"+idB).css("background-color","#C4C3C3");
     $("#sueldoD"+idB).css("background-color","#C4C3C3");
     $("#vacacion"+idB).css("background-color","#C4C3C3");
     $("#aguinaldo"+idB).css("background-color","#C4C3C3");
     $("#afpEmV"+idB).css("background-color","#C4C3C3");
     $("#afpEmC"+idB).css("background-color","#C4C3C3");
     $("#isssE"+idB).css("background-color","#C4C3C3");
     $("#renta"+idB).css("background-color","#C4C3C3");
     $("#otros"+idB).css("background-color","#C4C3C3");
     $("#totalDesM"+idB).css("background-color","#C4C3C3");
     $("#totalP"+idB).css("background-color","#C4C3C3");


        
     
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
<script language=javascript type=text/javascript>
function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}
document.onkeypress = stopRKey; 
</script>