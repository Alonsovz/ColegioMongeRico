<?php
  require_once './vendor/autoload.php';
  $mysqli = new mysqli("localhost","root","","colegioMongeRico");
  $listado = $mysqli -> query ("select p.*, concat(m.nombre,' ',m.apellido) as nombre,
  format((p.sueldoM),2) as sueldoM,
  format((p.sueldoD),2) as sueldoD,
  format((p.vacacion),2) as vacacion,
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
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Nombre</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Días T</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Sueldo Mensual</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Sueldo Devengado</th>
                    <th style="background-color: #447820; color:white;border: 1px solid white;">Vacación</th>
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
            <tbody style="background-color:#E4E6E2;">
            <?php
                    while ($valores = mysqli_fetch_array($listado)) {
                        echo '
                        
                        <tr>
                        
                        
                        <td style="width:20%;">'.utf8_encode($valores["nombre"]).'</td>
                        <td style="width:5%;"><form class="ui form"><input type="text" id="diasT" value="'.utf8_encode($valores["diasT"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="sueldoM" value="'.utf8_encode($valores["sueldoM"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="sueldoD" value="'.utf8_encode($valores["sueldoD"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="vacacion" value="'.utf8_encode($valores["vacacion"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="afpEmV" value="'.utf8_encode($valores["afpEmV"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="afpEmC" value="'.utf8_encode($valores["afpEmC"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="isssE" value="'.utf8_encode($valores["isssE"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="renta" value="'.utf8_encode($valores["renta"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="otros" value="'.utf8_encode($valores["otros"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="totalDesM" value="'.utf8_encode($valores["totalDesM"]).'"></form></td>
                        <td style="width:7%;"><form class="ui form"><input type="text" id="totalP" value="'.utf8_encode($valores["totalP"]).'"></form></td>
                        <td><a class="ui black button" id='.$valores["idMaestro"].' name='.utf8_encode($valores["nombre"]).' onclick="reporte(this)"><i class="file icon"></i></a></td>
                        </tr>
                        ';
                    }
            ?>
            </tbody>
            </table>

</div>
<script>

$(document).ready(function(){
    $("#diasT").mask("99");
    $("#sueldoM").mask("###0.00", {reverse: true});
    $("#sueldoD").mask("###0.00", {reverse: true});
    $("#vacacion").mask("###0.00", {reverse: true});
    $("#afpEmV").mask("###0.00", {reverse: true});
    $("#afpEmC").mask("###0.00", {reverse: true});
    $("#isssE").mask("###0.00", {reverse: true});
    $("#renta").mask("###0.00", {reverse: true});
    $("#otros").mask("###0.00", {reverse: true});
    $("#totalDesM").mask("###0.00", {reverse: true});
    $("#totalP").mask("###0.00", {reverse: true});

});
var reporte=(ele)=>{
       var id= $(ele).attr("id");
       var nombre =$(ele).attr("name");
       
      
    }
</script>